@extends('admin.sidebar')

@section('admin')

<style>
  :root {
    --cat-accent: rgba(39, 203, 154, 1);
    --cat-accent-dark: #1fae83;
    --cat-accent-deep: #138a68;
    --cat-accent-soft: rgba(39, 203, 154, 0.12);
  }

  /* ---------- Page heading ---------- */
  .page-title {
    font-weight: 700;
    position: relative;
    display: inline-block;
    padding-bottom: 10px;
    margin-bottom: 0;
  }

  .page-title::after {
    content: '';
    position: absolute;
    left: 25%;
    bottom: 0;
    width: 50%;
    height: 3px;
    border-radius: 3px;
    background: var(--cat-accent);
  }

  .cat-count {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    margin-top: 12px;
    font-size: .85rem;
    font-weight: 600;
    color: var(--cat-accent-deep);
    background: var(--cat-accent-soft);
    padding: 4px 16px;
    border-radius: 20px;
  }

  /* ---------- Card ---------- */
  @keyframes catFadeUp {
    from { opacity: 0; transform: translateY(18px); }
    to   { opacity: 1; transform: translateY(0); }
  }

  .cat-card {
    position: relative;
    border: 0;
    border-top: 4px solid var(--cat-accent);
    border-top-left-radius: 36px;
    border-bottom-right-radius: 36px;
    border-top-right-radius: 8px;
    border-bottom-left-radius: 8px;
    background:
      linear-gradient(180deg, rgba(39, 203, 154, 0.07) 0%, rgba(255, 255, 255, 0) 55%),
      #fff;
    box-shadow: 0 4px 18px rgba(0, 0, 0, 0.08);
    transition: transform .3s ease, box-shadow .3s ease;
    overflow: hidden;
    animation: catFadeUp .5s ease both;
  }

  /* big faded tag icon in the corner, purely decorative */
  .cat-card::before {
    content: '\f02c';
    font-family: 'Font Awesome 7 Free', 'Font Awesome 6 Free', 'Font Awesome 5 Free';
    font-weight: 900;
    position: absolute;
    right: -14px;
    bottom: 54px;
    font-size: 6.5rem;
    line-height: 1;
    color: var(--cat-accent);
    opacity: .06;
    transform: rotate(-12deg);
    transition: all .4s ease;
    pointer-events: none;
  }

  .cat-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 16px 34px rgba(39, 203, 154, 0.3);
  }

  .cat-card:hover::before {
    opacity: .11;
    transform: rotate(0deg) scale(1.1);
  }

  .cat-card .card-body {
    position: relative;
    z-index: 1;
  }

  .cat-icon {
    width: 58px;
    height: 58px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--cat-accent), var(--cat-accent-dark));
    color: #fff;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 1.4rem;
    flex-shrink: 0;
    box-shadow: 0 0 0 5px var(--cat-accent-soft), 0 6px 14px rgba(39, 203, 154, 0.35);
    transition: transform .3s ease;
  }

  .cat-card:hover .cat-icon {
    transform: rotate(-10deg) scale(1.08);
  }

  .cat-id {
    position: absolute;
    top: 14px;
    right: 18px;
    z-index: 2;
    font-size: .75rem;
    font-weight: 600;
    color: var(--cat-accent-deep);
    background: var(--cat-accent-soft);
    padding: 2px 10px;
    border-radius: 20px;
  }

  .cat-title {
    font-weight: 700;
    color: #222;
    margin-bottom: 0;
  }

  .cat-divider {
    width: 40px;
    height: 3px;
    border-radius: 3px;
    background: var(--cat-accent);
    margin: 0 0 12px;
    transition: width .3s ease;
  }

  .cat-card:hover .cat-divider {
    width: 70px;
  }

  .cat-desc {
    color: #6c757d;
    font-size: .95rem;
    line-height: 1.6;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
    min-height: 4.8em;
  }

  /* ---------- Footer buttons ---------- */
  .cat-footer {
    position: relative;
    z-index: 1;
    background: transparent;
    border-top: 1px dashed rgba(39, 203, 154, 0.5);
  }

  .btn-cat-edit {
    background: linear-gradient(135deg, var(--cat-accent), var(--cat-accent-dark));
    border: 0;
    color: #fff;
    border-radius: 30px;
    font-weight: 600;
    transition: all .2s ease;
  }

  .btn-cat-edit:hover {
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 8px 16px rgba(39, 203, 154, 0.4);
  }

  .btn-cat-delete {
    background: rgba(220, 53, 69, 0.1);
    border: 0;
    color: #dc3545;
    border-radius: 30px;
    font-weight: 600;
    transition: all .2s ease;
  }

  .btn-cat-delete:hover {
    background: #dc3545;
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 8px 16px rgba(220, 53, 69, 0.35);
  }

  /* ---------- Empty state ---------- */
  .btn-cat-add {
    background: linear-gradient(135deg, var(--cat-accent), var(--cat-accent-dark));
    border: 0;
    color: #fff;
    border-radius: 30px;
    padding: 9px 26px;
    font-weight: 600;
    transition: all .2s ease;
  }

  .btn-cat-add:hover {
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 8px 18px rgba(39, 203, 154, 0.4);
  }
</style>

<div class="container">

  <div class="text-center mt-4 mb-4">
    <h1 class="page-title">All Categories</h1>
    <div>
      <span class="cat-count">
        <i class="fa-solid fa-layer-group"></i>
        {{ count($allcategory) }} {{ count($allcategory) === 1 ? 'category' : 'categories' }}
      </span>
    </div>
  </div>

  @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>MESSAGE.....</strong> {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <div class="row g-4 pb-4">

    @forelse ($allcategory as $cat)
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="card cat-card h-100" style="animation-delay: {{ $loop->index * 0.06 }}s;">

          <span class="cat-id">#{{ $cat->id }}</span>

          <div class="card-body pt-4">
            <div class="d-flex align-items-center gap-3 mb-3">
              <span class="cat-icon">
                <i class="fa-solid fa-tags"></i>
              </span>
              <h5 class="cat-title text-break">{{ $cat->name }}</h5>
            </div>

            <div class="cat-divider"></div>
            <p class="cat-desc mb-0">{{ $cat->description }}</p>
          </div>

          <div class="card-footer cat-footer d-flex justify-content-end gap-2 py-3">
            <a href="{{ route('editcategory', $cat->id) }}" class="btn btn-sm btn-cat-edit px-3">
              <i class="fa-solid fa-pen-to-square me-1"></i> Edit
            </a>
            <a href="{{ route('deletcategory', $cat->id) }}"
               class="btn btn-sm btn-cat-delete px-3"
               onclick="return confirm('Are you sure you want to delete this category?');">
              <i class="fa-solid fa-trash me-1"></i> Delete
            </a>
          </div>

        </div>
      </div>
    @empty
      <div class="col-12 text-center py-5">
        <span class="d-inline-flex align-items-center justify-content-center mb-3"
              style="width:80px; height:80px; border-radius:50%; background:rgba(39,203,154,0.1);">
          <i class="fa-solid fa-tags fa-2xl" style="color:rgba(39,203,154,1.00);"></i>
        </span>
        <h5 class="fw-semibold mb-1">No categories found</h5>
        <p class="text-muted mb-3">Create a category to start organizing your books.</p>
        <a href="{{ route('insert') }}" class="btn btn-cat-add">
          <i class="fa-solid fa-plus me-1"></i> Add category
        </a>
      </div>
    @endforelse

  </div>
</div>

@endsection