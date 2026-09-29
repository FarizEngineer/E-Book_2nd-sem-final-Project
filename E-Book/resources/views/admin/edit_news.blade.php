@extends('admin.sidebar')
@section('admin')

<body>

<div class="container  text-center">

    <form action="{{route('updtnews', $data['id'])}}" method="post" enctype="multipart/form-data">
@csrf

        <div class="row">
        <div class="col-md-6 offset-3 mt-4 "><button class="btn btn-primary "><h4 class="text-white">Update News</h4></button></div>
</div>

<div class="row mt-4">
   <div class="col-md-5 mt-2 offset-1">
     <input name="nhead" type="text" placeholder="News heading" class="form-control" value="{{$data['title']}}" required>
   </div>
   <div class="col-md-5">
<label for="nimage" class="form-label">News image :</label>
     <input name="nimage" type="file" placeholder="Insert news image" class="form-control" required>
   </div>
</div>

<div class="row mt-4">
<div class="col-md-10 offset-1">
    <textarea name="nnews" class="form-control" rows="4" required>{{$data['news']}}</textarea \>
</div>
</div>

<div class="row mt-4">
   <div class="col-md-3 offset-1">
<select name="ntag" class="form-select" required>
    <option value="disabled">{{$data->tag}}</option>
    <option value="active">Active</option>
    <option value="unactive">Un-Active</option>
    <option value="upcoming">Up-coming</option>
</select>
   </div>

   <div class="col-md-3">
  <select name="nuid" class="form-select" required>

    <option value="{{ $data->user_id }}" selected>
        {{ optional($data->user)->name ?? 'Admin' }}
    </option>

    @foreach ($users as $item)
        @if ($item->id != $data->user_id)
            <option value="{{ $item->id }}">
                {{ $item->name }}
            </option>
        @endif
    @endforeach

</select>

  </div>
   <div class="col-md-4">
     <input name="nexp" type="datetime-local" placeholder="Expire on" class="form-control" value="{{$data['dealine']}}" required>
   </div>
</div>

    </form>
</div>

</body>
</html>
@endsection

