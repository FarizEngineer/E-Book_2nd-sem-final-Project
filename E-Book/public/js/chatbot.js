/* ReadSphere AI chatbot - floating panel. Talks to the /chatbot/* routes in Laravel. */
(function () {
    'use strict';

    // If the widget was included more than once, keep the first copy and remove the rest.
    var copies = document.querySelectorAll('#rs-chatbot');
    for (var c = 1; c < copies.length; c++) {
        copies[c].parentNode.removeChild(copies[c]);
    }

    var root = copies[0];
    if (!root) { return; }

    // Move the widget to the end of <body>, so a sticky, transformed or clipped
    // wrapper in the site theme can never change where the fixed button appears.
    document.body.appendChild(root);

    var toggleBtn = document.getElementById('rsChatToggle');
    var panel     = document.getElementById('rsChatPanel');
    var closeBtn  = document.getElementById('rsChatClose');
    var clearBtn  = document.getElementById('rsChatClear');
    var list      = document.getElementById('rsChatMessages');
    var form      = document.getElementById('rsChatForm');
    var input     = document.getElementById('rsChatInput');
    var sendBtn   = document.getElementById('rsChatSend');

    var urls = {
        send:    root.getAttribute('data-send-url'),
        history: root.getAttribute('data-history-url'),
        clear:   root.getAttribute('data-clear-url')
    };
    var csrf = root.getAttribute('data-csrf');

    var WELCOME = "Hi! I'm the ReadSphere Assistant. Ask me for book recommendations, " +
                  "how competitions and prizes work, the latest news, or how to order.";

    var historyLoaded = false;
    var busy = false;
    var typingEl = null;

    function scrollDown() {
        list.scrollTop = list.scrollHeight;
    }

    // textContent (not innerHTML) keeps every message safe from script injection.
    function addMessage(type, text) {
        var el = document.createElement('div');
        el.className = 'rs-msg rs-msg-' + type;
        el.textContent = text;
        list.appendChild(el);
        scrollDown();
        return el;
    }

    function showTyping() {
        typingEl = document.createElement('div');
        typingEl.className = 'rs-msg rs-msg-bot rs-typing';
        typingEl.innerHTML = '<span></span><span></span><span></span>';
        list.appendChild(typingEl);
        scrollDown();
    }

    function hideTyping() {
        if (typingEl && typingEl.parentNode) {
            typingEl.parentNode.removeChild(typingEl);
        }
        typingEl = null;
    }

    function setBusy(state) {
        busy = state;
        input.disabled = state;
        sendBtn.disabled = state;
    }

    function request(url, method, body) {
        var options = {
            method: method,
            credentials: 'same-origin',
            headers: {
                'Accept': 'application/json',
                'X-CSRF-TOKEN': csrf,
                'X-Requested-With': 'XMLHttpRequest'
            }
        };

        if (body) {
            options.headers['Content-Type'] = 'application/json';
            options.body = JSON.stringify(body);
        }

        return fetch(url, options).then(function (res) {
            return res.json().catch(function () { return {}; }).then(function (data) {
                if (!res.ok) {
                    var message = data.message || 'Something went wrong. Please try again.';
                    if (data.detail) { message += ' [' + data.detail + ']'; } // only sent when APP_DEBUG=true
                    if (res.status === 419) { message = 'Your session has expired. Please refresh the page.'; }
                    if (res.status === 429) { message = 'You are sending messages too fast. Please wait a moment.'; }
                    throw new Error(message);
                }
                return data;
            });
        });
    }

    function showWelcome() {
        addMessage('bot', WELCOME);
    }

    function loadHistory() {
        historyLoaded = true;
        request(urls.history, 'GET').then(function (data) {
            var messages = data.messages || [];
            if (!messages.length) {
                showWelcome();
                return;
            }
            messages.forEach(function (m) {
                addMessage(m.role === 'user' ? 'user' : 'bot', m.content);
            });
        }).catch(function () {
            showWelcome();
        });
    }

    function openPanel() {
        panel.hidden = false;
        toggleBtn.setAttribute('aria-expanded', 'true');
        if (!historyLoaded) { loadHistory(); }
        input.focus();
    }

    function closePanel() {
        panel.hidden = true;
        toggleBtn.setAttribute('aria-expanded', 'false');
        toggleBtn.focus();
    }

    function togglePanel() {
        if (panel.hidden) { openPanel(); } else { closePanel(); }
    }

    // The green button, or any other element with the attribute data-rs-chat-toggle,
    // opens and closes the chat. Capture phase + stopPropagation cancels that element's
    // old action (for example a scroll-to-top script).
    document.addEventListener('click', function (e) {
        var hit = e.target.closest ? e.target.closest('[data-rs-chat-toggle]') : null;
        if (!hit) { return; }
        e.preventDefault();
        e.stopPropagation();
        togglePanel();
    }, true);

    closeBtn.addEventListener('click', closePanel);

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && !panel.hidden) { closePanel(); }
    });

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        if (busy) { return; }

        var text = input.value.trim();
        if (!text) { return; }

        addMessage('user', text);
        input.value = '';
        setBusy(true);
        showTyping();

        request(urls.send, 'POST', { message: text }).then(function (data) {
            hideTyping();
            addMessage('bot', data.reply);
        }).catch(function (err) {
            hideTyping();
            addMessage('error', err.message);
        }).then(function () {
            setBusy(false);
            input.focus();
        });
    });

    clearBtn.addEventListener('click', function () {
        if (busy) { return; }
        if (!window.confirm('Clear this conversation?')) { return; }

        request(urls.clear, 'DELETE').then(function () {
            list.innerHTML = '';
            showWelcome();
        }).catch(function (err) {
            addMessage('error', err.message);
        });
    });
})();