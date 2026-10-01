@extends('admin.sidebar')

@section('admin')

<body>
<div class="container">
        <div class="text-center"><h1 class="mt-5 mb-3">Edit Category</h1></div>

                                <form action="{{route('updatecategory',$data->id)}}" method="post">
                        @csrf
                   <div class="row">
                    <div class="col-md-8 offset-2">
                          <input type="text" placeholder="Enter Category name" name="catname" class="form-control mt-3" value="{{$data->name}}">
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
                    rows="6" >{{$data->description}}</textarea>
               @error('description')
                    <p class="text-danger">{{$message}}</p>
               @enderror
                    </div>
                  </div>

      <div class="text-center"> <button class="btn btn-primary mt-3">Update Category</button></div>
        </form>
                </div>

</body>
</html>
@endsection
