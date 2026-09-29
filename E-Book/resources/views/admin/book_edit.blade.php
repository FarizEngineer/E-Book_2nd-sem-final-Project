@extends('admin.sidebar')

@section('admin')

<div class="container text-center">
        <h1 class="mt-2 mb-3">Edit Book</h1>

                               <form action="{{route('updatebook',$data->id)}} " method="POST" enctype="multipart/form-data">
    @csrf

<div class="row mt-3">
<div class="col-md-4">
            <input type="text" name="book_title"
                   class="form-control "
                   placeholder="book title" value="{{$data->title}}">
</div>
<div class="col-md-4">
       <input type="number" name="book_price"
                   class="form-control "
                   placeholder="book Price"value="{{$data->price}}">
</div>
<div class="col-md-4">
          <input type="number" name="book_stock"
                   class="form-control"
                   placeholder="book Stock" value="{{$data->stock}}">
</div>
</div>



        <div class="row mt-3">
        <!-- book pdf -->
         <div class="col-md-6">
            <label for="book_pdf" class="form-label">Upload Book :</label>
            <input type="file" name="book_pdf"
                   class="form-control" value="{{$data->pdf}}">
        </div>
<div class="col-md-6">
    <label for="book_image" class="form-label">Upload Book image :</label>
    <input type="file" name="book_image"
                   class="form-control" value="{{$data->image}}">
        </div>

 <div class="row mt-3">

      <div class="col-md-6 ">
                <select name="category_name" class="form-control">
                    <option style="cursor: disabled;">---- Please Select Any Category ----</option>
                    @foreach ($selectcat as $category)
    <option value="{{ $category->id }}">
        {{ $category->name }}
    </option>
@endforeach
            </select>
        </div>

           <!-- AUTHOR -->
          <div class="col-md-6">
            <select name="author_name" class="form-control">
                 <option disabled-selected>---- Please Select Any author ----</option>
    @foreach ($selectauth as $author)
    <option value="{{ $author->id }}">
        {{ $author->name }}
    </option>
@endforeach
            </select>
        </div>
 </div>



 <div class="row mt-3">
        <div class="col-md-10 offset-1">
            <label>Description</label>
            <textarea name="description"
                      class="form-control"
                      rows="5"
                      placeholder="Description"> {{$data->description}}</textarea>
        </div>
 </div>

{{-- button --}}
            <span ><button class="btn btn-primary mt-2">Update Book</button></span>

</form>

                </div>
@endsection
