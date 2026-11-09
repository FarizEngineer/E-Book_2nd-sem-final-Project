@extends('user.navbar')

@section('nav')

<style>
    :root {
        --accent: rgba(39, 203, 154, 1);
        --accent-dark: #1fae83;
        --accent-soft: rgba(39, 203, 154, 0.12);
    }

    /* ---------- Profile card ---------- */
    .ap-profile {
        position: relative;
        border: 0;
        border-radius: 20px;
        background: #fff;
        box-shadow: 0 6px 24px rgba(0, 0, 0, 0.08);
        overflow: hidden;
    }

    .ap-cover {
        height: 110px;
        background: linear-gradient(135deg, var(--accent) 0%, #17a37b 100%);
    }

    .ap-avatar {
        width: 100px;
        height: 100px;
        margin: -50px auto 12px;
        border-radius: 50%;
        background: #fff;
        border: 4px solid #fff;
        box-shadow: 0 4px 14px rgba(0, 0, 0, 0.15);
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    .ap-avatar span {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background: #111;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 36px;
        font-weight: 700;
    }

    .ap-role {
        display: inline-block;
        background: var(--accent-soft);
        color: var(--accent-dark);
        font-weight: 600;
        font-size: .8rem;
        padding: 4px 14px;
        border-radius: 20px;
    }

    .ap-stats {
        display: flex;
        border-top: 1px dashed rgba(39, 203, 154, 0.5);
        border-bottom: 1px dashed rgba(39, 203, 154, 0.5);
    }

    .ap-stat {
        flex: 1;
        text-align: center;
        padding: 14px 8px;
    }

    .ap-stat + .ap-stat {
        border-left: 1px dashed rgba(39, 203, 154, 0.5);
    }

    .ap-stat strong {
        display: block;
        font-size: 1.3rem;
        color: var(--accent-dark);
    }

    .ap-stat small {
        color: #6c757d;
    }

    .ap-info-row {
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 12px 0;
    }

    .ap-info-icon {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: var(--accent-soft);
        color: var(--accent);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .ap-info-row small {
        display: block;
        color: #6c757d;
        line-height: 1.1;
    }

    .btn-ap-logout {
        background: #111;
        color: #fff;
        border-radius: 30px;
        padding: 8px 26px;
        transition: all .2s ease;
    }

    .btn-ap-logout:hover {
        background: #dc3545;
        color: #fff;
        transform: translateY(-2px);
    }

    /* ---------- Section heading ---------- */
    .ap-heading {
        font-weight: 700;
        position: relative;
        display: inline-block;
        padding-bottom: 10px;
    }

    .ap-heading::after {
        content: '';
        position: absolute;
        left: 25%;
        bottom: 0;
        width: 50%;
        height: 3px;
        border-radius: 3px;
        background: var(--accent);
    }

    .btn-ap-upload {
        background: var(--accent);
        color: #fff;
        border-radius: 30px;
        padding: 8px 24px;
        transition: all .2s ease;
    }

    .btn-ap-upload:hover {
        background: var(--accent-dark);
        color: #fff;
        transform: translateY(-2px);
    }

    /* ---------- Book cards ---------- */
    .ap-book {
        height: 100%;
        display: flex;
        flex-direction: column;
        background: #fff;
        border-top: 4px solid var(--accent);
        border-top-right-radius: 40px;
        border-bottom-left-radius: 40px;
        border-top-left-radius: 8px;
        border-bottom-right-radius: 8px;
        box-shadow: 0 4px 18px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        transition: transform .25s ease, box-shadow .25s ease;
    }

    .ap-book:hover {
        transform: translateY(-6px);
        box-shadow: 0 14px 30px rgba(39, 203, 154, 0.25);
    }

    .ap-book-thumb {
        height: 200px;
        background: var(--accent-soft);
        overflow: hidden;
    }

    .ap-book-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform .4s ease;
    }

    .ap-book:hover .ap-book-thumb img {
        transform: scale(1.06);
    }

    .ap-book-body {
        padding: 16px;
        display: flex;
        flex-direction: column;
        flex: 1;
    }

    .ap-badge {
        align-self: flex-start;
        background: var(--accent-soft);
        color: var(--accent-dark);
        font-size: .75rem;
        font-weight: 600;
        padding: 3px 12px;
        border-radius: 20px;
        margin-bottom: 8px;
    }

    .ap-book-title {
        font-weight: 700;
        color: #222;
        margin-bottom: 6px;
    }

    .ap-book-desc {
        color: #6c757d;
        font-size: .9rem;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        margin-bottom: 12px;
    }

    .ap-book-footer {
        margin-top: auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-top: 12px;
        border-top: 1px dashed rgba(39, 203, 154, 0.5);
    }

    .ap-price {
        font-weight: 700;
        color: var(--accent-dark);
        font-size: 1.1rem;
    }

    .ap-view {
        background: var(--accent);
        color: #fff;
        border-radius: 30px;
        padding: 5px 18px;
        font-size: .85rem;
        text-decoration: none;
        transition: all .2s ease;
    }

    .ap-view:hover {
        background: var(--accent-dark);
        color: #fff;
    }

    /* ---------- Empty state ---------- */
    .ap-empty {
        text-align: center;
        padding: 50px 20px;
        background: #fff;
        border-radius: 20px;
        box-shadow: 0 4px 18px rgba(0, 0, 0, 0.06);
    }

    .ap-empty-icon {
        width: 90px;
        height: 90px;
        border-radius: 50%;
        background: var(--accent-soft);
        color: var(--accent);
        margin: 0 auto 16px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .ap-empty-icon svg {
        width: 52px;
        height: 52px;
    }
</style>

<div class="container py-5">

    {{-- ===================== PROFILE ===================== --}}
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-7">
            <div class="ap-profile">

                <div class="ap-cover"></div>

                <div class="text-center px-4">
                    <div class="ap-avatar">
                        <span>{{ strtoupper(substr(auth()->user()->name, 0, 1)) }}</span>
                    </div>
                    <h2 class="mb-1 text-break">{{ auth()->user()->name }}</h2>
                    <p class="text-muted mb-2 text-break">{{ auth()->user()->email }}</p>
                    <span class="ap-role"><i class="fa-solid fa-pen-nib me-1"></i> Author</span>
                </div>

                <div class="ap-stats mt-4">
                    <div class="ap-stat">
                        <strong>{{ $books->count() }}</strong>
                        <small>Books uploaded</small>
                    </div>
                    <div class="ap-stat">
                        <strong>{{ auth()->user()->created_at?->format('M Y') ?? '—' }}</strong>
                        <small>Member since</small>
                    </div>
                </div>

                <div class="px-4 pt-3">
                    <div class="ap-info-row">
                        <span class="ap-info-icon"><i class="fa-solid fa-user"></i></span>
                        <div>
                            <small>Name</small>
                            <span class="fw-semibold text-break">{{ auth()->user()->name }}</span>
                        </div>
                    </div>
                    <div class="ap-info-row">
                        <span class="ap-info-icon"><i class="fa-solid fa-envelope"></i></span>
                        <div>
                            <small>Email</small>
                            <span class="fw-semibold text-break">{{ auth()->user()->email }}</span>
                        </div>
                    </div>
                </div>

                <div class="text-center p-4">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-ap-logout">
                            <i class="fa-solid fa-right-from-bracket me-1"></i> Logout
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    {{-- ===================== BOOKS ===================== --}}
    <div class="text-center mt-5 mb-4">
        <h1 class="ap-heading">Your Uploaded Books</h1>
        <div class="mt-3">
            <a class="btn btn-ap-upload" href="{{ route('authbkupld') }}">
                <i class="fa-solid fa-cloud-arrow-up me-1"></i> Upload Book
            </a>
        </div>
    </div>

    <div class="row g-4">
        @forelse ($books as $book)
            <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                <div class="ap-book">
                    <div class="ap-book-thumb">
                        <img src="{{ asset('storage/books_pics/' . $book->image) }}" alt="{{ $book->title }}">
                    </div>
                    <div class="ap-book-body">
                        <span class="ap-badge">
                            <i class="fa-solid fa-tag me-1"></i>{{ $book->book_category?->name ?? 'General' }}
                        </span>
                        <h6 class="ap-book-title text-break">{{ $book->title }}</h6>
                        <p class="ap-book-desc">{{ $book->description ?? 'Description...' }}</p>
                        <div class="ap-book-footer">
                            <span class="ap-price">${{ number_format($book->price, 2) }}</span>
                            <a href="{{ asset('storage/books/' . $book->pdf) }}" target="_blank" class="ap-view">
                                <i class="fa-solid fa-book-open me-1"></i> View
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="ap-empty">
                    <div class="ap-empty-icon">
                        <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 14C8 11.7909 9.79086 10 12 10H28C30.2091 10 32 11.7909 32 14V50C32 48.3431 30.6569 47 29 47H8V14Z" fill="currentColor" fill-opacity="0.12"/>
                            <path d="M56 14C56 11.7909 54.2091 10 52 10H36C33.7909 10 32 11.7909 32 14V50C32 48.3431 33.3431 47 35 47H56V14Z" fill="currentColor" fill-opacity="0.12"/>
                            <path d="M8 14C8 11.7909 9.79086 10 12 10H28C30.2091 10 32 11.7909 32 14V50C32 48.3431 30.6569 47 29 47H8V14Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                            <path d="M56 14C56 11.7909 54.2091 10 52 10H36C33.7909 10 32 11.7909 32 14V50C32 48.3431 33.3431 47 35 47H56V14Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                            <path d="M32 20V50" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-dasharray="1 5"/>
                            <circle cx="46" cy="24" r="3" fill="currentColor" fill-opacity="0.25"/>
                            <circle cx="18" cy="30" r="2" fill="currentColor" fill-opacity="0.25"/>
                        </svg>
                    </div>

                    <h4 class="fw-semibold">No Books Found</h4>
                    <p class="text-muted mx-auto mb-4" style="max-width:460px;">
                        You haven't uploaded any books yet. Share your first book and it will show up here.
                    </p>

                    <a href="{{ route('authbkupld') }}" class="btn btn-ap-upload">
                        <i class="fa-solid fa-plus me-1"></i> Upload your first book
                    </a>
                </div>
            </div>
        @endforelse
    </div>

</div>
@endsection