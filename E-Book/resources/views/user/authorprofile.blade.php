@extends('user.navbar')

@section('nav')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card border-0 shadow-sm rounded-4 p-4">
                <div class="text-center mb-4">
                    <div style="width:90px;height:90px;border-radius:50%;background:#111;color:#fff;display:flex;align-items:center;justify-content:center;margin:0 auto 15px;font-size:32px;font-weight:700;">
                        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                    </div>
                    <h2 class="mb-1">{{ auth()->user()->name }}</h2>
                    <p class="text-muted mb-0">{{ auth()->user()->email }}</p>
                </div>

                <div class="border-top pt-4">
                    <div class="row mb-3">
                        <div class="col-sm-4 fw-semibold">Name</div>
                        <div class="col-sm-8">{{ auth()->user()->name }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 fw-semibold">Email</div>
                        <div class="col-sm-8">{{ auth()->user()->email }}</div>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-dark px-4">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<div class="row mt-4 mb-4 text-center">
    <h1>Your Uploaded Books</h1> <h3 ><a class="btn btn-success mt-3 " href="{{ route('authbkupld') }}">Upload Book</a></h3>
</div>

<div class="row g-4">
  @forelse ($books as $book )
         <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="book-card">
                <div class="book-card__thumb">
                    <img src="#" alt="{{ $book->title }}">
                </div>
                <div class="book-card__body">
                    <span class="book-card__badge">{{ $book->category_id->name ?? 'General' }}</span>
                    <h6 class="book-card__title">
                        <a href="#">{{ $book->title }}</a>
                    </h6>
                    <p class="book-card__author">includes : {{ $book->description ?? 'Description...' }}</p>
                    <div class="book-card__footer">
                        <span class="book-card__price">${{ number_format($book->price, 2) }}</span>
                        <a href="{{ asset('storage/books/' . $book->pdf) }}" target="_blank" class="book-card__btn">View</a>
                    </div>
                </div>
            </div>
        </div>
  @empty
        <div class="col-12">
        <div class="book-empty">
            <div class="book-empty__icon">
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

            <h4 class="book-empty__title">No Books Found</h4>
            <p class="book-empty__text">
                We couldn't find any books here right now. Try adjusting your filters,
                search for something else, or check back soon — new titles are added regularly.
            </p>

            <div class="book-empty__actions">
                <a href="{{ url()->current() }}" class="book-empty__btn book-empty__btn--primary">
                    Refresh Page
                </a>
                <a href="{{ route('books.index') ?? '#' }}" class="book-empty__btn book-empty__btn--ghost">
                    Browse All Categories
                </a>
            </div>
        </div>
    </div>
  @endforelse
</div>

</div>
@endsection
