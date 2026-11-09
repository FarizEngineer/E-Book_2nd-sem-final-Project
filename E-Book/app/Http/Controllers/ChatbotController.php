<?php

namespace App\Http\Controllers;

use App\Models\ChatbotMessage;
use App\Services\AiChatException;
use App\Services\AiChatService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Throwable;

class ChatbotController extends Controller
{
    /** How many recent messages are sent to the AI as context. */
    private const CONTEXT_LIMIT = 12;

    /** How many recent messages are shown when the widget opens. */
    private const HISTORY_LIMIT = 30;

    public function __construct(private AiChatService $ai)
    {
    }

    /**
     * GET /chatbot/history
     * Returns the current visitor's recent messages (oldest first).
     */
    public function history(Request $request): JsonResponse
    {
        $messages = $this->conversation($request)
            ->orderByDesc('id')
            ->limit(self::HISTORY_LIMIT)
            ->get(['role', 'content'])
            ->reverse()
            ->values();

        return response()->json(['messages' => $messages]);
    }

    /**
     * POST /chatbot/message
     * Saves the visitor's message, asks the AI, saves and returns the reply.
     */
    public function send(Request $request): JsonResponse
    {
        $data = $request->validate([
            'message' => ['required', 'string', 'max:1000'],
        ]);

        $userMessage = ChatbotMessage::create($this->owner($request) + [
            'role'    => 'user',
            'content' => trim($data['message']),
        ]);

        $history = $this->conversation($request)
            ->orderByDesc('id')
            ->limit(self::CONTEXT_LIMIT)
            ->get(['role', 'content'])
            ->reverse()
            ->map(fn ($m) => ['role' => $m->role, 'content' => $m->content])
            ->values()
            ->all();

        try {
            $reply = $this->ai->chat($history, $this->resolveRole($request));
        } catch (Throwable $e) {
            // Remove the unanswered message so the saved history stays clean.
            $userMessage->delete();

            // The service already wrote the real provider error to storage/logs/laravel.log
            // and gave us a message that is safe to show to visitors.
            $payload = ['message' => $e->getMessage() !== ''
                ? $e->getMessage()
                : 'Sorry, the assistant is not available right now. Please try again in a moment.'];

            // While testing (APP_DEBUG=true) also send the technical reason; never in production.
            if (config('app.debug')) {
                $payload['detail'] = $e instanceof AiChatException ? $e->detail : $e->getMessage();
            }

            return response()->json($payload, 503);
        }

        ChatbotMessage::create($this->owner($request) + [
            'role'    => 'assistant',
            'content' => $reply,
        ]);

        return response()->json(['reply' => $reply]);
    }

    /**
     * DELETE /chatbot/history
     * Clears the current visitor's chat.
     */
    public function clear(Request $request): JsonResponse
    {
        $this->conversation($request)->delete();

        return response()->json(['ok' => true]);
    }

    /**
     * Query for the current visitor's messages:
     * logged-in people are matched by user id, guests by their session id.
     */
    private function conversation(Request $request)
    {
        $query = ChatbotMessage::query();

        if ($user = $request->user()) {
            return $query->where('user_id', $user->getKey());
        }

        return $query->whereNull('user_id')
            ->where('session_key', $request->session()->getId());
    }

    /**
     * Columns that say who owns a new message.
     */
    private function owner(Request $request): array
    {
        if ($user = $request->user()) {
            return ['user_id' => $user->getKey(), 'session_key' => null];
        }

        return ['user_id' => null, 'session_key' => $request->session()->getId()];
    }

    /**
     * guest | user | author | admin
     */
    private function resolveRole(Request $request): string
    {
        $user = $request->user();

        if (! $user) {
            return 'guest';
        }

        // Read the raw column so a missing "role" column never throws an error.
        $role = strtolower((string) ($user->getAttributes()['role'] ?? ''));

        if (in_array($role, ['admin', 'author', 'user'], true)) {
            return $role;
        }

        // Support for role packages such as spatie/laravel-permission.
        foreach (['admin', 'author'] as $name) {
            if (method_exists($user, 'hasRole') && $user->hasRole($name)) {
                return $name;
            }
        }

        return 'user';
    }
}