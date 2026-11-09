{{--
    ReadSphere AI chatbot (floating green button + chat panel).
    Include it ONCE per layout, just above </body>:   @include('partials.chatbot')
    The @once block means it can never appear twice on a page, even if the layout is included twice.
    Any other button with the attribute data-rs-chat-toggle also opens the chat.
--}}
@once
<link rel="stylesheet" href="{{ asset('css/chatbot.css') }}">

<div id="rs-chatbot"
     data-send-url="{{ route('chatbot.send') }}"
     data-history-url="{{ route('chatbot.history') }}"
     data-clear-url="{{ route('chatbot.clear') }}"
     data-csrf="{{ csrf_token() }}">

    <button type="button" class="rs-chat-toggle" id="rsChatToggle" data-rs-chat-toggle
            aria-label="Open ReadSphere assistant" aria-expanded="false" aria-controls="rsChatPanel">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
             stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M21 11.5a8.4 8.4 0 0 1-9 8.4 8.6 8.6 0 0 1-3.6-.8L3 21l1.9-5.4A8.4 8.4 0 1 1 21 11.5z"/>
        </svg>
    </button>

    <section class="rs-chat-panel" id="rsChatPanel" hidden aria-label="ReadSphere assistant">
        <header class="rs-chat-header">
            <div class="rs-chat-title">
                <span class="rs-chat-avatar" aria-hidden="true">RS</span>
                <div>
                    <strong>ReadSphere Assistant</strong>
                    <small>Books, contests &amp; news</small>
                </div>
            </div>
            <div class="rs-chat-actions">
                <button type="button" id="rsChatClear" title="Clear chat" aria-label="Clear chat">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M3 6h18M8 6V4h8v2m-9 0 1 14h8l1-14"/>
                    </svg>
                </button>
                <button type="button" id="rsChatClose" title="Close" aria-label="Close chat">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" aria-hidden="true">
                        <path d="M6 6l12 12M18 6 6 18"/>
                    </svg>
                </button>
            </div>
        </header>

        <div class="rs-chat-messages" id="rsChatMessages" aria-live="polite"></div>

        <form class="rs-chat-form" id="rsChatForm" autocomplete="off">
            <input type="text" id="rsChatInput" maxlength="1000"
                   placeholder="Ask about books, contests, news..." aria-label="Your message" required>
            <button type="submit" id="rsChatSend">Send</button>
        </form>
    </section>
</div>

<script src="{{ asset('js/chatbot.js') }}" defer></script>
@endonce