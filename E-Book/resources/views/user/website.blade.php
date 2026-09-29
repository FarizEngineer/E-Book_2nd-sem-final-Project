
<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->


<!-- Mirrored from gentle-dieffenbachia-3f26db.netlify.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Aug 2026 15:08:03 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="pixel-drop">
    <meta name="description" content="Bookim - Book Store HTML Template">
    <!-- ======== Page title ============ -->
    <title>ReadSphere</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="{{asset('user/assets/img/favicon.png')}}">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="{{asset('user/assets/css/bootstrap.min.css')}}">
    <!--<< All Min Css >>-->
    <link rel="stylesheet" href="{{asset('user/assets/css/all.min.css')}}">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="{{asset('user/assets/css/animate.css')}}">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="{{asset('user/assets/css/magnific-popup.css')}}">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="{{asset('user/assets/css/meanmenu.css')}}">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="{{asset('user/assets/css/swiper-bundle.min.css')}}">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="{{asset('user/assets/css/nice-select.css')}}">
    <!--<< Icomoon.css >>-->
    <link rel="stylesheet" href="{{asset('user/assets/css/icomoon.css')}}">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="{{asset('user/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/user/usercomp.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/user/errorpage.css')}}">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
>
</head>

<body>
    <!-- Cursor follower -->
    <div class="cursor-follower"></div>

    <!-- Preloader start -->
    <!-- <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
            </div>
            <div class="txt-loading">
                <span data-text-preloader="B" class="letters-loading">
                    B
                </span>
                <span data-text-preloader="O" class="letters-loading">
                    O
                </span>
                <span data-text-preloader="O" class="letters-loading">
                    O
                </span>
                <span data-text-preloader="K" class="letters-loading">
                    K
                </span>
                <span data-text-preloader="I" class="letters-loading">
                    I
                </span>
                <span data-text-preloader="M" class="letters-loading">
                    M
                </span>
            </div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Back To Top start -->
    <button id="back-top" class="back-to-top">
        <i class="fa-solid fa-chevron-up"></i>
    </button>

    <!-- Offcanvas Area start  -->
    <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href='index.html'>
                                <img src="{{asset('user/assets/img/logo/logo.png')}}" alt="logo-img">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <p class="text d-none d-xl-block">
                        Nullam dignissim, ante scelerisque the is euismod fermentum odio sem semper the is erat, a
                        feugiat leo urna eget eros. Duis Aenean a imperdiet risus.
                    </p>
                    <div class="mobile-menu fix mb-3"></div>
                    <div class="offcanvas__contact">
                        <h4>Contact Info</h4>
                        <ul>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href='index.html' target='_blank'>Main Street, Melbourne, Australia</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="mailto:info@example.com"><span
                                            class="mailto:info@example.com">info@example.com</span></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-clock"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href='index.html' target='_blank'>Mod-friday, 09am -05pm</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+11002345909">+11002345909</a>
                                </div>
                            </li>
                        </ul>
                        <div class="header-button mt-4">
                            <a class='theme-btn text-center' href='shop.html'>
                                Explore More  <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                        <div class="social-icon d-flex align-items-center">
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://x.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                            <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>

    <!-- Header Top section start -->
    <div class="header-top-section">
        <div class="container">
            <div class="header-top-wrapper">
                <ul class="contact-list">
                    <li>
                        <i class="fa-brands fa-facebook-f"></i>
                        7500k Followers
                    </li>
                    <li>
                        <i class="fa-solid fa-phone"></i>
                        <a href="tel:+40276328246">+402 763 282 46</a>
                    </li>
                </ul>
                <div class="header-top-right">
                    <p><b>30%</b> Discount For The First Order!</p>
                    <div class="social-icon d-flex align-items-center">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Section Start -->
    <header id="header-sticky" class="header-1">
        <div class="container">
            <div class="mega-menu-wrapper">
                <div class="header-main">
                    <div class="header-left">
                        <div class="logo">
                            <a class='header-logo' href='index.html'>
                                <img src="{{asset('user/assets/img/logo/logo.png')}}" alt="logo-img">
                            </a>
                        </div>
                        <div class="search-widget">
                            <form action="#">
                                <input type="text" placeholder="Search for Products...">
                                <button type="submit"><i class="fa-regular fa-magnifying-glass"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="mean__menu-wrapper">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li>
                                        <a href="{{route('bookshows')}}">
                                            Home

                                        </a>

                                    </li>
                                    <li>
                                        <a href="{{route('category')}}">
                                            Shop
                                            <i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="{{route('category')}}">Categories</a></li>
                                            <li><a href="{{route('shop_list')}}">My Cart</a></li>

                                            <li><a href="{{route('myorders')}}">My Orders</a></li>
                                            <li><a href="{{route('whishlist')}}">Wishlist</a></li>

                                        </ul>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href='about.html'>
                                            Pages
                                            <i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="{{route('about')}}">About Us</a></li>
                                            <li class="has-dropdown">
                                                <a href="{{route('author')}}">
                                                    Author
                                                    <i class="fa-solid fa-chevron-right"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="{{route('author')}}">Author</a></li>
                                                    <li><a href='team-details.html'>Author Profile</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{route('faq')}}">Faq's</a></li>
                                            <li><a href="{{route('error')}}">404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{route('blog')}}">
                                            Blog



                                        </a>

                                    </li>
                                    <li>
                                        <a href="{{route('contact')}}">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-right d-flex justify-content-end align-items-center">



<a class='cart-icon' href="{{route('added')}}"><i class="fa-solid fa-cart-shopping" style="font-size: 20px;"><span style="font-size: 16px;">{{ $cart }}</span></i></a>
@if (Auth::user()->role == "author")
<a class='cart-icon' href="{{route('authprofile', Auth::id())}}"><i class="fa-solid fa-user" style="font-size: 20px;"><span style="font-size: 16px;"></span></i></a>   
@else
    <a class='cart-icon' href="{{route('profile')}}"><i class="fa-solid fa-user" style="font-size: 20px;"><span style="font-size: 16px;"></span></i></a>
@endif



                        <a class='theme-btn style-2 fadeInUp' data-wow-delay='.5s' href='{{route('allcomp')}}'>Join Competitions <i class="fa-solid fa-arrow-right-long"></i></a>
                        <div class="header__hamburger d-xl-none my-auto">
                            <div class="sidebar__toggle">
                                <i class="fas fa-bars"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


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

    <!-- Hero Section start  -->
    <div class="hero-section hero-1 fix bg-cover" style="background-image: url({{asset('user/assets/img/hero/hero-bg-1.jpg);')}}">

        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-xl-8 col-lg-6">
                    <div class="hero-main-wrapper">
                        <div class="hero-content">
                            <h4 class="wow fadeInUp" data-wow-delay=".2s">editor choice best books <span>Up to 50%
                                    Off</span></h4>
                            <h1 class="wow fadeInUp" data-wow-delay=".4s">A library that  <br>
                               <span
                                    class="line-shape">fits in your pocket<img src="{{asset('user/assets/img/hero/line-shape.png')}}"
                                        alt="shape"></span>
                            </h1>
                            <p class="wow fadeInUp" data-wow-delay=".6s">An online library that brings books straight to you<br>
                                Explore thousands of e-books across every genre <br> search, discover, and download in seconds</p>
                        </div>
                        <div class="hero-btn">
                            <a class='theme-btn wow fadeInUp' data-wow-delay='.8s' href='shop.html'>
                                Shop Now <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                            <a class='theme-btn style-2 wow fadeInUp' data-wow-delay='1s' href='shop.html'>
                                view all books <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="girl-img">
                        <img src="{{asset('user/assets/img/hero/hero-girl-1.png')}}" alt="img">
                        <div class="bg-shape">
                            <img src="{{asset('user/assets/img/hero/bg-shape.png')}}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Feature Section start  -->
    <section class="feature-section fix section-padding">
        <div class="container">
            <div class="feature-wrapper">
                <div class="feature-box-items wow fadeInUp" data-wow-delay=".2s">
                    <div class="icon">
                        <i class="icon-icon-1"></i>
                    </div>
                    <div class="content">
                        <h3>Return & refund</h3>
                        <p>Money back guarantee</p>
                    </div>
                </div>
                <div class="feature-box-items wow fadeInUp" data-wow-delay=".4s">
                    <div class="icon">
                        <i class="icon-icon-2"></i>
                    </div>
                    <div class="content">
                        <h3>Secure Payment</h3>
                        <p>30% off by subscribing</p>
                    </div>
                </div>
                <div class="feature-box-items wow fadeInUp" data-wow-delay=".6s">
                    <div class="icon">
                        <i class="icon-icon-3"></i>
                    </div>
                    <div class="content">
                        <h3>Quality Support</h3>
                        <p>Always online 24/7</p>
                    </div>
                </div>
                <div class="feature-box-items wow fadeInUp" data-wow-delay=".8s">
                    <div class="icon">
                        <i class="icon-icon-4"></i>
                    </div>
                    <div class="content">
                        <h3>Daily Offers</h3>
                        <p>20% off by subscribing</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop Section start  -->
    <section class="shop-section section-padding fix pt-0">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Featured Books</h2>
                </div>
                <a class='theme-btn style-2 fadeInUp' data-wow-delay='.5s' href='shop.html'>Explore More <i
                        class="fa-solid fa-arrow-right-long"></i></a>
            </div>
           <div class="row">
           

               @foreach ($book as $book )
                      <div class="col-md-4">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="{{ asset('storage/books/' . $book->pdf) }}" target="_blank"><img src="{{asset('storage/books_pics/'. $book->image)}}" style="width: 450px;height:300PX;"></a>
                                <ul class="post-box">
                                    <li>

                                        Hot
                                    </li>

                                </ul>
                                <ul class="shop-icon d-grid justify-content-center align-items-center">
                                    <li>
                                        <a href='shop-cart.html'><i class="far fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href='shop-cart.html'>
                                            <img class="icon" src="{{asset('user/assets/img/icon/shuffle.svg')}}" alt="svg-icon">
                                        </a>
                                    </li>
                                    <li>
                                        <a href='{{route('booksdetail',$book->id)}}'><i class="far fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-content">

                                <h3><a href='shop-details.html'>{{$book->title}}</a></h3>
                                <ul class="price-list">
                                    <li>RS-{{$book->price}}</li>
                                    <li>
                                        40% off
                                    </li>
                                </ul>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">

                                        </span>
                                        <span class="content">{{$book->book_author->name}}</span>
                                    </li>
                                    <li class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-button">
                                <a class='theme-btn' href="{{route('booksdetail',$book->id)}}">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
           </div>


            </div>
        </div>
    </section>

 
