<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">

    <style>
        :root {
            --accent: rgba(39, 203, 154, 1);
            --accent-dark: #1fae83;
            --accent-soft: rgba(39, 203, 154, 0.12);
        }

        body {
            background: #f4f8f7;
        }

        .page-title {
            font-weight: 700;
            position: relative;
            display: inline-block;
            padding-bottom: 10px;
        }

        .page-title::after {
            content: '';
            position: absolute;
            left: 25%;
            bottom: 0;
            width: 50%;
            height: 3px;
            border-radius: 3px;
            background: var(--accent);
        }

        .btn-back {
            background: var(--accent);
            color: #fff;
            border-radius: 30px;
            padding: 8px 20px;
            transition: all .2s ease;
        }

        .btn-back:hover {
            background: var(--accent-dark);
            color: #fff;
            transform: translateX(-3px);
        }

        /* ---------- Book card ---------- */
        .book-card {
            position: relative;
            border: 0;
            border-top: 4px solid var(--accent);
            border-top-right-radius: 50px;
            border-bottom-left-radius: 50px;
            border-top-left-radius: 10px;
            border-bottom-right-radius: 10px;
            background: #fff;
            box-shadow: 0 4px 18px rgba(0, 0, 0, 0.08);
            transition: transform .25s ease, box-shadow .25s ease;
            overflow: hidden;
        }

        .book-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 14px 30px rgba(39, 203, 154, 0.25);
        }

        .book-img-wrap {
            height: 100%;
            min-height: 240px;
            background: var(--accent-soft);
            overflow: hidden;
        }

        .book-img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform .4s ease;
        }

        .book-card:hover .book-img-wrap img {
            transform: scale(1.06);
        }

        .book-id {
            position: absolute;
            top: 12px;
            right: 40px;
            font-size: .75rem;
            font-weight: 600;
            color: var(--accent-dark);
            background: var(--accent-soft);
            padding: 2px 10px;
            border-radius: 20px;
        }

        .book-title {
            font-weight: 700;
            color: #222;
            padding-right: 70px;
        }

        .book-price {
            font-weight: 700;
            color: var(--accent-dark);
        }

        .book-desc {
            color: #6c757d;
            font-size: .92rem;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .badge-cat {
            background: var(--accent-soft);
            color: var(--accent-dark);
            font-weight: 600;
            border-radius: 20px;
            padding: 5px 12px;
        }

        .stock-badge {
            font-size: .75rem;
            border-radius: 20px;
            padding: 4px 10px;
        }

        .book-actions {
            border-top: 1px dashed rgba(39, 203, 154, 0.5);
        }

        .action-btn {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
            text-decoration: none;
            transition: all .2s ease;
        }

        .action-btn:hover {
            transform: translateY(-3px) scale(1.08);
        }

        .action-edit   { background: rgba(4, 164, 115, .12);  color: rgb(4, 164, 115); }
        .action-delete { background: rgba(225, 12, 68, .12);  color: rgb(225, 12, 68); }
        .action-read   { background: rgba(42, 128, 228, .12); color: rgb(42, 128, 228); }

        .action-edit:hover   { background: rgb(4, 164, 115);  color: #fff; }
        .action-delete:hover { background: rgb(225, 12, 68);  color: #fff; }
        .action-read:hover   { background: rgb(42, 128, 228); color: #fff; }

        /* On small screens the image sits on top of the details */
        @media (max-width: 767.98px) {
            .book-img-wrap { min-height: 220px; max-height: 260px; }
            .book-id { right: 45px; }
        }
    </style>
</head>
<body>

<div class="container pb-4">

    <a class="btn btn-back mt-3 mb-1" href="{{ route('dashboard') }}">
        <i class="fa-solid fa-arrow-left me-1"></i> Back to dashboard
    </a>

    <div class="text-center">
        <h1 class="page-title mt-3 mb-4">All uploaded Books</h1>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>MESSAGE.....</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row g-4">

        @forelse ($all_book as $book)
            <div class="col-12 col-xl-6">
                <div class="card book-card h-100">

                    <span class="book-id">#{{ $book->id }}</span>

                    <div class="row g-0 h-100">
                        <div class="col-md-4">
                            <div class="book-img-wrap">
                                <img src="{{ asset('storage/books_pics/' . $book->image) }}" alt="{{ $book->title }}">
                            </div>
                        </div>

                        <div class="col-md-8 d-flex flex-column">
                            <div class="card-body">
                                <h5 class="book-title text-break">{{ $book->title }}</h5>

                                <div class="d-flex align-items-center flex-wrap gap-2 mb-2">
                                    <span class="book-price">$.{{ $book->price }}</span>
                                    <span class="stock-badge {{ $book->stock > 0 ? 'bg-success-subtle text-success' : 'bg-danger-subtle text-danger' }}">
                                        <i class="fa-solid fa-box me-1"></i>{{ $book->stock }} in stock
                                    </span>
                                </div>

                                <p class="book-desc mb-2">{{ $book->description }}</p>

                                <p class="mb-2 small">
                                    <i class="fa-solid fa-user-pen me-1" style="color: var(--accent);"></i>
                                    <span class="text-muted">Author:</span>
                                    {{ $book->book_author?->name ?? 'N/A' }}
                                </p>

                                <span class="badge-cat small d-inline-block">
                                    <i class="fa-solid fa-tag me-1"></i>{{ $book->book_category?->name ?? 'no category found !' }}
                                </span>
                            </div>

                            <div class="book-actions d-flex justify-content-end gap-2 px-3 py-3">
                                <a href="{{ route('editbook', $book->id) }}" class="action-btn action-edit" title="Edit">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a href="{{ asset('storage/books/' . $book->pdf) }}" target="_blank" class="action-btn action-read" title="Read PDF">
                                    <i class="fa-solid fa-book"></i>
                                </a>
                                <a href="{{ route('deletebook', $book->id) }}" class="action-btn action-delete" title="Delete"
                                   onclick="return confirm('Are you sure you want to delete this book?');">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        @empty
            <div class="col-12 text-center py-5">
                <span class="d-inline-flex align-items-center justify-content-center mb-3"
                      style="width:80px; height:80px; border-radius:50%; background:rgba(39,203,154,0.1);">
                    <i class="fa-solid fa-book fa-2xl" style="color:rgba(39,203,154,1.00);"></i>
                </span>
                <h5 class="fw-semibold mb-1">No books found</h5>
                <p class="text-muted mb-3">You haven't added any books to your catalog yet.</p>
                <a href="{{ route('book') }}" class="btn btn-success">
                    <i class="fa-solid fa-plus me-1"></i> Add your first book
                </a>
            </div>
        @endforelse

    </div>
</div>

</body>
</html>