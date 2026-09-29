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
    <title>E-Book error page</title>
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
    <link rel="stylesheet" href="{{asset('assets/admin/user/errorpage.css')}}">
   </head>
<body>
    


<!-- Sidebar Area -->
<div id="targetElement" class="side_bar slideInRight side_bar_hidden">

    <div class="side_bar_overlay"></div>

    <div class="cart-title mb-50">
        <h4>Log in</h4>
    </div>

    <div class="login-sidebar">

        <form action="#" id="contact-form" method="POST">

            <div class="mb-3">
                <input type="email"
                       name="email"
                       class="form-control"
                       placeholder="Email Address">
            </div>

            <div class="mb-3">
                <input type="password"
                       name="password"
                       class="form-control"
                       placeholder="Password">
            </div>

            <button type="submit" class="theme-btn style-2 w-100">
                Login
            </button>

        </form>

    </div>

    <button id="closeButton" class="x-mark-icon">
        <i class="fas fa-times"></i>
    </button>

</div>


<!-- Breadcrumb -->
<div class="breadcrumb-wrapper bg-cover section-padding"
     style="background-image: url('{{ asset('user/assets/img/hero/breadcrumb-bg.jpg') }}');">

    <div class="container">

        <div class="page-heading">

            <h1>Error</h1>

            <ul class="breadcrumb-items">
                <li>
                    <a href="{{ url('/') }}">
                        Home
                    </a>
                </li>

                <li>
                    <i class="fa-solid fa-chevron-right"></i>
                </li>

                <li>
                    Error
                </li>
            </ul>

        </div>

    </div>

</div>


<!-- Universal Error Section -->
<section class="bookim-error-section section-padding fix">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-xl-8 col-lg-9 col-md-10">

                <div class="bookim-error-card wow fadeInUp"
                     data-wow-delay=".2s">

                    <!-- Error Icon -->
                    <div class="bookim-error-icon">

                        @if(isset($code) && $code == 403)

                            <i class="fa-solid fa-lock"></i>

                        @elseif(isset($code) && $code == 404)

                            <i class="fa-solid fa-magnifying-glass"></i>

                        @elseif(isset($code) && $code == 419)

                            <i class="fa-solid fa-clock"></i>

                        @elseif(isset($code) && $code == 429)

                            <i class="fa-solid fa-hourglass-half"></i>

                        @elseif(isset($code) && $code >= 500)

                            <i class="fa-solid fa-server"></i>

                        @else

                            <i class="fa-solid fa-triangle-exclamation"></i>

                        @endif

                    </div>


                    <!-- Error Code -->
                    <div class="bookim-error-code">

                        {{ $code ?? 'Error' }}

                    </div>


                    <!-- Error Title -->
                    <h2>

                        @if(isset($code) && $code == 403)

                            Access Restricted

                        @elseif(isset($code) && $code == 404)

                            Page Not Found

                        @elseif(isset($code) && $code == 419)

                            Page Expired

                        @elseif(isset($code) && $code == 429)

                            Too Many Requests

                        @elseif(isset($code) && $code >= 500)

                            Something Went Wrong

                        @else

                            Unexpected Error

                        @endif

                    </h2>


                    <!-- Error Message -->
                    <p class="bookim-error-message">

                        @if(isset($message) && $message)

                            {{ $message }}

                        @elseif(isset($code) && $code == 403)

                            You don't have permission to access this page.

                        @elseif(isset($code) && $code == 404)

                            The page you're looking for could not be found.
                            It may have been moved, deleted, or the URL may be incorrect.

                        @elseif(isset($code) && $code == 419)

                            Your session has expired.
                            Please refresh the page and try again.

                        @elseif(isset($code) && $code == 429)

                            Too many requests were made.
                            Please wait a moment and try again.

                        @elseif(isset($code) && $code >= 500)

                            We're having trouble processing your request right now.
                            Please try again shortly.

                        @else

                            An unexpected error occurred while processing your request.
                            Please try again.

                        @endif

                    </p>


                    <!-- Information Box -->
                    <div class="bookim-error-info">

                        <div class="info-icon">

                            <i class="fa-solid fa-circle-info"></i>

                        </div>

                        <div>

                            <strong>What can you do?</strong>

                            <p>
                                You can return to the previous page,
                                go back to the Bookim homepage, or try again.
                            </p>

                        </div>

                    </div>


                    <!-- Buttons -->
                    <div class="bookim-error-buttons">

                        <a href="{{ url('/') }}"
                           class="theme-btn style-2">

                            <i class="fa-solid fa-house"></i>

                            Back to Home

                        </a>


                        <a href="{{ url()->previous() }}"
                           class="bookim-back-btn">

                            <i class="fa-solid fa-arrow-left"></i>

                            Go Back

                        </a>


                        <button type="button"
                                onclick="location.reload()"
                                class="bookim-retry-btn">

                            <i class="fa-solid fa-rotate-right"></i>

                            Try Again

                        </button>

                    </div>


                    <!-- Footer -->
                    <div class="bookim-error-footer">

                        <i class="fa-solid fa-book-open"></i>

                        <span>
                            Bookim — Discover, Read & Share
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


</body>

</html>