@extends('admin.sidebar')
@section('admin')

<body>

<div class="container  text-center">
    <form action="{{Route('insertnews')}}" method="post" enctype="multipart/form-data">
@csrf
    <div class="col-md-6 offset-3 mt-4 "><button class="btn btn-primary "><h4 class="text-white">Upload News</h4></button></div>


<div class="row mt-4">
   <div class="col-md-6">
     <input name="nhead" type="text" placeholder="News heading" class="form-control">
   </div>
   <div class="col-md-6">
     <input name="nimage" type="file" placeholder="Insert news image" class="form-control">
   </div>
</div>

<div class="row mt-4">
<div class="col-md-12">
    <textarea
    name="nnews"
    placeholder="Main News description..."
    rows="5"
    class="form-control"
    ></textarea>
</div>
</div>

<div class="row mt-4">
   <div class="col-md-4">
     <label for="ntag">News Tag</label>
   <select  name="ntag" class="form-select">
    <option selected disabled>- Select Tag -</option>
    <option value="active">Active</option>
    <option value="unactive">Un-Active</option>
    <option value="upcoming">Up-Coming</option>
    <option value="latest">Latest</option>
   </select>
   </div>
   <div class="col-md-4">
     <label for="nuid">Uploaded by</label>
      <select name="nuid" class="form-select" required>

    <option value="{{ Auth::id() }}" selected>
        {{ Auth::user()->name ?? 'Admin not-logged in...'}}
    </option>
</select>

   </div>
   <div class="col-md-4">
    <label for="nexp">Expire in</label>
     <input name="nexp" type="datetime-local" class="form-control">
   </div>
</div>

    </form>




{{-- Fetch news --}}
<button type="submit" class="btn btn-primary mt-5 mb-4">
    <h4 class="text-white">All News</h4>
</button>

         @foreach ($news as $item)
<div class="row mt-2">
    <div class="col-md-10 offset-1">
          <div class="card mb-3 ">
  <img src="{{asset('newimage/').$item['image']}}}" class="card-img-top" alt="img...">
  <div class="card-body">
    <h5 class="card-title ">{{$item['title']}}</h5>
    <p class="card-text ">{{$item['news']}}</p>
    <hr class="">
    <p class="card-text">
        <small class="text-body-secondary ">News no : {{$item['id']}}</small>
        <small class="text-body-secondary  ms-5">expire in : {{$item['dealine']}}</small>
        <small class="text-body-secondary  ms-5">Status : {{$item['tag']}}</small>
        <small class="text-body-secondary  ms-5">uploaded by Admin :{{ $item->user->name ?? 'Admin' }}</small>
      <a class="btn btn-primary ms-5 mt-2" href="{{Route('delnews', $item['id'] )}}">Delete</a>
      <a class="btn btn-primary ms-2 mt-2" href="{{Route('edtnews', $item['id'] )}}">Edit</a>
    </p>
  </div>
</div>
    </div>
</div>
    @endforeach
</div>




</body>
</html>
@endsection

