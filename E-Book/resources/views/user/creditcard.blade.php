@extends('user.navbar')
@section('nav')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-6 offset-3">
   <form action="{{route('payment')}}" method="POST">
    @csrf

    <input type="hidden" name="order_id" value="{{$orders->id}}">
    <input type="hidden" name="payment_method" value="{{$orders->payment_method}}">
    <input type="hidden" name="total_price" value="{{$orders->total_price}}">
    <input type="hidden" name="payment_status" value="confirmed">


    <label>Card Holder Name</label>
    <input type="text" name="card_name" class="form-control" value="{{$orders->user_name}}">

    <label>Card Number</label>
    <input type="password" name="card_number" class="form-control" placeholder="X X X X X X">

    <label>Expiry Date</label>
    <input type="datetime-local" name="expiry" class="form-control">

    <label>CVV</label>
    <input type="text" name="cvv" class="form-control">

    <button type="submit" class="btn btn-success  mt-3 mb-5">
        Pay Now
    </button>
</form> 
        </div>
    </div>
</div>
@endsection

