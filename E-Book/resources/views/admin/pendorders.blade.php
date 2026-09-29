@extends('admin.sidebar')
@section('admin')
<div class="container">
<span class="text-center"><h1 class=" mt-2 mb-2">Pending Orders</h1></span>    

<div class="table-responsive">
    <table class="table">
          <tr>
                <th>id</th>
                <th>Customer_name</th>
                 <th>Product name</th>
                 <th>Quantity</th>
                <th>Total price</th>
                <th>Payment method</th>
                <th>order type</th>

            </tr>

@foreach ($confirm as $dt)
      <tr>
                <td>{{$dt->id}}</td>
                <td>{{$dt->user_name}}</td>
                <td>{{$dt->product_name}}</td>
                <td>{{$dt->quantity}}</td>
                   <td>{{$dt->price}}</td>
                      <td>{{$dt->payment_method}}</td>
                <td>{{$dt->order_type}}</td>
            </tr>
@endforeach

</table>
</div>

</div>    


@endsection