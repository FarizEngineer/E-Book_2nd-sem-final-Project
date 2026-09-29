
@extends('admin.sidebar')

@section('admin')

<div class="container ">
  <span class="text-center" > <h1 class="mt-4 mb-4">All Categories</h1></span>
                @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>MESSAGE.....</strong> {{session('success')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        @endif

@forelse ($allcategory as $cat)
        <div 
        class="card w-50"
        style="border: 2px solid rgba(39, 203, 154, 1.00); border-top-left-radius:40px; border-bottom-right-radius:40px;"
        >
  <div class="card-body">
        <small>{{$cat->id}}</small>
    <h5 class="card-title">{{$cat->name}}</h5>
    <p class="card-text">{{ $cat->description }}</p>
    <span><a href="{{route('editcategory',$cat->id)}}" class="btn btn-primary">Edit</a>  <a href="{{route('deletcategory',$cat->id)}}" class="btn btn-danger">Delete</a></span>
  </div>
</div>
@empty
        <div class="text-center py-5">
      <span class="d-inline-flex align-items-center justify-content-center mb-3"
            style="width:80px; height:80px; border-radius:50%; background:rgba(39,203,154,0.1);">
        <i class="fa-solid fa-tags fa-2xl" style="color:rgba(39,203,154,1.00);"></i>
      </span>
      <h5 class="fw-semibold mb-1">No categories found</h5>
      <p class="text-muted mb-3">Create a category to start organizing your books.</p>
      <a href="{{ route('addcategory') }}" class="btn btn-success">
        <i class="fa-solid fa-plus me-1"></i> Add category
      </a>
    </div>   
@endforelse

</div>


@endsection
