@extends('admin.sidebar')
@section('admin')

<div class="container">
    <div class="text-center mt-4"><h3>Announce Result to participant : {{$data->user->name}}</h3></div>

    <form action="{{route('resultannounce',$data->id)}}" method="POST">
@csrf



<div class="row mt-5">
    <div class="col-md-6 offset-3">
<select name="status" class="form-select">
    <option selected disabled>- select -</option>
    <option value="win">Win</option>
    <option value="lose">Lose</option>
</select>
    </div>
</div>

<div class="row mt-4">
<div class="col-md-6 offset-3">
    <select name="prize" class="form-select">
    <option selected disabled>- Select prize -</option>
    <option value="Losed">if lose</option>
    <option value="1st Prize ">1st Prize</option>
    <option value="2nd prize ">2nd prize</option>
    <option value="3rd prize ">3rd prize</option>
</select>
</div>
</div>

<div class="text-center mt-4"><button class="btn btn-primary">- Annouce Result -</button></div>

    </form>


</div>

@endsection
