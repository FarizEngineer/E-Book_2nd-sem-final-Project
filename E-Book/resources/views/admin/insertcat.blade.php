@extends('admin.sidebar')
@section('admin')


<div class="container text-center">
     <h1 class="mt-4 mb-3 ">Insert Category</h1>
<form action="{{route('insertcategory')}}" method="post">
  @csrf

                  <div class="row">
                    <div class="col-md-8 offset-2">
                          <input type="text" placeholder="Enter Category name" name="catname" class="form-control mt-3" value="{{old('username')}}">
                    @error('username')
                    <p class="text-danger">{{$message}}</p>
                    @enderror()
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-8 offset-2">
                    <textarea name="description"
                    class="form-control mt-3"
                    placeholder="Enter description of category"
                    rows="6" ></textarea>
               @error('description')
                    <p class="text-danger">{{$message}}</p>
               @enderror
                    </div>
                  </div>

       <button class="btn btn-primary mt-3">Create Category</button>
        </form>
                </div>


@endsection

