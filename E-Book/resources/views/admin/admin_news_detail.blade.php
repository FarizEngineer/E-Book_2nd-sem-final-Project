@extends('admin.sidebar')
@section('admin')

@php
    // Marks the news as expired when its deadline has passed
    try {
        $expired = $data->dealine ? \Carbon\Carbon::parse($data->dealine)->isPast() : false;
    } catch (\Throwable $e) {
        $expired = false;
    }
@endphp

<style>
    .ad-wrap {
        --rs-green: #7db375;
        --rs-green-dark: #67a05f;
        --rs-green-soft: rgba(125, 179, 117, 0.16);
        --rs-navy: #0b0b2b;
        --rs-grey: #f4f4f4;
        --rs-muted: #707070;
    }

    /* ---------- Page header ---------- */
    .ad-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 12px;
        margin: 24px 0 22px;
    }

    .ad-heading {
        font-weight: 700;
        color: var(--rs-navy);
        position: relative;
        display: inline-block;
        padding-bottom: 10px;
        margin: 0;
    }

    .ad-heading::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 55%;
        height: 3px;
        border-radius: 3px;
        background: var(--rs-green);
    }

    .ad-crumbs {
        list-style: none;
        display: flex;
        align-items: center;
        gap: 10px;
        margin: 0;
        padding: 0;
        font-size: .88rem;
        color: var(--rs-muted);
    }

    .ad-crumbs a {
        color: var(--rs-green-dark);
        text-decoration: none;
        font-weight: 600;
    }

    .ad-crumbs a:hover { color: var(--rs-navy); }
    .ad-crumbs i { font-size: .65rem; }

    /* ---------- Card (image left, text right) ---------- */
    @keyframes adFadeUp {
        from { opacity: 0; transform: translateY(22px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    .ad-card {
        --status: var(--rs-green);

        display: flex;
        flex-direction: row;
        background: #fff;
        border-radius: 16px;
        border-top: 5px solid var(--status);
        box-shadow: 0 6px 24px rgba(20, 40, 30, 0.1);
        overflow: hidden;
        text-align: left;
        animation: adFadeUp .6s ease both;
    }

    /* status colors by tag value (admin tags + the public ones) */
    .ad-card[data-tag="active"],
    .ad-card[data-tag="open"]     { --status: #4f9a5f; }
    .ad-card[data-tag="unactive"],
    .ad-card[data-tag="closed"]   { --status: #d64545; }
    .ad-card[data-tag="upcoming"],
    .ad-card[data-tag="pending"]  { --status: #d9a21b; }
    .ad-card[data-tag="latest"]   { --status: #0b0b2b; }

    /* ---------- Image ---------- */
    .ad-image {
        position: relative;
        flex: 0 0 42%;
        max-width: 42%;
        min-height: 460px;
        background: var(--rs-green-soft);
        overflow: hidden;
    }

    .ad-image img {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform .6s ease;
    }

    .ad-card:hover .ad-image img {
        transform: scale(1.05);
    }

    .ad-image::after {
        content: '';
        position: absolute;
        inset: auto 0 0 0;
        height: 35%;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.5), transparent);
        pointer-events: none;
    }

    .ad-id {
        position: absolute;
        top: 16px;
        left: 16px;
        z-index: 1;
        background: rgba(11, 11, 43, 0.78);
        color: #fff;
        font-size: .78rem;
        font-weight: 600;
        padding: 5px 14px;
        border-radius: 8px;
    }

    .ad-tag {
        position: absolute;
        left: 20px;
        bottom: 20px;
        z-index: 1;
        background: var(--status);
        color: #fff;
        font-weight: 600;
        font-size: .85rem;
        text-transform: capitalize;
        padding: 6px 18px;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
    }

    /* ---------- Text ---------- */
    .ad-body {
        flex: 1;
        min-width: 0;
        display: flex;
        flex-direction: column;
        padding: 2.1rem 2.4rem 1.6rem;
    }

    .ad-title {
        font-weight: 700;
        color: var(--rs-navy);
        line-height: 1.3;
        margin: 0 0 .9rem;
    }

    .ad-text {
        color: #4b5563;
        line-height: 1.8;
        font-size: 1.02rem;
        margin: 0;
    }

    /* admin info tiles */
    .ad-info {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 12px;
        margin-top: 1.6rem;
    }

    .ad-info-item {
        display: flex;
        align-items: center;
        gap: 12px;
        background: var(--rs-grey);
        border-radius: 12px;
        padding: 12px 14px;
        min-width: 0;
    }

    .ad-info-icon {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        background: var(--rs-green);
        color: #fff;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .ad-info-item small {
        display: block;
        color: var(--rs-muted);
        font-size: .75rem;
        line-height: 1.1;
        margin-bottom: 3px;
    }

    .ad-info-item strong {
        color: var(--rs-navy);
        font-size: .92rem;
        word-break: break-word;
    }

    .ad-state {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-size: .82rem;
        font-weight: 700;
        padding: 3px 12px;
        border-radius: 20px;
    }

    .ad-state--live {
        background: rgba(79, 154, 95, 0.15);
        color: #3b8450;
    }

    .ad-state--expired {
        background: rgba(214, 69, 69, 0.12);
        color: #d64545;
    }

    /* ---------- Actions ---------- */
    .ad-actions {
        margin-top: auto;
        padding-top: 1.1rem;
        border-top: 1px dashed rgba(125, 179, 117, 0.6);
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        gap: 10px;
    }

    .ad-actions-group {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }

    .ad-text + .ad-info + .ad-actions,
    .ad-info + .ad-actions {
        margin-top: 1.6rem;
    }

    .ad-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: .88rem;
        font-weight: 600;
        padding: 9px 20px;
        border-radius: 40px;
        text-decoration: none;
        border: 0;
        transition: all .2s ease;
    }

    .ad-btn:hover { transform: translateY(-2px); }

    .ad-btn--back {
        background: var(--rs-grey);
        color: var(--rs-navy);
    }

    .ad-btn--back:hover {
        background: var(--rs-navy);
        color: #fff;
    }

    .ad-btn--back i { transition: transform .2s ease; }
    .ad-btn--back:hover i { transform: translateX(-4px); }

    .ad-btn--view {
        background: var(--rs-green-soft);
        color: var(--rs-green-dark);
    }

    .ad-btn--view:hover {
        background: var(--rs-green);
        color: #fff;
    }

    .ad-btn--edit {
        background: var(--rs-green);
        color: #fff;
    }

    .ad-btn--edit:hover {
        background: var(--rs-green-dark);
        color: #fff;
        box-shadow: 0 8px 16px rgba(125, 179, 117, 0.45);
    }

    .ad-btn--delete {
        background: rgba(220, 53, 69, 0.1);
        color: #dc3545;
    }

    .ad-btn--delete:hover {
        background: #dc3545;
        color: #fff;
        box-shadow: 0 8px 16px rgba(220, 53, 69, 0.35);
    }

    /* Tablets: narrower image */
    @media (max-width: 991.98px) {
        .ad-image {
            flex-basis: 38%;
            max-width: 38%;
            min-height: 400px;
        }

        .ad-body { padding: 1.6rem 1.4rem 1.3rem; }
    }

    /* Phones: image on top, text below */
    @media (max-width: 767.98px) {
        .ad-card { flex-direction: column; }

        .ad-image {
            flex-basis: auto;
            max-width: 100%;
            min-height: 0;
            height: 230px;
        }

        .ad-info { grid-template-columns: 1fr; }
        .ad-actions { justify-content: stretch; }
        .ad-actions-group { width: 100%; }
        .ad-actions .ad-btn { flex: 1; justify-content: center; }
    }

    @media (prefers-reduced-motion: reduce) {
        .ad-card { animation: none; }
    }
</style>

<div class="container ad-wrap pb-5">

    {{-- ===================== HEADER ===================== --}}
    <div class="ad-header">
        <h1 class="ad-heading h2">News Details</h1>
        <ul class="ad-crumbs">
            <li><a href="{{ url()->previous() }}">All News</a></li>
            <li><i class="fa-solid fa-chevron-right"></i></li>
            <li>Details</li>
        </ul>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>MESSAGE.....</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- ===================== NEWS CARD ===================== --}}
    <div class="ad-card" data-tag="{{ strtolower($data->tag ?? '') }}">

        {{-- Image (left) --}}
        <div class="ad-image">
            <img src="{{ $data->image ? asset('storage/newimage/' . $data->image) : asset('user/assets/img/news/09.jpg') }}"
                 alt="{{ $data->title }}">
            <span class="ad-id">#{{ $data->id }}</span>
            <span class="ad-tag">{{ $data->tag }}</span>
        </div>

        {{-- Text (right) --}}
        <div class="ad-body">

            <h2 class="ad-title h3 text-break">{{ $data->title }}</h2>
            <p class="ad-text">{!! nl2br(e($data->news)) !!}</p>

            {{-- Admin information --}}
            <div class="ad-info">
                <div class="ad-info-item">
                    <span class="ad-info-icon"><i class="fa-solid fa-hashtag"></i></span>
                    <div>
                        <small>News ID</small>
                        <strong>#{{ $data->id }}</strong>
                    </div>
                </div>

                <div class="ad-info-item">
                    <span class="ad-info-icon"><i class="fa-regular fa-user"></i></span>
                    <div>
                        <small>Uploaded by</small>
                        <strong>{{ $data->user->name ?? 'Admin' }}</strong>
                    </div>
                </div>

                <div class="ad-info-item">
                    <span class="ad-info-icon"><i class="fa-regular fa-calendar-days"></i></span>
                    <div>
                        <small>Expires</small>
                        <strong>{{ $data->dealine }}</strong>
                    </div>
                </div>

                <div class="ad-info-item">
                    <span class="ad-info-icon"><i class="fa-solid fa-signal"></i></span>
                    <div>
                        <small>Status</small>
                        @if($expired)
                            <span class="ad-state ad-state--expired"><i class="fa-solid fa-circle-xmark"></i> Expired</span>
                        @else
                            <span class="ad-state ad-state--live"><i class="fa-solid fa-circle-check"></i> Live</span>
                        @endif
                    </div>
                </div>
            </div>

            {{-- Actions --}}
            <div class="ad-actions">
                <a href="{{ url()->previous() }}" class="ad-btn ad-btn--back">
                    <i class="fa-solid fa-arrow-left-long"></i> Back
                </a>

                <div class="ad-actions-group">
                    <a href="{{ route('newsdtl', $data->id) }}" target="_blank" class="ad-btn ad-btn--view">
                        <i class="fa-regular fa-eye"></i> View on site
                    </a>
                    <a href="{{ route('edtnews', $data->id) }}" class="ad-btn ad-btn--edit">
                        <i class="fa-solid fa-pen-to-square"></i> Edit
                    </a>
                    <a href="{{ route('delnews', $data->id) }}" class="ad-btn ad-btn--delete"
                       onclick="return confirm('Delete this news?')">
                        <i class="fa-solid fa-trash"></i> Delete
                    </a>
                </div>
            </div>

        </div>
    </div>

</div>

@endsection