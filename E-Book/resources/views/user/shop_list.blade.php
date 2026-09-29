
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
    <title>Bookim - Book Store HTML Template</title>
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
                                        <a href="{{route('count')}}">
                                            test



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
<a class='cart-icon' href="{{route('profile')}}"><i class="fa-solid fa-user" style="font-size: 20px;"><span style="font-size: 16px;"></span></i></a>



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

    <!-- Breadcumb Section Start -->
    <div class="breadcrumb-wrapper bg-cover section-padding"
        style="background-image: url({{asset('user/assets/img/hero/breadcrumb-bg.jpg);')}})">
        <div class="container">
            <div class="page-heading">
                <h1>My Cart</h1>
                <div class="page-header">
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                        <li>
                            <a href="{{route('bookshows')}}">
                                Home
                            </a>
                        </li>
                        <li>
                            <i class="fa-solid fa-chevron-right"></i>
                        </li>
                        <li>
                        Shopping Cart
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Shop Section Start -->
    <section class="shop-section fix section-padding">
        <div class="container">
            <div class="shop-default-wrapper">
                <div class="row g-4">
                    <div class="col-xl-12">
                    
                        <div class="row">
                            <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
                             @foreach ($allcart as $allcart)
                               
                                    <div class="shop-list-items">
                                      
                                    <div class="shop-list-thumb">
                                    
                                        <img src="{{asset('storage/books_pics/' . $allcart->image)}}" alt="img" style="height:250px;">
                                    </div>
                                      <a href="{{route('deletcart',$allcart->id)}}">  <i class="fa-solid fa-xmark" style="color: rgb(0, 0, 0);font-size:30px;"></i></a>
                                    <div class="shop-list-content">
                                        <h3><a href='shop-details.html'>{{$allcart->title}}</a></h3>
                                        <h5>RS-{{$allcart->price}}</h5>
                                        <h4>QUANTITY-{{$allcart->product_qty}}</h4>
                                        <h4>TOTAL-{{$allcart->product_qty * $allcart->price}}</h4>
                                     

                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                          <h4>book type - {{$allcart->product_type}}</h4>
                                          <h4></h4>
                                        <p>
                                          {{$allcart->description}}
                                        <div class="shop-btn">
                           <a class="theme-btn"
   href="{{ route('checkout_book', [$allcart->book_id, $allcart->id]) }}">
   Checkout
</a>
                                            <ul class="shop-icon d-flex justify-content-center align-items-center">
                                                <li>
                                                    <a href='shop-cart.html'><i class="far fa-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href='shop-cart.html'>
                                                        <img class="icon" src="{{asset('user/assets/img/icon/shuffle.svg')}}"
                                                            alt="svg-icon">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href='shop-details.html'><i class="far fa-eye"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                             @endforeach
                              
                            </div>
                        </div>
                        <div class="page-nav-wrap text-center">
                            <ul>
                                <li><a class='previous' href='shop-list.html'>Previous</a></li>
                                <li><a class='page-numbers' href='shop-list.html'>1</a></li>
                                <li><a class='page-numbers' href='shop-list.html'>2</a></li>
                                <li><a class='page-numbers' href='shop-list.html'>3</a></li>
                                <li><a class='page-numbers' href='shop-list.html'>...</a></li>
                                <li><a class='next' href='shop-list.html'>Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
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
