@extends('user.navbar')
@section('nav')
<!-- Sidebar Area Here -->
    <div id="targetElement" class="side_bar slideInRight side_bar_hidden">
        <div class="side_bar_overlay"></div>
        <div class="cart-title mb-50">
            <h4>Log in</h4>
        </div>
        <div class="login-sidebar">
            <form action="#" id="contact-form" method="POST">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="form-clt">
                            <span>Username or email address *</span>
                            <input type="text" name="name15" id="name15" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-clt">
                            <span>Password *</span>
                            <input id="password" type="password" placeholder="">
                            <div class="icon"><i class="fa-regular fa-eye"></i></div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <button class="theme-btn" type="submit"><span>Log In</span></button>
                    </div>
                    <div class="col-lg-12">
                        <div class="from-cheak-items">
                            <div class="form-check d-flex gap-2 from-customradio">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Remember Me
                                </label>
                            </div>
                            <p>Forgot Password?</p>
                        </div>
                    </div>
                </div>
            </form>
            <p class="text">Or login with</p>
            <div class="social-item">
                <a href="#" class="facebook-text"><img src="{{asset('user/assets/img/facebook.png')}}" alt="img">FACEBOOK</a>
                <a href="#" class="facebook-text google-text"><img src="{{asset('user/assets/img/google.png')}}" alt="img">Google</a>
            </div>
            <div class="user-icon-box">
                <img src="{{asset('user/assets/img/user.png')}}" alt="img">
                <p>No account yet?</p>
                <a href="account.html">Create an Account</a>
            </div>
        </div>
        <button id="closeButton" class="x-mark-icon"><i class="fas fa-times"></i></button>
    </div>

    <!-- Breadcumb Section Start -->
    <div class="breadcrumb-wrapper bg-cover section-padding"
        style="background-image: url({{asset('user/assets/img/hero/breadcrumb-bg.jpg);')}}">
        <div class="container">
            <div class="page-heading">
                <h1>MY ORDERS</h1>
                <div class="page-header">
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                        <li>
                            <a href='index.html'>
                                Home
                            </a>
                        </li>
                        <li>
                            <i class="fa-solid fa-chevron-right"></i>
                        </li>
                        <li>
                            my orders
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Shop Cart Section Start -->
    <div class="cart-section section-padding">
        <div class="container">
            <div class="main-cart-wrapper">
                <div class="row g-5 text-center">
                    <div class="col-xl-11 offset-1">
                        <div class="table-responsive">
                            <table class="table">
                                <thead style="font-size:50px;">
                                    <tr>
                                        <th>Product_Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Subtotal</th>
                                        <th>Status</th>
                                        <th>order type</th>

                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
@foreach ($orders as $order)

                                    <tr>
                                        <td>
                                            <span class="d-flex gap-5 align-items-center">
                                               <span class="cart-title">
                                                   {{$order->product_name}}
                                                </span>
                                                <span class="cart-title">

                                                </span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="cart-price">  {{$order->price}}</span>
                                        </td>
                                        <td>
                                           <span class="cart-price">  {{$order->quantity}}</span>
                                        </td>
                                        <td>
                                            @if ($order->order_type == 'hardcopy')
                                    <span class="cart-price">  {{($order->price) * ($order->quantity) + ($order->shipping)}}</span>
                                 @else
                                    <span class="cart-price">  {{$order->price}}</span>

                                    @endif
                                </td>
                                <td>{{$order->status}}</td>
                                <td>{{$order->order_type}} <br>
                                        @if ($order->status == 'paid' && $order->order_type == 'pdf')
                                        <a href="{{route('pdf_access',$order->id)}}" class="btn btn-success">view pdf</a>

                                        @else

                                @endif
                                @if ($order->order_type == 'hardcopy' && $order->status == 'paid')
                             <a href="" class="btn btn-success"> delivered</a>
                                @endif


                                </td>


                                <td>{{$order->created_at}}</td>
                                    </tr>
@endforeach

                                </tbody>
                            </table>
                        </div>


                            <a class='theme-btn mb-5' href="{{route('allorder')}}">
                                ORDER MORE
                            </a>


                </div>
            </div>
        </div>
    </div>
@endsection
