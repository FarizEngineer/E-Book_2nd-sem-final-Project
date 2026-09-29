@extends('admin.sidebar')
@section('admin')

<div class="container">
<span class="text-center">
    <h1 class="mt-3">Fetch Competitions</h1>
<h5 class="mt-1"><a class="btn btn-primary" href="{{route('allcomp')}}">Upload all competitions</a></h5>
</span>

<div class="box mt-4">

    @foreach ($data as $dt)
<div class="row mt-3">
    <div class="col-md-10 offset-1">
        <div class="card">
  <h5 class="card-header">Competition no : {{$dt->id}}</h5>
  <div class="card-body">

    <table class="table">
        <tr>
        <td><h5>Title : {{$dt->title}}</h5></td>
        <td><h5>Topic : {{$dt->topic}}</h5></td>
        <td><h5>Type : {{$dt->type}}</h5></td>
          </tr>
          <tr>
            <td><h6>1st prize : {{$dt->first_prize}}</h6></td>
            <td><h6>2nd prize : {{$dt->second_prize}}</h6></td>
            <td><h6>3rd prize : {{$dt->third_prize}}</h6></td>
          </tr>
          <tr>
            <td><h6>Status : {{$dt->status}}</h6></td>
            <td><h6>Duration : {{$dt->time}}</h6></td>
            <td><h6>Deadline : {{$dt->deadline}}</h6></td>
          </tr>
    </table>
    <p class="card-text">{{$dt->description}}</p>
    <a href="{{route('editcomppg', $dt->id)}}" class="btn btn-primary"> Edit </a>
    <a href="{{route('delcomp', $dt->id  )}}" class="btn btn-primary"> Delete </a>
  </div>
</div>
    </div>
</div>
    @endforeach

</div>
</div>


@endsection
