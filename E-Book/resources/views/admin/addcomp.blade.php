@extends('admin.sidebar')
@section('admin')

<div class="container">
<span class="text-center"><h1 class="mt-4">Insert Competition</h1></span>
<form action="{{route('insertcomp')}}" method="post">
@csrf

<div class="row mt-3">
    <div class="col-md-4"><input type="text" placeholder="Enter title" name="title" class="form-control" required></div>
    <div class="col-md-4"><input type="text" placeholder="Enter topic" name="topic" class="form-control" required></div>
    <div class="col-md-4">
        <label for="type" class="form-label">Select Type :</label>
        <select  class="form-select" name="type" >
            <option disabled selected>--- Select ---</option>
            <option value="essay">Essay writting</option>
            <option value="story">Story Writting</option>
        </select>
    </div>
</div>

<div class="row mt-3">
  <div class="col-md-10 offset-1">
      <textarea name="description" placeholder="Description..." rows="10" class="form-control"></textarea>
  </div>
</div>

<div class="row mt-3">
    <div class="col-md-4"><input type="text" placeholder="Enter 1st prize" name="first_prize" class="form-control" required></div>
    <div class="col-md-4"><input type="text" placeholder="Enter 2nd prize" name="second_prize" class="form-control" required></div>
    <div class="col-md-4"><input type="text" placeholder="Enter 3rd prize" name="third_prize" class="form-control" required></div>
</div>

<div class="row mt-3">
    <div class="col-md-4"><input type="text" placeholder="Enter Time/Duration" name="time" class="form-control" required></div>
    <label for="status" class="form-label">Status</label>
    <div class="col-md-4"><select name="status" class="form-select">
        <option disabled selected>--Select--</option>
        <option value="active">Active</option>
        <option value="unactive">Un-Active</option>
    </select></div>
    <div class="col-md-4"><label for="deadline">Deadline :</label><input type="datetime-local" placeholder="Enter deadline" name="deadline" class="form-control" required></div>
</div>

<div class="text-center mt-3"><button class="btn btn-primary">Insert</button></div>
</form>

</div>

@endsection
