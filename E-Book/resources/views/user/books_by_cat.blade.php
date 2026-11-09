@extends('user.navbar')
@section('nav')

{{-- Styles for this page. The book cards use the same fb-theme classes as the Featured Books section,
     so if that CSS is already in your external file you can delete the card part of this block. --}}
<style>
    .fb-theme {
        --rs-green: #7db375;
        --rs-green-dark: #67a05f;
        --rs-green-soft: rgba(125, 179, 117, 0.16);
        --rs-navy: #0b0b2b;
        --rs-grey: #f4f4f4;
        --rs-muted: #707070;
    }

    /* ---------- Category intro bar ---------- */
    .cb-intro {
        display: flex;
        align-items: center;
        gap: 22px;
        background: var(--rs-grey);
        border-left: 6px solid var(--rs-green);
        border-radius: 16px;
        padding: 24px 28px;
        margin-bottom: 36px;
        animation: cbFadeUp .6s ease both;
    }

    @keyframes cbFadeUp {
        from { opacity: 0; transform: translateY(22px); }
        to   { opacity: 1; transform: translateY(0); }
    }

    .cb-intro-icon {
        width: 74px;
        height: 74px;
        border-radius: 18px;
        background: var(--rs-green);
        color: #fff;
        font-size: 1.8rem;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        box-shadow: 0 0 0 6px var(--rs-green-soft);
    }

    .cb-intro h2 {
        font-weight: 700;
        color: var(--rs-navy);
        margin: 0 0 6px;
    }

    .cb-intro p {
        color: var(--rs-muted);
        margin: 0;
    }

    .cb-count {
        margin-left: auto;
        flex-shrink: 0;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: var(--rs-green);
        color: #fff;
        font-weight: 600;
        font-size: .9rem;
        padding: 8px 20px;
        border-radius: 40px;
    }

    /* ---------- Book card ---------- */
    .fb-theme .shop-box-items.style-2 {
        height: 100%;
        display: flex;
        flex-direction: column;
        background: var(--rs-grey);
        border-radius: 12px;
        padding: 14px;
        box-shadow: none;
        transition: transform .25s ease, box-shadow .25s ease;
        animation: cbFadeUp .6s ease both;
    }

    .fb-theme .shop-box-items.style-2:hover {
        transform: translateY(-6px);
        box-shadow: 0 14px 30px rgba(125, 179, 117, 0.3);
    }

    .fb-theme .book-thumb {
        position: relative;
        height: 300px;
        border-radius: 10px;
        overflow: hidden;
        background: var(--rs-green-soft);
    }

    .fb-theme .book-thumb > a { display: block; height: 100%; }

    .fb-theme .book-thumb img.fb-cover {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform .4s ease;
    }

    .fb-theme .shop-box-items:hover .fb-cover { transform: scale(1.06); }

    .fb-theme .post-box {
        position: absolute;
        top: 12px;
        left: 12px;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .fb-theme .post-box li {
        background: var(--rs-green);
        color: #fff;
        font-size: .78rem;
        font-weight: 600;
        padding: 5px 14px;
        border-radius: 8px;
    }

    .fb-theme .shop-icon {
        position: absolute;
        top: 12px;
        right: 12px;
        list-style: none;
        margin: 0;
        padding: 0;
        gap: 8px;
        opacity: 0;
        transform: translateX(14px);
        transition: all .25s ease;
    }

    .fb-theme .shop-box-items:hover .shop-icon {
        opacity: 1;
        transform: translateX(0);
    }

    .fb-theme .shop-icon a {
        width: 40px;
        height: 40px;
        border-radius: 8px;
        background: var(--rs-green);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all .2s ease;
    }

    .fb-theme .shop-icon a:hover {
        background: var(--rs-navy);
        color: #fff;
    }

    .fb-theme .shop-icon img.icon {
        width: 16px;
        height: 16px;
        filter: brightness(0) invert(1);
    }

    @media (hover: none) {
        .fb-theme .shop-icon { opacity: 1; transform: none; }
    }

    .fb-theme .shop-content { flex: 1; padding: 18px 4px 6px; }

    .fb-theme .shop-content h3 {
        font-size: 1.15rem;
        font-weight: 700;
        margin-bottom: 10px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .fb-theme .shop-content h3 a {
        color: var(--rs-navy);
        text-decoration: none;
        transition: color .2s ease;
    }

    .fb-theme .shop-content h3 a:hover { color: var(--rs-green-dark); }

    .fb-theme .price-list {
        list-style: none;
        padding: 0;
        margin: 0 0 12px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .fb-theme .price-list li:first-child {
        color: var(--rs-green-dark);
        font-weight: 700;
        font-size: 1.15rem;
    }

    .fb-theme .price-list li:last-child {
        background: var(--rs-green-soft);
        color: var(--rs-green-dark);
        font-size: .75rem;
        font-weight: 600;
        padding: 3px 10px;
        border-radius: 6px;
    }

    .fb-theme .author-post {
        list-style: none;
        padding: 12px 0 0;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 8px;
        border-top: 1px solid rgba(0, 0, 0, 0.08);
    }

    .fb-theme .authot-list { display: inline-flex; align-items: center; gap: 8px; }

    .fb-theme .authot-list .thumb {
        width: 28px;
        height: 28px;
        border-radius: 8px;
        background: var(--rs-green);
        color: #fff;
        font-size: .75rem;
        font-weight: 700;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .fb-theme .authot-list .content { color: var(--rs-muted); font-size: .9rem; font-weight: 500; }
    .fb-theme .author-post .star { color: #f5b50a; font-size: .8rem; white-space: nowrap; }

    .fb-theme .shop-button { padding: 12px 4px 4px; }

    .fb-theme .shop-button .theme-btn {
        display: block;
        text-align: center;
        background: var(--rs-green);
        color: #fff;
        font-weight: 600;
        padding: 11px;
        border-radius: 40px;
        text-decoration: none;
        transition: all .2s ease;
    }

    .fb-theme .shop-button .theme-btn:hover { background: var(--rs-navy); color: #fff; }

    /* ---------- Pagination ---------- */
    .fb-theme .pagination { justify-content: center; gap: 6px; margin-top: 40px; }

    .fb-theme .pagination .page-link {
        border: 0;
        border-radius: 10px;
        background: var(--rs-grey);
        color: var(--rs-navy);
        font-weight: 600;
        transition: all .2s ease;
    }

    .fb-theme .pagination .page-link:hover { background: var(--rs-green-soft); color: var(--rs-green-dark); }

    .fb-theme .pagination .active .page-link { background: var(--rs-green); color: #fff; }
    .fb-theme .pagination .disabled .page-link { opacity: .5; }

    /* ---------- Empty state ---------- */
    .fb-theme .fb-empty {
        text-align: center;
        padding: 56px 20px;
        background: var(--rs-grey);
        border-radius: 16px;
    }

    .fb-theme .fb-empty-icon {
        width: 76px;
        height: 76px;
        border-radius: 16px;
        background: var(--rs-green);
        color: #fff;
        margin: 0 auto 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.7rem;
    }

    .fb-theme .fb-empty .theme-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: var(--rs-green);
        color: #fff;
        font-weight: 600;
        padding: 10px 28px;
        border-radius: 40px;
        text-decoration: none;
        transition: all .2s ease;
    }

    .fb-theme .fb-empty .theme-btn:hover { background: var(--rs-navy); color: #fff; }

    @media (max-width: 767.98px) {
        .cb-intro { flex-direction: column; text-align: center; padding: 22px 18px; }
        .cb-count { margin-left: 0; }
    }

    @media (prefers-reduced-motion: reduce) {
        .cb-intro, .fb-theme .shop-box-items.style-2 { animation: none; }
    }
</style>

<!-- Breadcumb Section Start -->
<div class="breadcrumb-wrapper bg-cover section-padding"
    style="background-image: url({{ asset('user/assets/img/hero/breadcrumb-bg.jpg') }})">
    <div class="container">
        <div class="page-heading">
            <h1>{{ $category->name }}</h1>
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
                        Categories
                    </li>
                    <li>
                        <i class="fa-solid fa-chevron-right"></i>
                    </li>
                    <li>
                        {{ $category->name }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Breadcumb Section End -->

<section class="fb-theme shop-section section-padding fix">
    <div class="container">

        {{-- Category intro --}}
        <div class="cb-intro">
            <span class="cb-intro-icon"><i class="fa-solid fa-tags"></i></span>
            <div>
                <h2 class="text-break">{{ $category->name }}</h2>
                <p>{{ $category->description }}</p>
            </div>
            <span class="cb-count">
                <i class="fa-solid fa-book"></i>
                {{ $books->total() }} {{ $books->total() === 1 ? 'book' : 'books' }}
            </span>
        </div>

        {{-- Books --}}
        <div class="row g-4">

            @forelse ($books as $item)
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="shop-box-items style-2" style="animation-delay: {{ ($loop->index % 6) * 0.08 }}s;">
                        <div class="book-thumb center">
                            <a href="{{ asset('storage/books/' . $item->pdf) }}" target="_blank">
                                <img class="fb-cover" src="{{ asset('storage/books_pics/' . $item->image) }}" alt="{{ $item->title }}">
                            </a>
                            <ul class="post-box">
                                <li>
                                    Hot
                                </li>
                            </ul>
                            <ul class="shop-icon d-grid justify-content-center align-items-center">
                                <li>
                                    <a href='shop-cart.html'><i class="far fa-heart"></i></a>
                                </li>
                                <li>
                                    <a href='shop-cart.html'>
                                        <img class="icon" src="{{ asset('user/assets/img/icon/shuffle.svg') }}" alt="svg-icon">
                                    </a>
                                </li>
                                <li>
                                    <a href='{{ route('booksdetail', $item->id) }}'><i class="far fa-eye"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-content">

                            <h3><a href='{{ route('booksdetail', $item->id) }}'>{{ $item->title }}</a></h3>
                            <ul class="price-list">
                                <li>RS-{{ $item->price }}</li>
                                <li>
                                    40% off
                                </li>
                            </ul>
                            <ul class="author-post">
                                <li class="authot-list">
                                    <span class="thumb">{{ strtoupper(substr($item->book_author?->name ?? 'N', 0, 1)) }}</span>
                                    <span class="content">{{ $item->book_author?->name ?? 'N/A' }}</span>
                                </li>
                                <li class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-button">
                            <a class='theme-btn' href="{{ route('booksdetail', $item->id) }}">Add To Cart</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="fb-empty">
                        <div class="fb-empty-icon"><i class="fa-solid fa-book-open"></i></div>
                        <h5 class="fw-semibold mb-1">No books in {{ $category->name }} yet</h5>
                        <p class="text-muted mb-4">Books added to this category will show up here.</p>
                        <a href="{{ route('bookshows') }}" class="theme-btn">
                            <i class="fa-solid fa-arrow-left-long"></i> Back to home
                        </a>
                    </div>
                </div>
            @endforelse

        </div>

        {{-- Page links --}}
        @if ($books->hasPages())
            <div class="mt-2">
                {{ $books->links() }}
            </div>
        @endif

    </div>
</section>

@endsection