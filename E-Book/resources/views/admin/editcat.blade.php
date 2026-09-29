@extends('admin.sidebar')

@section('admin')

<body>
<div class="container">
    <div class="row">
        <div class="co-md-12 text-center">
            <div class="row">
                <div class="col-md-6 offset-4">
        <h1 class="mt-5 mb-3 text-light">EDIT_CATEGORY</h1>

                                <form action="{{route('updatecategory',$data->id)}}" method="post">
                        @csrf
                   <input type="text"placholder="ENTER NAME" name="catname" class="form-control mt-3" value="{{$data->name}}">
                    @error('usermail')
                    <p class="text-danger">{{$message}}</p>
                    @enderror()

<textarea name="description" class="form-control mt-3">{{$data->description}}</textarea>
             @error('description')
                    <p class="text-danger">{{$message}}</p>
                    @enderror()
                    <button class="btn btn-danger mt-3">submit</button>
        </form>
                </div>

            </div>

        </div>
    </div>
</div>

</body>
</html>
@endsection
