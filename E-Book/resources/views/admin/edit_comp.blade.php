@extends('admin.sidebar')
@section('admin')

<div class="container">
<span class="text-center"><h1 class="mt-4">Edit Competition</h1></span>

<form action="{{route('editcomp', $data->id)}}" method="post">
@csrf

<div class="row mt-3">
    <div class="col-md-4"><input type="text" placeholder="Enter title" name="title" class="form-control" value="{{$data->title}}" required></div>
    <div class="col-md-4"><input type="text" placeholder="Enter topic" name="topic" class="form-control" value="{{$data->topic}}" required></div>
    <div class="col-md-4">
        <select  class="form-select" name="type" >
            <option disabled selected>{{$data->type}}</option>
            <option value="essay">Essay writting</option>
            <option value="story">Story Writting</option>
        </select>
    </div>
</div>

<div class="row mt-3">
<div class="col-md-10 offset-1">
        <textarea name="description" rows="7" placeholder="Description..." class="form-control">{{$data->description}}</textarea>
</div>
</div>

<div class="row mt-3">
    <div class="col-md-4"><input type="text" placeholder="Enter 1st prize" name="first_prize" class="form-control" value="{{$data->first_prize}}" required></div>
    <div class="col-md-4"><input type="text" placeholder="Enter 2nd prize" name="second_prize" class="form-control" value="{{$data->second_prize}}" required></div>
    <div class="col-md-4"><input type="text" placeholder="Enter 3rd prize" name="third_prize" class="form-control" value="{{$data->third_prize}}" required></div>
</div>

<div class="row mt-3">
    <div class="col-md-4"><input type="text" placeholder="Enter Time/Duration" name="time" class="form-control" value="{{$data->time}}" required></div>
    <div class="col-md-4"><select name="status" class="form-select">
        <option disabled selected>{{$data->status}}</option>
        <option value="active">Active</option>
        <option value="unactive">Un-Active</option>
    </select></div>
    <div class="col-md-4"><input type="datetime-local" placeholder="Enter deadline" name="deadline" class="form-control control" value="{{ $data->deadline->format('Y-m-d\TH:i') }}" required></div>
</div>
<div class="text-center mt-3">
<button class="btn btn-primary">- Update -</button></div>
</form>

</div>

@endsection
