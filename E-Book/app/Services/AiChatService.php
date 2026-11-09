<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Throwable;

/**
 * Talks to any OpenAI-compatible chat API (Google Gemini, xAI Grok, OpenAI, ...).
 * Provider, key and model all come from config/services.php -> 'ai' (never from env() directly).
 */
class AiChatService
{
    /** HTTP statuses worth one more try: rate limited or temporarily overloaded. */
    private const RETRY_STATUSES = [429, 500, 502, 503, 504];

    /** Total attempts (1 = no retry). */
    private const MAX_ATTEMPTS = 2;

    public function isConfigured(): bool
    {
        return filled(config('services.ai.key'));
    }

    /**
     * Send the recent conversation to the AI and return its reply.
     *
     * @param  array<int, array{role: string, content: string}>  $history  Oldest message first.
     * @param  string  $role  guest | user | author | admin
     *
     * @throws AiChatException  The message is safe to show to visitors; details are in the log.
     */
    public function chat(array $history, string $role = 'user'): string
    {
        if (! $this->isConfigured()) {
            Log::error('AI chat: AI_API_KEY is empty. Add it to .env, then run php artisan config:clear.');

            throw new AiChatException('The assistant is not set up yet.', 'AI_API_KEY is empty. Add it to .env, then run php artisan config:clear.');
        }

        $url = rtrim((string) config('services.ai.base_url'), '/') . '/chat/completions';
        $model = (string) config('services.ai.model');

        $payload = [
            'model'    => $model,
            'messages' => array_merge(
                [['role' => 'system', 'content' => $this->systemPrompt($role)]],
                $history
            ),
            'stream'   => false,
            // Asks the model to think less before answering; keeps replies fast on free plans.
            'reasoning_effort' => 'low',
        ];

        $response = null;

        for ($attempt = 1; $attempt <= self::MAX_ATTEMPTS; $attempt++) {
            try {
                $response = Http::withToken((string) config('services.ai.key'))
                    ->acceptJson()
                    ->asJson()
                    ->timeout((int) config('services.ai.timeout', 25))
                    ->post($url, $payload);
            } catch (Throwable $e) {
                // Network problem or timeout: log the real reason, do not retry (it would double the wait).
                Log::error('AI chat: request failed before a response arrived', [
                    'url'     => $url,
                    'model'   => $model,
                    'error'   => $e->getMessage(),
                ]);

                throw new AiChatException('The assistant could not be reached. Please try again in a moment.', 'Request failed: ' . $e->getMessage(), $e);
            }

            if (! $response->failed()) {
                break;
            }

            $retryable = in_array($response->status(), self::RETRY_STATUSES, true);

            Log::warning('AI chat: provider returned an error', [
                'attempt' => $attempt . '/' . self::MAX_ATTEMPTS,
                'status'  => $response->status(),
                'model'   => $model,
                'url'     => $url,
                'error'   => $this->providerError($response),
            ]);

            if ($retryable && $attempt < self::MAX_ATTEMPTS) {
                // Wait as long as the provider asks (at most 5 seconds), otherwise 1.5 seconds.
                $wait = (int) $response->header('Retry-After');
                usleep(($wait > 0 ? min($wait, 5) : 1.5) * 1_000_000);

                continue;
            }

            throw new AiChatException(
                $this->friendlyMessage($response->status()),
                'HTTP ' . $response->status() . ' from ' . $model . ': ' . $this->providerError($response)
            );
        }

        $text = data_get($response->json(), 'choices.0.message.content');

        if (! is_string($text) || trim($text) === '') {
            Log::error('AI chat: provider returned an empty answer', [
                'model'  => $model,
                'finish' => data_get($response->json(), 'choices.0.finish_reason'),
                'body'   => mb_substr($response->body(), 0, 1000),
            ]);

            throw new AiChatException(
                'The assistant did not return an answer. Please rephrase your question.',
                'Empty answer from ' . $model . ', finish_reason=' . (string) data_get($response->json(), 'choices.0.finish_reason')
            );
        }

        return trim($text);
    }

    /**
     * The real error text from the provider, shortened for the log.
     * Handles both {"error": {"message": ...}} and the list form [{"error": {...}}] Gemini sometimes uses.
     */
    private function providerError($response): string
    {
        $json = $response->json();
        $message = data_get($json, 'error.message') ?? data_get($json, '0.error.message');

        return mb_substr((string) ($message ?: $response->body()), 0, 1000);
    }

    /** What the visitor sees for each kind of failure (the log has the technical reason). */
    private function friendlyMessage(int $status): string
    {
        return match (true) {
            $status === 429                  => 'The assistant is busy right now. Please try again in a minute.',
            in_array($status, [401, 403], true) => 'The assistant is not set up correctly yet.',
            $status === 404                  => 'The assistant is not set up correctly yet.',
            default                          => 'The assistant is not available right now. Please try again in a moment.',
        };
    }

    /**
     * The hidden instructions that make the AI behave like the ReadSphere assistant.
     */
    public function systemPrompt(string $role): string
    {
        $base = 'You are ReadSphere Assistant, the friendly helper of ReadSphere, an online e-library. '
            . 'ReadSphere lets people read books online, join reading competitions with prizes, '
            . 'follow the latest book news, and buy books with Cash on Delivery (COD) or online payment. '
            . 'Accounts have three roles: User, Author and Admin. '
            . 'Reply in the same language the person writes in. Keep replies short, clear and warm '
            . '(under 150 words unless the person asks for more). '
            . 'You can recommend books, give spoiler-light summaries, explain how ReadSphere works, '
            . 'and explain competitions, news and payment options in general terms. '
            . 'You cannot see orders, balances, prices or private account data. If asked for such details, '
            . 'say so and suggest the About Us page, the Contact page or support. '
            . 'Never guess ReadSphere-specific facts. Never ask for or accept passwords, card numbers or API keys. '
            . 'Politely decline requests unrelated to books, reading or ReadSphere.';

        $extra = match ($role) {
            'author' => ' The person is an Author. Also help with writing, publishing on ReadSphere, '
                . 'book descriptions, titles and promoting their books.',
            'admin'  => ' The person is an Admin. Also help with managing books, users, competitions, news '
                . 'and orders on the dashboard, and with writing announcements. You cannot change any data yourself.',
            'user'   => ' The person is a registered reader.',
            default  => ' The person is a visitor who is not logged in. Encourage them to register or log in '
                . 'when it would help (for example to join competitions).',
        };

        return $base . $extra;
    }
}