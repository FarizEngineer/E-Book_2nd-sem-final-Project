@extends('admin.sidebar')

@section('admin')

<body>
<div class="container">
    <div class="row">
        <div class="co-md-12 text-center">

            <div class="row">
                <div class="col-md-6 offset-4">
                       <h1 class="mt-5 mb-3 text-light">INSERT AUTHOR</h1>
                                    <form action="{{route('addauthor')}}" method="post">
                        @csrf
                    <input type="text"placholder="ENTER NAME" name="authorname" class="form-control mt-3" value="{{old('authorname')}}">
                    @error('authorname')
                    <p class="text-danger">{{$message}}</p>
                    @enderror()
                    <textarea name="detail" class="form-control mt-3"></textarea>
               @error('detail')
                    <p class="text-danger">{{$message}}</p>
               @enderror
                   `
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
