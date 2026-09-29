
@extends('admin.sidebar')
@section('admin')

<div class="container">
<span class="text-center">
        <h1 class="mt-3 mb-2">All orders</h1></span>
                @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>MESSAGE.....</strong> {{session('success')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        @endif
                    <table class="table">
            <tr>
                <th>id</th>
                <th>customer_name</th>
                <th>total_price</th>
                <th>product name</th>
                <th>product type</th>
                <th>MORE DETAIL</th>
            </tr>
   @foreach($orders as $odrs)
   
   <tr>
    <td>{{$odrs->id}}</td>
    <td>{{$odrs->user_order->name}}</td>
    <td>{{$odrs->total_price}}</td>
    <td>{{$odrs->product_name}}</td>
    <td>{{$odrs->order_type}}</td>
    <!-- <td>{{$odrs->user_order->id}}</td> -->

  <td><a href="{{route('detail',$odrs->id)}}"><i class="fa-solid fa-circle-info fa-beat" style="color: rgb(94, 70, 162);"></i></a></td>


@endforeach

   </tr>

        </table>
    </div>



@endsection
