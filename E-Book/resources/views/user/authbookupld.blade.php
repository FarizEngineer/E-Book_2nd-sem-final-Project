@extends('user.navbar')

@section('nav')

<body>
<div class="container text-center">
      <h1 class="mt-4">UPLOAD BOOK</h1>

<div class="box">


<form action="{{route('authbookupload')}}" method="POST" enctype="multipart/form-data">
    @csrf

<input type="hidden" name="author_name" value="{{Auth::id() }}">

<div class="row mt-2">
    <div class="col-md-6">
        <!-- book name -->
     <input type="text" name="book_title"
                   class="form-control mt-3 "
                   placeholder="book title">
    </div>
    <div class="col-md-6">
          <!-- book Price -->
            <input type="number" name="book_price"
                   class="form-control mt-3"
                   placeholder="book Price">
    </div>
</div>

<div class="row mt-2">
    <div class="col-md-6">
              <!-- book Stock -->
            <input type="number" name="book_stock"
                   class="form-control mt-3"
                   placeholder="book Stock">
    </div>
    <div class="col-md-6">
                  <!-- book pdf -->

          <label for="book_pdf" class="form-label">Book PDF :</label> <input type="file" placeholder="Upload Book here" name="book_pdf"
                   class="form-control">
    </div>
</div>

<div class="row mt-2">
    <div class="col-md-6">
                <div class="form-control">
               <select name="category_name" class="form-control mt-3">
                    <option value="" disabled selected>---- Please Select Any Category ----</option>
@foreach ($cat as $category)
    <option value="{{ $category->id }}">
        {{ $category->name }}
    </option>
@endforeach
            </select>
        </div>
    </div>
    <div class="col-md-6">
              <!-- book Image -->
<label  for="book_image" class="form-label"  >Book image :</label> <input type="file" name="book_image"
                   class="form-control">
    </div>
</div>

<div class="row mt-2">
    <div class="col-md-10 offset-1">
        <!-- Description -->
            <label for="description" class="form-label">Description :</label>
            <textarea name="description"
                      class="form-control"
                      rows="5"
                      placeholder="Description"></textarea>
    </div>
</div>



  <button type="submit" class="btn btn-success mt-3 mb-3">
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
