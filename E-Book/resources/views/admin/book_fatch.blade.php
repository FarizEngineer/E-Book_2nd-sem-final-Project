
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
</head>
<body>

<div class="container">
    <a class="btn mt-2 mb-1 text-light"  style="background:rgba(39,203,154,1.00);" href="{{route('dashboard')}}">Back to dashboard</a>

        <span class="text-center"><h1 class="mt-3 mb-3 ">All uploaded Books</h1></span>
                @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>MESSAGE.....</strong> {{session('success')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        @endif

<div class="row">
    
@forelse ( $all_book as $book )
<div class="col-md-6">
        <div class="card mb-3" 
        style="max-width: 540px; 
        border:2px solid rgba(39, 203, 154, 1.00);
        border-radius:30px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{asset('storage/books_pics/'. $book->image)}}" 
      class="img-fluid rounded-start" 
      alt="Image here..."
      style="border0right-radius:30px;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <small class="card-text">{{$book->id}}</small>
        <h5 class="card-title">{{$book->title}}</h5>
        <p>$.{{$book->price}} - {{$book->stock}}</p>
        <p class="card-text">{{$book->description}}</p>
        <p class="card-text">Author :{{ $book->book_author?->name ?? 'N/A' }}</p>
        <p class="card-text"><small class="text-body-secondary">{{$book->book_category?->name ?? 'no category found !'}}</small></p>
        <span><a href="{{route('editbook',$book->id)}}"><i class="fa-solid fa-pen-to-square fa-beat" style="color: rgb(4, 164, 115);font-size:20px;"></i></a>  
        <a href="{{route('deletebook',$book->id)}}"><i class="fa-solid fa-trash fa-shake" style="color: rgb(225, 12, 68); font-size:25px;"></i></a>  
        <a href="{{ asset('storage/books/' . $book->pdf) }}" target="_blank">View</a>
    </span>
      </div>
    </div>
  </div>
</div>
</div>
@empty
 <div class="text-center py-5">
      <span class="d-inline-flex align-items-center justify-content-center mb-3"
            style="width:80px; height:80px; border-radius:50%; background:rgba(39,203,154,0.1);">
        <i class="fa-solid fa-book fa-2xl" style="color:rgba(39,203,154,1.00);"></i>
      </span>
      <h5 class="fw-semibold mb-1">No books found</h5>
      <p class="text-muted mb-3">You haven't added any books to your catalog yet.</p>
      <a href="{{ route('addbook') }}" class="btn btn-success">
        <i class="fa-solid fa-plus me-1"></i> Add your first book
      </a>
    </div>  
@endforelse
</div>


</div>

</body>
</html>
