@extends('user.navbar')
@section('nav')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-3 text-center">
      <a href="{{ asset('storage/books/' . $book->pdf) }}" target="_blank" class="btn btn-success mt-5 mb-5" style="font-size:70px;">view pdf</a>

        </div>
    </div>
</div>
@endsection