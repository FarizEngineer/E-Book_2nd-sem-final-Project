@extends('user.navbar')
@section('nav')

<style>
    .news-card {
        --rs-green: #7db375;
        --rs-green-dark: #67a05f;
        --rs-green-soft: rgba(125, 179, 117, 0.16);
        --rs-navy: #0b0b2b;
        --rs-grey: #f4f4f4;
        --status: var(--rs-green);

        display: flex;
        flex-direction: row;
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 6px 24px rgba(20, 40, 30, 0.08);
        overflow: hidden;
        border-top: 5px solid var(--status);
    }

    /* Status colors, no PHP needed: matched against the data-tag attribute */
    .news-card[data-tag="open"]    { --status: #4f9a5f; }
    .news-card[data-tag="pending"] { --status: #d9a21b; }
    .news-card[data-tag="closed"]  { --status: #d64545; }

    /* ---------- Image (left side) ---------- */
    .news-card__image {
        position: relative;
        flex: 0 0 42%;
        max-width: 42%;
        min-height: 440px;
        background: var(--rs-green-soft);
        overflow: hidden;
    }

    .news-card__image img {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform .6s ease;
    }

    .news-card:hover .news-card__image img {
        transform: scale(1.04);
    }

    .news-card__image::after {
        /* soft fade at the bottom so the badge stays readable */
        content: '';
        position: absolute;
        inset: auto 0 0 0;
        height: 35%;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.45), transparent);
        pointer-events: none;
    }

    .news-card__badge {
        position: absolute;
        left: 22px;
        bottom: 22px;
        z-index: 1;
        background: var(--status);
        color: #fff;
        font-weight: 600;
        font-size: .85rem;
        padding: 6px 18px;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
    }

    /* ---------- Text (right side) ---------- */
    .news-card__body {
        flex: 1;
        min-width: 0;
        display: flex;
        flex-direction: column;
        padding: 2.25rem 2.5rem;
    }

    .news-card__meta {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 10px 14px;
        margin-bottom: 1.1rem;
    }

    .news-card__icon {
        width: 42px;
        height: 42px;
        border-radius: 10px;
        background: var(--rs-green);
        color: #fff;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 1.1rem;
        flex-shrink: 0;
    }

    .news-card__chip {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: var(--rs-grey);
        color: #4b5563;
        font-size: .9rem;
        font-weight: 500;
        padding: 7px 14px;
        border-radius: 8px;
    }

    .news-card__chip i {
        color: var(--rs-green-dark);
    }

    .news-card__title {
        font-weight: 700;
        color: var(--rs-navy);
        margin: 0 0 .9rem;
        line-height: 1.3;
    }

    .news-card__text {
        color: #4b5563;
        line-height: 1.8;
        font-size: 1.02rem;
        margin: 0;
    }

    .news-card__footer {
        border-top: 1px dashed rgba(125, 179, 117, 0.6);
        margin-top: auto;
        padding-top: 1.25rem;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        color: #6b7280;
        font-size: .9rem;
    }

    /* keeps the footer away from the text when the text is long or short */
    .news-card__text + .news-card__footer {
        margin-top: 1.75rem;
    }

    .news-card__body::after {
        content: none;
    }

    .news-card__back {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: var(--rs-green);
        color: #fff;
        font-weight: 600;
        padding: 9px 22px;
        border-radius: 40px;
        text-decoration: none;
        transition: all .2s ease;
    }

    .news-card__back:hover {
        background: var(--rs-navy);
        color: #fff;
    }

    .news-card__back i {
        transition: transform .2s ease;
    }

    .news-card__back:hover i {
        transform: translateX(-4px);
    }

    /* Tablets: narrower image, tighter text padding */
    @media (max-width: 991.98px) {
        .news-card__image {
            flex-basis: 40%;
            max-width: 40%;
            min-height: 380px;
        }

        .news-card__body { padding: 1.75rem 1.6rem; }
    }

    /* Phones: image on top, text below */
    @media (max-width: 767.98px) {
        .news-card { flex-direction: column; }

        .news-card__image {
            flex-basis: auto;
            max-width: 100%;
            min-height: 0;
            height: 240px;
        }

        .news-card__body { padding: 1.4rem 1.2rem 1.6rem; }
        .news-card__badge { left: 14px; bottom: 14px; }
    }
</style>

<!-- Breadcumb Section Start -->
<div class="breadcrumb-wrapper bg-cover section-padding"
    style="background-image: url({{ asset('user/assets/img/hero/breadcrumb-bg.jpg') }})">
    <div class="container">
        <div class="page-heading">
            <h1>News Detail Page</h1>
            <div class="page-header">
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                    <li>
                        <a href="{{ url('/') }}">
                            Home
                        </a>
                    </li>
                    <li>
                        <i class="fa-solid fa-chevron-right"></i>
                    </li>
                    <li>
                        News
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Breadcumb Section End -->

<div class="container">
    <div class="row mt-5 mb-5">
        <div class="col-12 col-lg-11 mx-auto">

            <div class="news-card" data-tag="{{ strtolower($data->tag ?? '') }}">

                <div class="news-card__image">
                    <img src="{{ $data->image ? asset('storage/newimage/' . $data->image) : asset('user/assets/img/news/09.jpg') }}"
                         alt="{{ $data->title }}">
                    <span class="news-card__badge">{{ $data->tag }}</span>
                </div>

                <div class="news-card__body">

                    <div class="news-card__meta">
                        <span class="news-card__icon">
                            <i class="fa-solid fa-newspaper"></i>
                        </span>
                        <span class="news-card__chip">
                            <i class="fa-regular fa-calendar-days"></i>Deadline: {{ $data->dealine }}
                        </span>
                    </div>

                    <h2 class="news-card__title h3 text-break">{{ $data->title }}</h2>
                    <p class="news-card__text">{!! nl2br(e($data->news)) !!}</p>

                    <div class="news-card__footer">
                        <span><i class="fa-regular fa-clock me-1"></i>Stay tuned for more updates from ReadSphere</span>
                        <a href="{{ url()->previous() }}" class="news-card__back">
                            <i class="fa-solid fa-arrow-left-long"></i> Back
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection