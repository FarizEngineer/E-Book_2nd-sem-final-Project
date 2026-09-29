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
                <h1>Shop Default</h1>
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
                            Shop Default
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
                <div class="row">
                    <div class="col-12">
                        <div class="woocommerce-notices-wrapper wow fadeInUp" data-wow-delay=".3s">
                            <p>Showing 1-3 Of 34 Results </p>
                            <div class="form-clt">
                                <div class="nice-select" tabindex="0">
                                    <span class="current">
                                        Default Sorting
                                    </span>
                                    <ul class="list">
                                        <li data-value="1" class="option selected focus">
                                            Default sorting
                                        </li>
                                        <li data-value="1" class="option">
                                            Sort by popularity
                                        </li>
                                        <li data-value="1" class="option">
                                            Sort by average rating
                                        </li>
                                        <li data-value="1" class="option">
                                            Sort by latest
                                        </li>
                                    </ul>
                                </div>
                                <div class="icon">
                                    <a href='shop-list.html'><i class="fas fa-list"></i></a>
                                </div>
                                <div class="icon-2 active">
                                    <a href='shop.html'><i class="fa-sharp fa-regular fa-grid-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 order-2 order-md-1 wow fadeInUp" data-wow-delay=".3s">
                        <div class="main-sidebar">
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h5>Search</h5>
                                </div>
                                <form action="#" class="search-toggle-box">
                                    <div class="input-area search-container">
                                        <input class="search-input" type="text" placeholder="Search here">
                                        <button class="cmn-btn search-icon">
                                            <i class="far fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h5>Categories</h5>
                                </div>
                                <div class="categories-list">
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-arts-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-arts" type="button" role="tab"
                                                aria-controls="pills-arts" aria-selected="true">
                                            HISTORY</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-Biographies-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-Biographies" type="button" role="tab"
                                                aria-controls="pills-Biographies" aria-selected="false">
                                                ARTS</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-ChristianBooks-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-ChristianBooks" type="button" role="tab"
                                                aria-controls="pills-ChristianBooks" aria-selected="false">Christian
                                                UNIVERSE</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-ResearchPublishing-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-ResearchPublishing"
                                                type="button" role="tab" aria-controls="pills-ResearchPublishing"
                                                aria-selected="false">SCIENCE</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-SportsOutdoors-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-SportsOutdoors" type="button" role="tab"
                                                aria-controls="pills-SportsOutdoors" aria-selected="false">Sports &
                                                Outdoors</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-FoodDrink-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-FoodDrink" type="button" role="tab"
                                                aria-controls="pills-FoodDrink" aria-selected="false">Food &
                                                Drink</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h5>Product Status</h5>
                                </div>
                                <div class="product-status">
                                    <div class="product-status_stock  gap-6 d-flex align-items-center">
                                        <div class="nice-select category" tabindex="0"><span class="current">
                                                In Stock
                                            </span>
                                            <ul class="list">
                                                <li data-value="1" class="option selected">
                                                    In Stock
                                                </li>
                                                <li data-value="1" class="option">
                                                    Castle In The Sky
                                                </li>
                                                <li data-value="1" class="option">
                                                    The Hidden Mystery Behind
                                                </li>
                                                <li data-value="1" class="option">
                                                    Flovely And Unicom Erna
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-status_sale gap-6 d-flex align-items-center">
                                        <div class="nice-select category" tabindex="0">
                                            <span class="current">
                                                On Sale
                                            </span>
                                            <ul class="list">
                                                <li data-value="1" class="option selected">
                                                    On Sale
                                                </li>
                                                <li data-value="1" class="option">
                                                    Flovely And Unicom Erna
                                                </li>
                                                <li data-value="1" class="option">
                                                    Castle In The Sky
                                                </li>
                                                <li data-value="1" class="option">
                                                    How Deal With Very Bad BOOK
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="single-sidebar-widget mb-50">
                                <div class="wid-title">
                                    <h5>Filter By Price</h5>
                                </div>
                                <div class="range__barcustom">
                                    <div class="slider">
                                        <div class="progress" style="left: 15.29%; right: 58.9%;"></div>
                                    </div>
                                    <div class="range-input">
                                        <input type="range" class="range-min" min="0" max="10000" value="2500">
                                        <input type="range" class="range-max" min="100" max="10000" value="7500">
                                    </div>
                                    <div class="range-items">
                                        <div class="price-input">
                                            <div class="d-flex align-items-center">
                                                <a href="shop-left-sidebar.html" class="filter-btn mt-2 me-3">Filter</a>
                                                <div class="field">
                                                    <span>Price:</span>
                                                </div>
                                                <div class="field">
                                                    <span>$</span>
                                                    <input type="number" class="input-min" value="100">
                                                </div>
                                                <div class="separators">-</div>
                                                <div class="field">
                                                    <span>$</span>
                                                    <input type="number" class="input-max" value="1000">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-sidebar-widget mb-0">
                                <div class="wid-title">
                                    <h5>By Review</h5>
                                </div>
                                <div class="categories-list">
                                    <label class="checkbox-single d-flex align-items-center">
                                        <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                            <span class="checkbox-area d-center">
                                                <input type="checkbox">
                                                <span class="checkmark d-center"></span>
                                            </span>
                                            <span class="text-color">
                                                <span class="star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </span>
                                                35
                                            </span>
                                        </span>
                                    </label>
                                    <label class="checkbox-single d-flex align-items-center">
                                        <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                            <span class="checkbox-area d-center">
                                                <input type="checkbox">
                                                <span class="checkmark d-center"></span>
                                            </span>
                                            <span class="text-color">
                                                <span class="star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-light fa-star"></i>
                                                </span>
                                                24
                                            </span>
                                        </span>
                                    </label>
                                    <label class="checkbox-single d-flex align-items-center">
                                        <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                            <span class="checkbox-area d-center">
                                                <input type="checkbox">
                                                <span class="checkmark d-center"></span>
                                            </span>
                                            <span class="text-color">
                                                <span class="star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-light fa-star"></i>
                                                    <i class="fa-sharp fa-light fa-star"></i>
                                                </span>
                                                15
                                            </span>
                                        </span>
                                    </label>
                                    <label class="checkbox-single d-flex align-items-center">
                                        <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                            <span class="checkbox-area d-center">
                                                <input type="checkbox">
                                                <span class="checkmark d-center"></span>
                                            </span>
                                            <span class="text-color">
                                                <span class="star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-light fa-star"></i>
                                                    <i class="fa-sharp fa-light fa-star"></i>
                                                    <i class="fa-sharp fa-light fa-star"></i>
                                                </span>
                                                2
                                            </span>
                                        </span>
                                    </label>
                                    <label class="checkbox-single d-flex align-items-center">
                                        <span class="d-flex gap-xl-3 gap-2 align-items-center">
                                            <span class="checkbox-area d-center">
                                                <input type="checkbox">
                                                <span class="checkmark d-center"></span>
                                            </span>
                                            <span class="text-color">
                                                <span class="star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-sharp fa-light fa-star"></i>
                                                    <i class="fa-sharp fa-light fa-star"></i>
                                                    <i class="fa-sharp fa-light fa-star"></i>
                                                    <i class="fa-sharp fa-light fa-star"></i>
                                                </span>
                                                1
                                            </span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 order-1 order-md-2">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-arts" role="tabpanel"
                                aria-labelledby="pills-arts-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href='shop-details.html'><img src="{{asset('user/assets/img/book/01.png')}}"
                                                        alt="img"></a>
                                                <ul class="post-box">
                                                    <li>
                                                        Hot
                                                    </li>
                                                    <li>
                                                        -30%
                                                    </li>
                                                </ul>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
                                                    <li>
                                                        <a href='shop-cart.html'><i class="far fa-heart"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href='shop-cart.html'>
                                                            <img class="icon" src="{{asset('user/assets/img/icon/shuffle.svg')}}')}}"
                                                                alt="svg-icon">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href='shop-details.html'><i class="far fa-eye"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Simple Things You Save BOOK</a></h3>
                                                <ul class="price-list">
                                                    <li>$30.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/02.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>How Deal With Very Bad BOOK</a></h3>
                                                <ul class="price-list">
                                                    <li>$39.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/03.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>The Hidden Mystery Behind</a></h3>
                                                <ul class="price-list">
                                                    <li>
                                                        $30.00
                                                        <del>$39.99</del>
                                                    </li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/04.png')}}" alt="img"></a>
                                                <ul class="post-box">
                                                    <li class="style-2">
                                                        -12%
                                                    </li>
                                                </ul>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Qple GPad With Retina Sisplay</a></h3>
                                                <ul class="price-list">
                                                    <li>$39.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/05.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Flovely and Unicom Erna</a></h3>
                                                <ul class="price-list">
                                                    <li>$19.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/04.png')}}" alt="img"></a>
                                                <ul class="post-box">
                                                    <li class="style-2">
                                                        -12%
                                                    </li>
                                                </ul>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Qple GPad With Retina Sisplay</a></h3>
                                                <ul class="price-list">
                                                    <li>$39.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/02.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>How Deal With Very Bad BOOK</a></h3>
                                                <ul class="price-list">
                                                    <li>$39.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/06.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Castle In The Sky</a></h3>
                                                <ul class="price-list">
                                                    <li>$16.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/06.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Castle In The Sky</a></h3>
                                                <ul class="price-list">
                                                    <li>$16.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/02.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>How Deal With Very Bad BOOK</a></h3>
                                                <ul class="price-list">
                                                    <li>$39.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/03.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>The Hidden Mystery Behind</a></h3>
                                                <ul class="price-list">
                                                    <li>$30.00 <del>$39.99</del></li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/05.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Flovely and Unicom Erna</a></h3>
                                                <ul class="price-list">
                                                    <li>$19.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-Biographies" role="tabpanel"
                                aria-labelledby="pills-Biographies-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/01.png')}}" alt="img"></a>
                                                <ul class="post-box">
                                                    <li>
                                                        Hot
                                                    </li>
                                                    <li>
                                                        -30%
                                                    </li>
                                                </ul>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Simple Things You Save BOOK</a></h3>
                                                <ul class="price-list">
                                                    <li>$30.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/02.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>How Deal With Very Bad BOOK</a></h3>
                                                <ul class="price-list">
                                                    <li>$39.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/03.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>The Hidden Mystery Behind</a></h3>
                                                <ul class="price-list">
                                                    <li>
                                                        $30.00
                                                        <del>$39.99</del>
                                                    </li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/04.png')}}" alt="img"></a>
                                                <ul class="post-box">
                                                    <li class="style-2">
                                                        -12%
                                                    </li>
                                                </ul>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Qple GPad With Retina Sisplay</a></h3>
                                                <ul class="price-list">
                                                    <li>$39.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/05.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Flovely and Unicom Erna</a></h3>
                                                <ul class="price-list">
                                                    <li>$19.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/04.png')}}" alt="img"></a>
                                                <ul class="post-box">
                                                    <li class="style-2">
                                                        -12%
                                                    </li>
                                                </ul>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Qple GPad With Retina Sisplay</a></h3>
                                                <ul class="price-list">
                                                    <li>$39.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/02.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>How Deal With Very Bad BOOK</a></h3>
                                                <ul class="price-list">
                                                    <li>$39.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/06.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Castle In The Sky</a></h3>
                                                <ul class="price-list">
                                                    <li>$16.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/06.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Castle In The Sky</a></h3>
                                                <ul class="price-list">
                                                    <li>$16.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/02.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
                                                    <li>
                                                        <a href='shop-cart.html'><i class="far fa-heart"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href='shop-cart.html'>
                                                            <img class="icon" src="{{asset('user/assets/img/icon/shuffle.svg')}}')}}"
                                                                alt="svg-icon">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href='shop-details.html'><i class="far fa-eye"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>How Deal With Very Bad BOOK</a></h3>
                                                <ul class="price-list">
                                                    <li>$39.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/03.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>The Hidden Mystery Behind</a></h3>
                                                <ul class="price-list">
                                                    <li>$30.00 <del>$39.99</del></li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/05.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Flovely and Unicom Erna</a></h3>
                                                <ul class="price-list">
                                                    <li>$19.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-ChristianBooks" role="tabpanel"
                                aria-labelledby="pills-ChristianBooks-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/01.png')}}" alt="img"></a>
                                                <ul class="post-box">
                                                    <li>
                                                        Hot
                                                    </li>
                                                    <li>
                                                        -30%
                                                    </li>
                                                </ul>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Simple Things You Save BOOK</a></h3>
                                                <ul class="price-list">
                                                    <li>$30.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/02.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>How Deal With Very Bad BOOK</a></h3>
                                                <ul class="price-list">
                                                    <li>$39.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/03.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>The Hidden Mystery Behind</a></h3>
                                                <ul class="price-list">
                                                    <li>
                                                        $30.00
                                                        <del>$39.99</del>
                                                    </li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/04.png')}}" alt="img"></a>
                                                <ul class="post-box">
                                                    <li class="style-2">
                                                        -12%
                                                    </li>
                                                </ul>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Qple GPad With Retina Sisplay</a></h3>
                                                <ul class="price-list">
                                                    <li>$39.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/05.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Flovely and Unicom Erna</a></h3>
                                                <ul class="price-list">
                                                    <li>$19.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/04.png')}}" alt="img"></a>
                                                <ul class="post-box">
                                                    <li class="style-2">
                                                        -12%
                                                    </li>
                                                </ul>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Qple GPad With Retina Sisplay</a></h3>
                                                <ul class="price-list">
                                                    <li>$39.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/02.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>How Deal With Very Bad BOOK</a></h3>
                                                <ul class="price-list">
                                                    <li>$39.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/06.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Castle In The Sky</a></h3>
                                                <ul class="price-list">
                                                    <li>$16.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/06.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Castle In The Sky</a></h3>
                                                <ul class="price-list">
                                                    <li>$16.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/02.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>How Deal With Very Bad BOOK</a></h3>
                                                <ul class="price-list">
                                                    <li>$39.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/03.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>The Hidden Mystery Behind</a></h3>
                                                <ul class="price-list">
                                                    <li>$30.00 <del>$39.99</del></li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/05.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Flovely and Unicom Erna</a></h3>
                                                <ul class="price-list">
                                                    <li>$19.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="pills-ResearchPublishing" role="tabpanel"
                                aria-labelledby="pills-ResearchPublishing-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/01.png')}}" alt="img"></a>
                                                <ul class="post-box">
                                                    <li>
                                                        Hot
                                                    </li>
                                                    <li>
                                                        -30%
                                                    </li>
                                                </ul>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Simple Things You Save BOOK</a></h3>
                                                <ul class="price-list">
                                                    <li>$30.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/02.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>How Deal With Very Bad BOOK</a></h3>
                                                <ul class="price-list">
                                                    <li>$39.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/03.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>The Hidden Mystery Behind</a></h3>
                                                <ul class="price-list">
                                                    <li>
                                                        $30.00
                                                        <del>$39.99</del>
                                                    </li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/04.png')}}" alt="img"></a>
                                                <ul class="post-box">
                                                    <li class="style-2">
                                                        -12%
                                                    </li>
                                                </ul>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Qple GPad With Retina Sisplay</a></h3>
                                                <ul class="price-list">
                                                    <li>$39.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/05.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Flovely and Unicom Erna</a></h3>
                                                <ul class="price-list">
                                                    <li>$19.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/04.png')}}" alt="img"></a>
                                                <ul class="post-box">
                                                    <li class="style-2">
                                                        -12%
                                                    </li>
                                                </ul>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Qple GPad With Retina Sisplay</a></h3>
                                                <ul class="price-list">
                                                    <li>$39.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/02.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>How Deal With Very Bad BOOK</a></h3>
                                                <ul class="price-list">
                                                    <li>$39.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/06.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Castle In The Sky</a></h3>
                                                <ul class="price-list">
                                                    <li>$16.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/06.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Castle In The Sky</a></h3>
                                                <ul class="price-list">
                                                    <li>$16.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/02.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>How Deal With Very Bad BOOK</a></h3>
                                                <ul class="price-list">
                                                    <li>$39.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/03.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>The Hidden Mystery Behind</a></h3>
                                                <ul class="price-list">
                                                    <li>$30.00 <del>$39.99</del></li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/05.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Flovely and Unicom Erna</a></h3>
                                                <ul class="price-list">
                                                    <li>$19.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-SportsOutdoors" role="tabpanel"
                                aria-labelledby="pills-SportsOutdoors-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/01.png')}}" alt="img"></a>
                                                <ul class="post-box">
                                                    <li>
                                                        Hot
                                                    </li>
                                                    <li>
                                                        -30%
                                                    </li>
                                                </ul>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Simple Things You Save BOOK</a></h3>
                                                <ul class="price-list">
                                                    <li>$30.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/02.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>How Deal With Very Bad BOOK</a></h3>
                                                <ul class="price-list">
                                                    <li>$39.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/03.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>The Hidden Mystery Behind</a></h3>
                                                <ul class="price-list">
                                                    <li>
                                                        $30.00
                                                        <del>$39.99</del>
                                                    </li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/04.png')}}" alt="img"></a>
                                                <ul class="post-box">
                                                    <li class="style-2">
                                                        -12%
                                                    </li>
                                                </ul>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Qple GPad With Retina Sisplay</a></h3>
                                                <ul class="price-list">
                                                    <li>$39.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/05.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Flovely and Unicom Erna</a></h3>
                                                <ul class="price-list">
                                                    <li>$19.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/04.png')}}" alt="img"></a>
                                                <ul class="post-box">
                                                    <li class="style-2">
                                                        -12%
                                                    </li>
                                                </ul>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Qple GPad With Retina Sisplay</a></h3>
                                                <ul class="price-list">
                                                    <li>$39.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/02.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>How Deal With Very Bad BOOK</a></h3>
                                                <ul class="price-list">
                                                    <li>$39.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/06.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Castle In The Sky</a></h3>
                                                <ul class="price-list">
                                                    <li>$16.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/06.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Castle In The Sky</a></h3>
                                                <ul class="price-list">
                                                    <li>$16.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/02.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>How Deal With Very Bad BOOK</a></h3>
                                                <ul class="price-list">
                                                    <li>$39.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/03.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>The Hidden Mystery Behind</a></h3>
                                                <ul class="price-list">
                                                    <li>$30.00 <del>$39.99</del></li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/05.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Flovely and Unicom Erna</a></h3>
                                                <ul class="price-list">
                                                    <li>$19.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-FoodDrink" role="tabpanel"
                                aria-labelledby="pills-FoodDrink-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/01.png')}}" alt="img"></a>
                                                <ul class="post-box">
                                                    <li>
                                                        Hot
                                                    </li>
                                                    <li>
                                                        -30%
                                                    </li>
                                                </ul>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Simple Things You Save BOOK</a></h3>
                                                <ul class="price-list">
                                                    <li>$30.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/02.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>How Deal With Very Bad BOOK</a></h3>
                                                <ul class="price-list">
                                                    <li>$39.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/03.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>The Hidden Mystery Behind</a></h3>
                                                <ul class="price-list">
                                                    <li>
                                                        $30.00
                                                        <del>$39.99</del>
                                                    </li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/04.png')}}" alt="img"></a>
                                                <ul class="post-box">
                                                    <li class="style-2">
                                                        -12%
                                                    </li>
                                                </ul>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Qple GPad With Retina Sisplay</a></h3>
                                                <ul class="price-list">
                                                    <li>$39.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/05.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Flovely and Unicom Erna</a></h3>
                                                <ul class="price-list">
                                                    <li>$19.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/04.png')}}" alt="img"></a>
                                                <ul class="post-box">
                                                    <li class="style-2">
                                                        -12%
                                                    </li>
                                                </ul>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Qple GPad With Retina Sisplay</a></h3>
                                                <ul class="price-list">
                                                    <li>$39.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/02.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>How Deal With Very Bad BOOK</a></h3>
                                                <ul class="price-list">
                                                    <li>$39.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/06.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Castle In The Sky</a></h3>
                                                <ul class="price-list">
                                                    <li>$16.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/06.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Castle In The Sky</a></h3>
                                                <ul class="price-list">
                                                    <li>$16.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/02.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>How Deal With Very Bad BOOK</a></h3>
                                                <ul class="price-list">
                                                    <li>$39.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/03.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>The Hidden Mystery Behind</a></h3>
                                                <ul class="price-list">
                                                    <li>$30.00 <del>$39.99</del></li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="shop-details.html"><img src="{{asset('user/assets/img/book/05.png')}}" alt="img"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
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
                                            <div class="shop-content">
                                                <h3><a href='shop-details.html'>Flovely and Unicom Erna</a></h3>
                                                <ul class="price-list">
                                                    <li>$19.00</li>
                                                    <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li>
                                                </ul>
                                                <div class="shop-button">
                                                    <a class='theme-btn' href='shop-details.html'>Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-nav-wrap text-center">
                            <ul>
                                <li><a class='previous' href='shop.html'>Previous</a></li>
                                <li><a class='page-numbers' href='shop.html'>1</a></li>
                                <li><a class='page-numbers' href='shop.html'>2</a></li>
                                <li><a class='page-numbers' href='shop.html'>3</a></li>
                                <li><a class='page-numbers' href='shop.html'>...</a></li>
                                <li><a class='next' href='shop.html'>Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

    