@extends('admin.sidebar')

@section('admin')

<body>
<div class="container text-center">
      <h1 class="mt-4">UPLOAD BOOK</h1>

<div class="box">


<form action="{{route('bookupload')}}" method="POST" enctype="multipart/form-data">
    @csrf

<div class="row mt-2">
    <div class="col-md-4">   <!-- book Name -->
            <input type="text" name="book_title"
                   class="form-control mt-3 "
                   placeholder="book title">
    </div>
    <div class="col-md-4">
          <!-- book Price -->
            <input type="number" name="book_price"
                   class="form-control mt-3"
                   placeholder="book Price">
    </div>
    <div class="col-md-4">
         <!-- book Stock -->
            <input type="number" name="book_stock"
                   class="form-control mt-3"
                   placeholder="book Stock">
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-6">
          <!-- book pdf -->

          <label for="book_pdf" class="form-label">Book PDF :</label> <input type="file" placeholder="Upload Book here" name="book_pdf"
                   class="form-control">
                </div>
<div class="col-md-6">
      <!-- book Image -->
<label  for="book_image" class="form-label"  >Book image :</label> <input type="file" name="book_image"
                   class="form-control">
</div>
    </div>
<div class="row mt-2">
    <div class="col-md-6">
           <select name="category_name" class="form-control mt-3">
                    <option value="" disabled selected>---- Please Select Any Category ----</option>
@foreach ($selectcat as $category)
    <option value="{{ $category->id }}">
        {{ $category->name }}
    </option>
@endforeach
            </select>
    </div>
    <div class="col-md-6 mt-3">
         <!-- AUTHOR -->
            <select name="author_name" class="form-control">
                 <option value="" disabled selected>---- Please Select Any author ----</option>
 @foreach ($selectauth as $author)
    <option value="{{ $author->id }}">
        {{ $author->name }}
    </option>
@endforeach
            </select>

    </div>
</div>
<div class="row mt-3">
    <div class="col-md-12">

        <!-- Description -->
            <label for="description" class="form-label">Description :</label>
            <textarea name="description"
                      class="form-control"
                      rows="5"
                      placeholder="Description"></textarea>
        </div>
    </div>

  <button type="submit" class="btn btn-primary mt-2">
                Upload
            </button>
</form>

</div>

            </div>

        </div>
    </div>
</div>

</body>
</html>

@endsection
