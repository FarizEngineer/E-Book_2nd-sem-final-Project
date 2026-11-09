@extends('user.navbar')

@section('nav')

<style>
    :root {
        --accent: rgba(39, 203, 154, 1);
        --accent-dark: #1fae83;
        --accent-soft: rgba(39, 203, 154, 0.12);
    }

    .up-heading {
        font-weight: 700;
        position: relative;
        display: inline-block;
        padding-bottom: 10px;
    }

    .up-heading::after {
        content: '';
        position: absolute;
        left: 25%;
        bottom: 0;
        width: 50%;
        height: 3px;
        border-radius: 3px;
        background: var(--accent);
    }

    .up-box {
        background: #fff;
        border-top: 4px solid var(--accent);
        border-top-left-radius: 40px;
        border-bottom-right-radius: 40px;
        border-top-right-radius: 10px;
        border-bottom-left-radius: 10px;
        box-shadow: 0 6px 24px rgba(0, 0, 0, 0.08);
        padding: 32px;
    }

    .up-label {
        font-weight: 600;
        font-size: .9rem;
        margin-bottom: 6px;
        display: block;
        text-align: left;
    }

    .up-label i {
        color: var(--accent);
        margin-right: 6px;
    }

    .up-box .form-control,
    .up-box .form-select {
        border-radius: 10px;
        border: 1.5px solid #dfe6e4;
        padding: 10px 14px;
        transition: border-color .2s ease, box-shadow .2s ease;
    }

    .up-box .form-control:focus,
    .up-box .form-select:focus {
        border-color: var(--accent);
        box-shadow: 0 0 0 .2rem rgba(39, 203, 154, 0.2);
    }

    .up-box input[type="file"] {
        padding: 8px 10px;
        background: #fafcfb;
    }

    .up-box input[type="file"]::file-selector-button {
        background: var(--accent-soft);
        color: var(--accent-dark);
        border: 0;
        border-radius: 20px;
        padding: 5px 14px;
        margin-right: 12px;
        font-weight: 600;
        cursor: pointer;
        transition: all .2s ease;
    }

    .up-box input[type="file"]::file-selector-button:hover {
        background: var(--accent);
        color: #fff;
    }

    .up-hint {
        text-align: left;
        font-size: .78rem;
        color: #6c757d;
        margin-top: 4px;
    }

    .up-error {
        text-align: left;
        font-size: .8rem;
        color: #dc3545;
        margin-top: 4px;
    }

    .btn-up-submit {
        background: var(--accent);
        color: #fff;
        border-radius: 30px;
        padding: 10px 40px;
        font-weight: 600;
        transition: all .2s ease;
    }

    .btn-up-submit:hover {
        background: var(--accent-dark);
        color: #fff;
        transform: translateY(-2px);
        box-shadow: 0 8px 18px rgba(39, 203, 154, 0.35);
    }

    @media (max-width: 575.98px) {
        .up-box { padding: 20px 16px; }
    }
</style>

<div class="container py-4">

    <div class="text-center">
        <h1 class="up-heading mt-3 mb-4">UPLOAD BOOK</h1>
    </div>

    <div class="row justify-content-center">
        <div class="col-12">
            <div class="up-box">

                <form action="{{ route('authbookupload') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="author_name" value="{{ Auth::id() }}">

                    <div class="row g-3">

                        {{-- Title --}}
                        <div class="col-12 col-md-6">
                            <label for="book_title" class="up-label"><i class="fa-solid fa-heading"></i>Book title</label>
                            <input type="text" id="book_title" name="book_title" value="{{ old('book_title') }}"
                                   class="form-control" placeholder="Book title">
                            @error('book_title') <div class="up-error">{{ $message }}</div> @enderror
                        </div>

                        {{-- Price --}}
                        <div class="col-12 col-md-6">
                            <label for="book_price" class="up-label"><i class="fa-solid fa-dollar-sign"></i>Book price</label>
                            <input type="number" id="book_price" name="book_price" value="{{ old('book_price') }}"
                                   class="form-control" placeholder="Book price">
                            @error('book_price') <div class="up-error">{{ $message }}</div> @enderror
                        </div>

                        {{-- Stock --}}
                        <div class="col-12 col-md-6">
                            <label for="book_stock" class="up-label"><i class="fa-solid fa-boxes-stacked"></i>Book stock</label>
                            <input type="number" id="book_stock" name="book_stock" value="{{ old('book_stock') }}"
                                   class="form-control" placeholder="Book stock">
                            @error('book_stock') <div class="up-error">{{ $message }}</div> @enderror
                        </div>

                        {{-- Category --}}
                        <div class="col-12 col-md-6">
                            <label for="category_name" class="up-label"><i class="fa-solid fa-tags"></i>Category</label>
                            <select id="category_name" name="category_name" class="form-select">
                                <option value="" disabled {{ old('category_name') ? '' : 'selected' }}>---- Please Select Any Category ----</option>
                                @foreach ($cat as $category)
                                    <option value="{{ $category->id }}" {{ old('category_name') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_name') <div class="up-error">{{ $message }}</div> @enderror
                        </div>

                        {{-- PDF --}}
                        <div class="col-12 col-md-6">
                            <label for="book_pdf" class="up-label"><i class="fa-solid fa-file-pdf"></i>Book PDF</label>
                            <input type="file" id="book_pdf" name="book_pdf" class="form-control" accept="application/pdf">
                            <div class="up-hint">Only PDF files.</div>
                            @error('book_pdf') <div class="up-error">{{ $message }}</div> @enderror
                        </div>

                        {{-- Image --}}
                        <div class="col-12 col-md-6">
                            <label for="book_image" class="up-label"><i class="fa-solid fa-image"></i>Book image</label>
                            <input type="file" id="book_image" name="book_image" class="form-control" accept="image/*">
                            <div class="up-hint">Cover picture of the book.</div>
                            @error('book_image') <div class="up-error">{{ $message }}</div> @enderror
                        </div>

                        {{-- Description --}}
                        <div class="col-12">
                            <label for="description" class="up-label"><i class="fa-solid fa-align-left"></i>Description</label>
                            <textarea id="description" name="description" class="form-control" rows="5"
                                      placeholder="Description">{{ old('description') }}</textarea>
                            @error('description') <div class="up-error">{{ $message }}</div> @enderror
                        </div>

                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-up-submit">
                            <i class="fa-solid fa-cloud-arrow-up me-1"></i> Upload
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</div>

@endsection