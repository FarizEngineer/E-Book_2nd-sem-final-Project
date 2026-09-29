@extends('user.navbar')
@section('nav')

<style>
    .news-card {
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 6px 20px rgba(20, 40, 30, 0.06);
        overflow: hidden;
        display: flex;
    }
    .news-card__accent {
        width: 6px;
        background: #2f7d5c; /* default/fallback color */
        flex-shrink: 0;
    }
    /* Status colors, no PHP needed — matched against the data-tag attribute below */
    .news-card[data-tag="open"] .news-card__accent    { background: #1f6b4c; }
    .news-card[data-tag="pending"] .news-card__accent { background: #b8860b; }
    .news-card[data-tag="closed"] .news-card__accent  { background: #b3261e; }

    .news-card__body {
        padding: 2rem 2.25rem;
        flex: 1;
    }
    .news-card__icon {
        width: 42px;
        height: 42px;
        border-radius: 12px;
        background: #1f4d3d;
        color: #fff;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 1.1rem;
    }
    .news-card__badge {
        font-weight: 600;
        font-size: 0.8rem;
        padding: 0.35rem 0.85rem;
        border-radius: 999px;
        background: #eef2f0;
        color: #2f7d5c;
    }
    .news-card[data-tag="open"] .news-card__badge {
        background: #eaf7ef;
        color: #1f6b4c;
    }
    .news-card[data-tag="pending"] .news-card__badge {
        background: #fdf3e0;
        color: #8a6100;
    }
    .news-card[data-tag="closed"] .news-card__badge {
        background: #fbeae9;
        color: #b3261e;
    }

    .news-card__title {
        font-weight: 700;
        color: #1f2937;
        margin: 1.1rem 0 0.6rem;
    }
    .news-card__text {
        color: #4b5563;
        line-height: 1.7;
        font-size: 1.02rem;
    }
    .news-card__footer {
        border-top: 1px solid #eef0ee;
        margin-top: 1.5rem;
        padding-top: 1rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #6b7280;
        font-size: 0.9rem;
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
    <div class="row mt-4 mb-4">
        <div class="col-md-10 offset-md-1">

            <div class="news-card" data-tag="{{ strtolower($data->tag) }}">
                <div class="news-card__accent"></div>
                <div class="news-card__body">

                    <div class="d-flex align-items-center justify-content-between">
                        <span class="news-card__icon">
                            <i class="fa-solid fa-newspaper"></i>
                        </span>
                        <span class="news-card__badge">{{ $data->tag }}</span>
                    </div>

                    <h4 class="news-card__title">{{ $data->title }}</h4>
                    <p class="news-card__text">{{ $data->news }}</p>

                    <div class="news-card__footer">
                        <i class="fa-solid fa-calendar-days"></i>
                        <span>Deadline: {{ $data->dealine }}</span>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection