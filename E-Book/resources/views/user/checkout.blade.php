@extends('user.navbar')
@section('nav')
   <!-- Checkout Section Start -->
    <section class="checkout-section fix section-padding">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-9">

                        <div class="checkout-single-wrapper">
                            <div class="checkout-single boxshado-single">
                                <h4>Billing Details</h4>
                                <div class="checkout-single-form">
                                    <div class="row g-4">

<form action="{{route('order')}}" method="post">
    @csrf
                                        <div class="col-lg-12">
                                            <div class="input-single">
                                                <span>Full Name*</span>
                                                <input type="text" name="user_name" id="userFirstName" required=""
                                                    placeholder="Full Name" value="{{$user->name}}">
                                            </div>
                                        </div>


                                        <div class="col-lg-12">
                                            <div  class="input-single">
                                                <span>Product type :</span>
<input type="text" name="order_type" class="form-control" value="{{$cart->product_type}}" >
                                            </div>
                                        </div>
                                        
                                          <div class="col-lg-12">
                                            <div class="input-single">
                                                <span>ORDER_PRICE</span>
                                                <input name="order_price" id="country" placeholder="Select a type" value=" {{ ($book->price) }}">
                                            </div>
                                        </div>
                                           @if ($cart->product_type == 'hardcopy')


                                           <div class="col-lg-12">
                                            <div class="input-single">
                                                <span>SHIPPING_PRICE</span>
                                                <input name="shipping_price" id="country" placeholder="Select a type" value="{{$book->price*12/100}}">
                                            </div>
                                            </div>

                                                @else
                                                  <div class="col-lg-12">
                                            <div class="input-single">
                                                <span>SHIPPING_PRICE</span>
                                                <input name="shipping_price" id="country"   placeholder="Select a type" value="NO SHIPPING PRICE BECAUSE YOU ARE SELECTED PDF">
                                            </div>
                                        </div>
                                     @endif
                                         @if ($cart->product_type == 'hardcopy')
                                                    <div class="col-lg-12">
                                            <div class="input-single">
                                                <span>QUANTITY</span>
                                                <input name="quantity_price" id="country"   placeholder="Select a type" value="{{$cart->product_qty}}">
                                            </div>
                                    </div>
                                    @else
                                                   <div class="col-lg-12">
                                            <div class="input-single">
                                                <span>QUANTITY</span>
                                                <input name="quantity_price" id="country"   placeholder="Select a type" value="1">
                                            </div>
                                    </div>
                                       @endif


                                        <div class="col-lg-12 mt-3">
<div class="form-control">
<select name="payment_method" class="form-select">
 @if($cart->product_type == 'pdf')
 <option selected disabled>Select payment method</option>
 <option value="credit_card">Credit Card</option>
 <option disabled>Cash on delivery</option>
@else
        <option selected disabled>select payment method</option>
        <option value="cash on delivery">Cash on delivery</option>
        <option value="credit_card">Credit card</option>
@endif        

</select>

</div>

                                   </div>
                                        <div class="col-lg-12">
                                            <div class="input-single">
                                                <span>Street Address*</span>
                                                <input name="user_address" id="userAddress2"
                                                    placeholder="Apartment, suite, unit, etc. (optional)">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="input-single">
                                                <span>Phone*</span>
                                                <input name="phone" id="phone" placeholder="phone">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="input-single">
                                                <span>Email Address*</span>
                                                <input name="email" id="email22" placeholder="email"value="{{$user->email}}">
                                            </div>
                                        </div>
                                        @if ($cart->product_type == 'hardcopy')
                                            <input type="hidden" name="total_price" value=" {{ ($book->price * $cart->product_qty) + ($book->price  * 12 / 100) }}">
                                            @else
                                            <input type="hidden" name="total_price" value=" {{ ($book->price * 1) }}">

                                        @endif

                                   <input type="hidden" value="{{$book->id}}" name="book_id">
                                   <input type="hidden" value="{{$user->id}}" name="user_id">
                                   <input type="hidden" value="{{$book->title}}" name="title">
                                   <input type="hidden" value="pending" name="status">
                   <button class='theme-btn style-2 fadeInUp mt-3' data-wow-delay='.3s' >Submit<i class="fa-solid fa-arrow-right-long"></i></button>
                                        </form>
                                        <!-- //form end here -->
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
                <div class="col-lg-3">
                    <div class="checkout-order-area">
                        <h3>Our Order</h3>
                        <div class="product-checout-area">
                            <div class="checkout-item d-flex align-items-center justify-content-between">
                                <p>Product</p>
                                <p>Subtotal</p>
                            </div>
                            <div class="checkout-item d-flex align-items-center justify-content-between">
                                <p>PRODUCT PRICE</p>
                                <p>RS-{{$book->price}}</p>
                            </div>
                            <div class="checkout-item d-flex justify-content-between">
                                <p>Shipping</p>
                                <div class="shopping-items">
                                    <div class="form-check d-flex align-items-center from-customradio">
                                        <label class="form-check-label">
                                                      @if ($cart->product_type == 'hardcopy')
                                                  {{$book->price*12/100}}
                                            @else
                                       <h4>0</h4>

                                        @endif

                                        </label>
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault12">
                                    </div>
                                    @if ($cart->product_type == 'hardcopy')
                                          <div class="form-check d-flex align-items-center from-customradio">
                                        <label class="form-check-label">
                                       Quantity {{$cart->product_qty}}
                                        </label>
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault123">
                                </div>
   @else
                <div class="form-check d-flex align-items-center from-customradio">
                                        <label class="form-check-label">
                                       Quantity 1
                                        </label>
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault123">
                                </div>

                                    @endif
                                  @if ($cart->product_type == 'hardcopy')


                                    <div class="form-check d-flex align-items-center from-customradio">
                                        <label class="form-check-label">
                                        Flat rate. {{ ($book->price * $cart->product_qty) }}
                                            <!-- {{ $book->price * $cart->product_qty}} -->
                                        </label>
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault124">
                                    </div>
                                    @else
                                         <div class="form-check d-flex align-items-center from-customradio">
                                        <label class="form-check-label">
                                        Flat rate. {{ ($book->price * 1) }}
                                            <!-- {{ $book->price * $cart->product_qty}} -->
                                        </label>
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault124">
                                    </div>
                                       @endif
                                </div>
                            </div>
                                      @if ($cart->product_type == 'hardcopy')
                            <div class="checkout-item d-flex align-items-center justify-content-between">
                                <p>Total</p>
                                <p>Rs. {{ ($book->price * $cart->product_qty) + ($book->price  * 12 / 100) }}</p>
                            </div>
                            @else
                            <div class="checkout-item d-flex align-items-center justify-content-between">
                                <p>Total</p>
                                <p>Rs. {{ ($book->price * 1) }}</p>
                            </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection