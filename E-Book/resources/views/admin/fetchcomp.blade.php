@extends('admin.sidebar')
@section('admin')

<style>
    .cp-wrap {
        --rs-green: #7db375;
        --rs-green-dark: #67a05f;
        --rs-green-soft: rgba(125, 179, 117, 0.16);
        --rs-navy: #0b0b2b;
        --rs-grey: #f4f4f4;
        --rs-muted: #707070;
    }

    /* ---------- Page heading ---------- */
    .cp-heading {
        font-weight: 700;
        color: var(--rs-navy);
        position: relative;
        display: inline-block;
        padding-bottom: 10px;
        margin: 0;
    }

    .cp-heading::after {
        content: '';
        position: absolute;
        left: 25%;
        bottom: 0;
        width: 50%;
        height: 3px;
        border-radius: 3px;
        background: var(--rs-green);
    }

    .cp-count {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-size: .85rem;
        font-weight: 600;
        color: var(--rs-green-dark);
        background: var(--rs-green-soft);
        padding: 4px 16px;
        border-radius: 20px;
    }

    .cp-upload {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: var(--rs-green);
        color: #fff;
        font-weight: 600;
        padding: 10px 28px;
        border-radius: 40px;
        text-decoration: none;
        transition: all .25s ease;
    }

    .cp-upload:hover {
        background: var(--rs-navy);
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 8px 18px rgba(11, 11, 43, 0.25);
    }

    /* ---------- Competition card (one per line) ---------- */
    @keyframes cpFadeUp {
        from { opacity: 0; transform: translateY(22px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    .cp-card {
        --status: var(--rs-green);

        background: #fff;
        border-radius: 18px;
        border-left: 6px solid var(--status);
        box-shadow: 0 4px 18px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        text-align: left;
        animation: cpFadeUp .5s ease both;
        transition: transform .3s ease, box-shadow .3s ease;
    }

    .cp-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 14px 30px rgba(125, 179, 117, 0.3);
    }

    /* status colors, matched against the status text */
    .cp-card[data-status*="open"],
    .cp-card[data-status*="active"],
    .cp-card[data-status*="live"],
    .cp-card[data-status*="running"]   { --status: #4f9a5f; }
    .cp-card[data-status*="close"],
    .cp-card[data-status*="end"],
    .cp-card[data-status*="expire"],
    .cp-card[data-status*="inactive"]  { --status: #d64545; }
    .cp-card[data-status*="upcoming"],
    .cp-card[data-status*="pending"],
    .cp-card[data-status*="soon"]      { --status: #d9a21b; }

    .cp-head {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 10px;
        padding: 16px 24px;
        background: linear-gradient(90deg, var(--rs-green-soft), transparent);
        border-bottom: 1px dashed rgba(125, 179, 117, 0.6);
    }

    .cp-no {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        font-weight: 700;
        color: var(--rs-navy);
    }

    .cp-no .cp-tile {
        width: 38px;
        height: 38px;
        border-radius: 10px;
        background: var(--rs-green);
        color: #fff;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .cp-status {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        background: var(--status);
        color: #fff;
        font-size: .78rem;
        font-weight: 700;
        text-transform: capitalize;
        padding: 5px 16px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    }

    .cp-body { padding: 22px 24px 18px; }

    .cp-title {
        font-weight: 700;
        font-size: 1.35rem;
        color: var(--rs-navy);
        line-height: 1.3;
        margin-bottom: 12px;
    }

    .cp-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-bottom: 14px;
    }

    .cp-chip {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: var(--rs-grey);
        color: #4b5563;
        font-size: .85rem;
        font-weight: 500;
        padding: 6px 14px;
        border-radius: 8px;
    }

    .cp-chip i { color: var(--rs-green-dark); }
    .cp-chip b  { color: var(--rs-navy); font-weight: 600; }

    .cp-desc {
        color: #4b5563;
        line-height: 1.7;
        margin-bottom: 18px;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    /* ---------- Prizes ---------- */
    .cp-prizes {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 12px;
        margin-bottom: 16px;
    }

    .cp-prize {
        --medal: #d9a21b;

        display: flex;
        align-items: center;
        gap: 12px;
        background: var(--rs-grey);
        border-radius: 12px;
        padding: 12px 14px;
        min-width: 0;
        transition: transform .25s ease, background .25s ease;
    }

    .cp-prize:hover {
        transform: translateY(-3px);
        background: #fff;
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
    }

    .cp-prize--1 { --medal: #d9a21b; }
    .cp-prize--2 { --medal: #9aa3ab; }
    .cp-prize--3 { --medal: #b5753a; }

    .cp-medal {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        background: var(--medal);
        color: #fff;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        box-shadow: 0 0 0 4px color-mix(in srgb, var(--medal) 22%, transparent);
    }

    .cp-prize small {
        display: block;
        color: var(--rs-muted);
        font-size: .72rem;
        line-height: 1.1;
        margin-bottom: 3px;
    }

    .cp-prize strong {
        color: var(--rs-navy);
        font-size: .95rem;
        word-break: break-word;
    }

    /* ---------- Time row ---------- */
    .cp-times {
        display: flex;
        flex-wrap: wrap;
        gap: 10px 28px;
        font-size: .9rem;
        color: var(--rs-muted);
    }

    .cp-times span { display: inline-flex; align-items: center; gap: 9px; }

    .cp-times i {
        width: 30px;
        height: 30px;
        border-radius: 8px;
        background: var(--rs-green);
        color: #fff;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: .8rem;
    }

    .cp-times strong { color: var(--rs-navy); }

    /* ---------- Actions ---------- */
    .cp-actions {
        display: flex;
        justify-content: flex-end;
        gap: 8px;
        padding: 14px 24px;
        border-top: 1px dashed rgba(125, 179, 117, 0.6);
        background: #fafcfa;
    }

    .cp-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: .88rem;
        font-weight: 600;
        padding: 8px 22px;
        border-radius: 40px;
        text-decoration: none;
        border: 0;
        transition: all .2s ease;
    }

    .cp-btn:hover { transform: translateY(-2px); }

    .cp-btn--edit {
        background: var(--rs-green);
        color: #fff;
    }

    .cp-btn--edit:hover {
        background: var(--rs-green-dark);
        color: #fff;
        box-shadow: 0 8px 16px rgba(125, 179, 117, 0.45);
    }

    .cp-btn--delete {
        background: rgba(220, 53, 69, 0.1);
        color: #dc3545;
    }

    .cp-btn--delete:hover {
        background: #dc3545;
        color: #fff;
        box-shadow: 0 8px 16px rgba(220, 53, 69, 0.35);
    }

    /* ---------- Empty state ---------- */
    .cp-empty {
        text-align: center;
        padding: 50px 20px;
        background: var(--rs-grey);
        border: 2px dashed rgba(125, 179, 117, 0.6);
        border-radius: 18px;
        color: var(--rs-muted);
    }

    .cp-empty .cp-tile-lg {
        width: 70px;
        height: 70px;
        border-radius: 12px;
        background: var(--rs-green);
        color: #fff;
        margin: 0 auto 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.6rem;
    }

    @media (max-width: 767.98px) {
        .cp-prizes { grid-template-columns: 1fr; }
        .cp-head, .cp-body, .cp-actions { padding-left: 16px; padding-right: 16px; }
        .cp-title { font-size: 1.15rem; }
        .cp-actions .cp-btn { flex: 1; justify-content: center; }
    }

    @media (prefers-reduced-motion: reduce) {
        .cp-card { animation: none; }
    }
</style>

<div class="container cp-wrap pb-5">

    {{-- ===================== PAGE TITLE ===================== --}}
    <div class="text-center mt-4 mb-4">
        <h1 class="cp-heading">ALL Competitions</h1>
        <div class="mt-3">
            <span class="cp-count">
                <i class="fa-solid fa-trophy"></i>
                {{ count($data) }} {{ count($data) === 1 ? 'competition' : 'competitions' }}
            </span>
        </div>
        <div class="mt-3">
            <a class="cp-upload" href="{{ route('allcomp') }}">
                <i class="fa-solid fa-cloud-arrow-up"></i> Upload all competitions
            </a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>MESSAGE.....</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- ===================== COMPETITIONS (one card per line) ===================== --}}
    <div class="row g-4">

        @forelse ($data as $dt)
            <div class="col-12">
                <div class="cp-card" data-status="{{ strtolower($dt->status ?? '') }}" style="animation-delay: {{ $loop->index * 0.07 }}s;">

                    {{-- Header --}}
                    <div class="cp-head">
                        <span class="cp-no">
                            <span class="cp-tile"><i class="fa-solid fa-trophy"></i></span>
                            Competition no : {{ $dt->id }}
                        </span>
                        <span class="cp-status">
                            <i class="fa-solid fa-circle"></i>{{ $dt->status }}
                        </span>
                    </div>

                    {{-- Body --}}
                    <div class="cp-body">
                        <h4 class="cp-title text-break">{{ $dt->title }}</h4>

                        <div class="cp-tags">
                            <span class="cp-chip"><i class="fa-solid fa-bookmark"></i>Topic: <b>{{ $dt->topic }}</b></span>
                            <span class="cp-chip"><i class="fa-solid fa-shapes"></i>Type: <b>{{ $dt->type }}</b></span>
                        </div>

                        <p class="cp-desc">{{ $dt->description }}</p>

                        {{-- Prizes --}}
                        <div class="cp-prizes">
                            <div class="cp-prize cp-prize--1">
                                <span class="cp-medal"><i class="fa-solid fa-crown"></i></span>
                                <div>
                                    <small>1st prize</small>
                                    <strong>{{ $dt->first_prize }}</strong>
                                </div>
                            </div>
                            <div class="cp-prize cp-prize--2">
                                <span class="cp-medal"><i class="fa-solid fa-medal"></i></span>
                                <div>
                                    <small>2nd prize</small>
                                    <strong>{{ $dt->second_prize }}</strong>
                                </div>
                            </div>
                            <div class="cp-prize cp-prize--3">
                                <span class="cp-medal"><i class="fa-solid fa-award"></i></span>
                                <div>
                                    <small>3rd prize</small>
                                    <strong>{{ $dt->third_prize }}</strong>
                                </div>
                            </div>
                        </div>

                        {{-- Duration and deadline --}}
                        <div class="cp-times">
                            <span><i class="fa-regular fa-clock"></i>Duration: <strong>{{ $dt->time }} minutes</strong></span>
                            <span><i class="fa-regular fa-calendar-xmark"></i>Deadline: <strong>{{ $dt->deadline }}</strong></span>
                        </div>
                    </div>

                    {{-- Actions --}}
                    <div class="cp-actions">
                        <a href="{{ route('editcomppg', $dt->id) }}" class="cp-btn cp-btn--edit">
                            <i class="fa-solid fa-pen-to-square"></i> Edit
                        </a>
                        <a href="{{ route('delcomp', $dt->id) }}" class="cp-btn cp-btn--delete"
                           onclick="return confirm('Delete this competition?')">
                            <i class="fa-solid fa-trash"></i> Delete
                        </a>
                    </div>

                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="cp-empty">
                    <div class="cp-tile-lg"><i class="fa-solid fa-trophy"></i></div>
                    <h5 class="fw-semibold mb-1">No competitions found</h5>
                    <p class="mb-0">Uploaded competitions will appear here.</p>
                </div>
            </div>
        @endforelse

    </div>
</div>

@endsection