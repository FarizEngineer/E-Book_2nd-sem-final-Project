
@extends('admin.sidebar')

@section('admin')

<body>
<div class="container">
    <div class="row text-center" >

        <hr>


        <div class="col-md-12  ">
<div class="row">
    <div class="col-md-6 offset-4">
        <h1 class="mt-3 mb-3 text-light">ALL_AUTHORS</h1>
                @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>MESSAGE.....</strong> {{session('success')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        @endif
                    <table class="table">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>description</th>
                <th>edit</th>
                <th>delet</th>

            </tr>
   @foreach($allauthor as $authors)
   <tr>
    <td>{{$authors->id}}</td>
    <td>{{$authors->name}}</td>
    <td>{{$authors->detail}}</td>

 <td><a href="{{route('editauthor',$authors->id)}}"><i class="fa-solid fa-pen-to-square fa-beat" style="color: rgb(4, 164, 115);font-size:20px;"></i></a></td>
<td><a href="{{route('deletauthor',$authors->id)}}"><i class="fa-solid fa-trash fa-shake" style="color: rgb(225, 12, 68); font-size:25px;"></i></a></td>
@endforeach

   </tr>

        </table>
    </div>
</div>
        </div>
    </div>
</div>

</body>
</html>
@endsection