<section class="book-catagories-section fix section-padding bg-cover"
    style="background-image: url({{ asset('user/assets/img/top-categories-bg.png') }})">
    <div class="container">
        <div class="book-catagories-wrapper">
            <div class="section-title text-center">
                <span class="icon"><img src="{{ asset('user/assets/img/icon/icon-24.svg') }}" alt="icon"></span>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">Top Categories Book</h2>
            </div>
            <div class="swiper book-catagories-slider">
                <div class="swiper-wrapper">
 
                    @foreach ($cat as $cat1)
                        <div class="ms-5">
                            <div class="book-catagories-items">
                                <div class="book-thumb">
                                    <span class="book-icon">
                                        <i class="fa-solid fa-book"></i>
                                    </span>
                                </div>
                                <div class="book-content">
                                    <span class="book-box">{{ $cat1->name }}</span>
                                    <h6>
                                        {{-- <a href="{{ route('category.show', $cat1->id) }}">
                                            {{ \Illuminate\Support\Str::limit($cat1->description, 60) }}
                                        </a> --}}
                                    </h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
 
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Book Catagories Section End -->
 

    <!-- Shop Section start  -->
    {{-- <section class="shop-section section-padding fix">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title mb- wow fadeInUp" data-wow-delay=".3s">
                    <h2>ReadSphere Top Books</h2>
                </div>
                <a class='theme-btn style-2 wow fadeInUp' data-wow-delay='.5s' href='shop.html'>Explore More <i
                        class="fa-solid fa-arrow-right-long"></i></a>
            </div>
            <div class="book-shop-wrapper">
                @foreach ($book1 as $book1)
                  <div class="shop-box-items style-2">
                    <div class="book-thumb center">
                        <a href="shop-details.html"><img src="{{asset('storage/books_pics/'. $book->image)}}" style="width: 450px;height:300PX;"></a>
                        <ul class="shop-icon d-grid justify-content-center align-items-center">
                            <li>
                                <a href='shop-cart.html'><i class="far fa-heart"></i></a>
                            </li>
                            <li>
                                <a href='shop-cart.html'>

                                    <img class="icon" src="{{asset('user/assets/img/icon/shuffle.svg')}}" alt="svg-icon">
                                </a>
                            </li>
                            <li>
                                <a href='shop-details.html'><i class="far fa-eye"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="shop-content">

                        <h3><a href='shop-details.html'>{{$book1->title}}</a></h3>
                        <ul class="price-list">
                            <li>RS-{{$book1->price}}</li>
                            <li>

                            </li>
                        </ul>
                        <ul class="author-post">
                            <li class="authot-list">
                                <span class="thumb">
                                    <img src="{{asset('user/assets/img/testimonial/client-1.png')}}" alt="img">
                                </span>
                                <span class="content">(Author) {{$book1->book_author->name}}</span>
                            </li>
                            <li class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="shop-button">
                        <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                    </div>
                </div>

                @endforeach



                <div class="cta-shop-box">
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">
                        Find Your Nest
                        Books!
                    </h2>
                    <h6 class="wow fadeInUp" data-wow-delay=".4s">And get your 25% discount now!</h6>
                    <a class='theme-btn wow fadeInUp' data-wow-delay='.6s' href='shop.html'>Shop Now <i
                            class="fa-solid fa-arrow-right-long"></i></a>
                    <div class="girl-shape">
                        <img src="{{asset('user/assets/img/girl-shape.png')}}" alt="shape-img">
                    </div>
                    <div class="circle-shape">
                        <img src="{{asset('user/assets/img/circle-shape.png')}}" alt="shape-img">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Cta Banner Section start  -->
    <section class="cta-banner-section mt-3 fix section-padding pt-0">
        <div class="container">
            <div class="cta-banner-wrapper section-padding bg-cover"
                style="background-image: url({{asset('user/assets/img/cta-banner.jpg);')}}">
                <div class="book-shape">
                    <img src="{{asset('user/assets/img/cta-book-2.png')}}" alt="shape-img">
                </div>
                <div class="book-shape-2">
                    <img src="{{asset('user/assets/img/cta-book.png')}}" alt="shape-img">
                </div>
                <div class="cta-content text-center">
                    <span class="wow fadeInUp" data-wow-delay=".2s">Get 25% <img src="{{asset('user/assets/img/line-shape.png')}}" alt=""></span>
                    <h2 class="mb-40 wow fadeInUp" data-wow-delay=".4s">discount
                        in all <br> kind of
                        super Selling</h2>
                    <a class='theme-btn wow fadeInUp' data-wow-delay='.6s' href='shop.html'>Shop Now<i class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>
        </div>
    </section>


    <!-- Testimonial Section start  -->
    <section class="testimonial-section fix section-padding pt-0">
        <div class="container">
            <div class="section-title text-left">
                <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">What our client say</h2>
            </div>
            <div class="swiper testimonial-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <p>
                                One of the most powerful takeaways from this book is the emphasis on adopting a mindset
                                of abundance and possibility. The idea that we can choose to see opportunities rather
                                than limitations is a game-changer.
                            </p>
                            <div class="client-info-wrapper d-flex align-items-center justify-content-between">
                                <div class="client-info">
                                    <div class="client-img bg-cover"
                                        style="background-image: url('{{asset('user/assets/img/testimonial/01.jpg);')}}">
                                        <div class="icon">
                                            <img class="shape" src="{{asset('user/assets/img/testimonial/shape.svg')}}" alt="img">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>Ronald Richards</h3>
                                        <span>Marketing Coordinator</span>
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                    </div>
                                </div>


                                <div class="logo">
                                    <img src="{{asset('user/assets/img/testimonial/logo1.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <p>
                                The idea that we can choose to see opportunities rather than limitations is a
                                game-changer. The book encourages readers to step out of their comfort zones and embrace
                                a more positive outlook on life.
                            </p>
                            <div class="client-info-wrapper d-flex align-items-center justify-content-between">
                                <div class="client-info">
                                    <div class="client-img bg-cover"
                                        style="background-image: url('{{asset('user/assets/img/testimonial/02.jpg);')}}">
                                        <div class="icon">
                                            <img class="shape" src="{{asset('user/assets/img/testimonial/shape.svg')}}" alt="img">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>Dianne Russell</h3>
                                        <span>Project Manager</span>
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                    </div>
                                </div>


                                <div class="logo">
                                    <img src="{{asset('user/assets/img/testimonial/logo2.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <p>
                                "The Art of Possibility" by Rosamund Stone Zander and Benjamin Zander is a
                                transformative read that challenges conventional thinking and opens up new
                                possibilities. As a reader, I found myself profoundly .
                            </p>
                            <div class="client-info-wrapper d-flex align-items-center justify-content-between">
                                <div class="client-info">
                                    <div class="client-img bg-cover"
                                        style="background-image: url('{{asset('user/assets/img/testimonial/03.jpg);')}}">
                                        <div class="icon">
                                            <img class="shape" src="{{asset('user/assets/img/testimonial/shape.svg')}}" alt="img">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>Ronald Richards</h3>
                                        <span>Marketing Coordinator</span>
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                    </div>
                                </div>


                                <div class="logo">
                                    <img src="{{asset('user/assets/img/testimonial/logo1.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <p>
                                From the very first chapter, the authors engage readers with inspiring stories and
                                practical insights. Benjamin Zander's experiences as a conductor bring a unique
                                perspective to leadership .
                            </p>
                            <div class="client-info-wrapper d-flex align-items-center justify-content-between">
                                <div class="client-info">
                                    <div class="client-img bg-cover"
                                        style="background-image: url('{{asset('user/assets/img/testimonial/04.jpg);')}}">
                                        <div class="icon">
                                            <img class="shape" src="{{asset('user/assets/img/testimonial/shape.svg')}}" alt="img">
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3>Ronald Richards</h3>
                                        <span>Marketing Coordinator</span>
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                    </div>
                                </div>


                                <div class="logo">
                                    <img src="{{asset('user/assets/img/testimonial/logo2.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section start  -->
      <section class="news-section fix section-padding bg-cover" style="background-image: url({{asset('user/assets/img/news/bg.jpg);')}}">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">Our Latest News</h2>
                <p class="wow fadeInUp" data-wow-delay=".5s">Interdum et malesuada fames ac ante ipsum primis in
                    faucibus. <br> Donec at nulla nulla. Duis posuere ex lacus</p>
            </div>
            <div class="row">

@foreach ($news as $dt)
     <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="news-card-items">
                        <div class="news-image">
                            <img src="{{asset('user/assets/img/news/09.jpg')}}" alt="img">
                            <img src="{{asset('user/assets/img/news/09.jpg')}}" alt="img">
                            <div class="post-box">
                                {{$dt['tag']}}
                            </div>
                        </div>
                        <div class="news-content">
                            <ul>
                                <li>
                                    <i class="fa-light fa-calendar-days"></i>
                                    {{$dt['dealine']}}
                                </li>
                                <li>
                                    <i class="fa-regular fa-user"></i>
                                    By Admin {{ $dt->user->name ?? 'Admin' }}
                                </li>
                            </ul>
                            <h3><a href='news-details.html'>{{$dt['title']}}</a></h3>
                            <a class='theme-btn-2' href='{{route('newsdtl' , $dt['id'])}}'>Read More <i
                                    class="fa-regular fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
@endforeach






        </div>
    </section>


    
    <!-- Footer Section start  -->
    <footer class="footer-section fix footer-bg">
        <div class="container">
            <div class="footer-widget-wrapper">
                <div class="row justify-content-between">
                    <div class="col-xl-4 col-lg-4 col-md-4 wow fadeInUp" data-wow-delay=".2s">
                        <div class="single-footer-widget">
                            <div class="widget-head"><a class='footer-logo' href='index.html'>
                                    <img src="{{asset('user/assets/img/logo/white-logo.svg')}}" alt="logo-img">
                                </a>
                            </div>
                            <div class="footer-content">
                                <p>
                                    Bookim attracts readers of all ages, allowing them to interact with other readers and meet their favorite authors.
                                </p>
                                <div class="text">
                                    <a href="tel:+67041390762">+670 413 90 762</a>
                                    <a href="mailto:contact@example.com" class="mail-text">contact@example.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-4 ps-lg-5 wow fadeInUp" data-wow-delay=".4s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <h3>Category</h3>
                            </div>
                            <ul class="list-items">
                                <li>
                                    <a href='shop-details.html'>
                                        Action Books
                                    </a>
                                </li>
                                <li>
                                    <a href='shop-details.html'>
                                        Comedy
                                    </a>
                                </li>
                                <li>
                                    <a href='shop-details.html'>
                                        Drama
                                    </a>
                                </li>
                                <li>
                                    <a href='shop-details.html'>
                                        Horror
                                    </a>
                                </li>
                                <li>
                                    <a href='shop-details.html'>
                                        Kids Books
                                    </a>
                                </li>
                                <li>
                                    <a href='shop-details.html'>
                                        Top 50 Books
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 ps-lg-5 wow fadeInUp" data-wow-delay=".6s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <h3>Useful links</h3>
                            </div>
                            <ul class="list-items">
                                <li>
                                    <a href='contact.html'>
                                        Secure Shopping
                                    </a>
                                </li>
                                <li>
                                    <a href='contact.html'>
                                        Privacy Policy
                                    </a>
                                </li>
                                <li>
                                    <a href='contact.html'>
                                        Terms of Use
                                    </a>
                                </li>
                                <li>
                                    <a href='contact.html'>
                                        Shipping Policy
                                    </a>
                                </li>
                                <li>
                                    <a href='contact.html'>
                                        Returns Policy
                                    </a>
                                </li>
                                <li>
                                    <a href='contact.html'>
                                        Payment Option
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                        <div class="single-footer-widget">
                            <div class="widget-head">
                                <h3>Explore</h3>
                            </div>
                            <ul class="list-items">
                                <li>
                                    <a href='about.html'>
                                        About us
                                    </a>
                                </li>
                                <li>
                                    <a href='shop-details.html'>
                                        Store Locator
                                    </a>
                                </li>
                                <li>
                                    <a href='shop-details.html'>
                                        Kids Club
                                    </a>
                                </li>
                                <li>
                                    <a href='news.html'>
                                        Blogs
                                    </a>
                                </li>
                            </ul>
                            <div class="social-icon d-flex align-items-center">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="footer-wrapper">
                    <p class="wow fadeInUp" data-wow-delay=".3s">
                        ©All Rights reserved 2025 by <span>Bookim.</span>
                    </p>
                    <div class="bottom-list wow fadeInUp" data-wow-delay=".5s">
                        <div class="app-image">
                            <img src="{{asset('user/assets/img/footer/01.png')}}" alt="img">
                        </div>
                        <div class="app-image">
                            <img src="{{asset('user/assets/img/footer/02.png')}}" alt="img">
                        </div>
                        <div class="app-image">
                            <img src="{{asset('user/assets/img/footer/03.png')}}" alt="img">
                        </div>
                        <div class="app-image">
                            <img src="{{asset('user/assets/img/footer/04.png')}}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Newsletter Modal Area Start-->

    <!--<< All JS Plugins >>-->
    <script src="{{asset('user/assets/js/jquery-3.7.1.min.js')}}"></script>
    <!--<< Viewport Js >>-->
    <script src="{{asset('user/assets/js/viewport.jquery.js')}}"></script>
    <!--<< Bootstrap Js >>-->
    <script src="{{asset('user/assets/js/bootstrap.bundle.min.js')}}"></script>
    <!--<< Nice Select Js >>-->
    <script src="{{asset('user/assets/js/jquery.nice-select.min.js')}}"></script>
    <!--<< Waypoints Js >>-->
    <script src="{{asset('user/assets/js/jquery.waypoints.js')}}"></script>
    <!--<< Counterup Js >>-->
    <script src="{{asset('user/assets/js/jquery.counterup.min.js')}}"></script>
    <!--<< Swiper Slider Js >>-->
    <script src="{{asset('user/assets/js/swiper-bundle.min.js')}}"></script>
    <!--<< MeanMenu Js >>-->
    <script src="{{asset('user/assets/js/jquery.meanmenu.min.js')}}"></script>
    <!--<< Magnific Popup Js >>-->
    <script src="{{asset('user/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!--<< Wow Animation Js >>-->
    <script src="{{asset('user/assets/js/wow.min.js')}}"></script>
    <!-- Gsap -->
    <script src="{{asset('user/assets/js/gsap.min.js')}}"></script>
    <!--<< Main.js >>-->
    <script src="{{asset('user/assets/js/main.js')}}"></script>
    <script src="{{asset('assets/user/usercomp.js')}}"></script>
</body>


<!-- Mirrored from gentle-dieffenbachia-3f26db.netlify.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Aug 2026 15:09:26 GMT -->
</html>

