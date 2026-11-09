<?php

namespace App\Services;

use RuntimeException;

/**
 * An AI call failed. getMessage() is safe to show to any visitor;
 * $detail holds the technical reason and is shown only when APP_DEBUG=true.
 */
class AiChatException extends RuntimeException
{
    public function __construct(string $message, public string $detail = '', ?\Throwable $previous = null)
    {
        parent::__construct($message, 0, $previous);
    }
}