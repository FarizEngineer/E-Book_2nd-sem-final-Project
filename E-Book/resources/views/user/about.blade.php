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

    <div class="rs-about">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,400;0,500;0,600;1,500&family=Public+Sans:wght@400;500;600;700&display=swap');

        .rs-about{
            --rs-paper:#F6F1E4;
            --rs-paper-deep:#EDE4CC;
            --rs-ink:#1F3A2E;
            --rs-ink-deep:#142920;
            --rs-brass:#B0873E;
            --rs-burgundy:#7A2E2E;
            --rs-text:#3A342A;
            --rs-cream:#F3ECDA;
            font-family:'Public Sans',sans-serif;
            color:var(--rs-text);
            background:var(--rs-paper);
        }
        .rs-about h1,.rs-about h2,.rs-about h3{
            font-family:'Newsreader',serif;
            font-weight:500;
            color:var(--rs-ink-deep);
            letter-spacing:-0.01em;
            margin:0;
        }
        .rs-about a{ text-decoration:none; }
        .rs-about a:focus-visible,
        .rs-about button:focus-visible{ outline:2px solid var(--rs-brass); outline-offset:3px; }
        @media (prefers-reduced-motion: reduce){
            .rs-about *{ animation:none !important; transition:none !important; }
        }

        /* Breadcrumb */
        .rs-breadcrumb{ position:relative; }
        .rs-breadcrumb::before{
            content:''; position:absolute; inset:0;
            background:linear-gradient(180deg, rgba(20,41,32,.78), rgba(20,41,32,.6));
        }
        .rs-breadcrumb .container{ position:relative; z-index:1; }
        .rs-breadcrumb h1{ color:var(--rs-cream); font-style:italic; font-size:clamp(2.1rem,4vw,3rem); }
        .rs-breadcrumb .breadcrumb-items li{ color:var(--rs-cream); opacity:.8; font-family:'Public Sans',sans-serif; }
        .rs-breadcrumb .breadcrumb-items a{ color:var(--rs-cream); }
        .rs-breadcrumb .breadcrumb-items a:hover{ color:var(--rs-brass); }

        /* Hero */
        .rs-hero{ padding:6rem 0; overflow:hidden; }
        .rs-hero .rs-hero-grid{ display:grid; grid-template-columns:1.05fr .95fr; gap:4.5rem; align-items:center; }
        .rs-hero h2{ font-size:clamp(2.1rem,3.4vw,3.1rem); line-height:1.14; max-width:14ch; }
        .rs-hero p{ font-size:1.05rem; line-height:1.75; max-width:52ch; margin-top:1.75rem; color:var(--rs-text); }
        .rs-hero-link{
            display:inline-flex; align-items:center; gap:.6rem; margin-top:2rem;
            font-family:'Newsreader',serif; font-style:italic; font-size:1.15rem; color:var(--rs-ink-deep);
            border-bottom:1px solid var(--rs-brass); padding-bottom:.15rem;
        }
        .rs-hero-link i{ color:var(--rs-brass); font-size:.85rem; }
        .rs-hero-link:hover{ color:var(--rs-brass); }

        .rs-hero-media{ position:relative; }
        .rs-hero-media::before,.rs-hero-media::after{
            content:''; position:absolute; inset:0; border-radius:6px;
        }
        .rs-hero-media::before{ background:var(--rs-paper-deep); transform:translate(16px,16px); }
        .rs-hero-media::after{ background:var(--rs-ink); opacity:.12; transform:translate(8px,8px); }
        .rs-hero-media .about-image{ position:relative; z-index:1; margin:0; }
        .rs-hero-media img{ position:relative; z-index:1; border-radius:6px; display:block; width:100%; }
        .rs-hero-media .video-box{ z-index:2; }

        /* Pillars */
        .rs-pillars{ background:var(--rs-paper-deep); padding:5.5rem 0; }
        .rs-pillars-head{ max-width:46ch; margin-bottom:3rem; }
        .rs-pillars-head h2{ font-size:clamp(1.8rem,2.8vw,2.4rem); }
        .rs-pillars-head p{ margin-top:1rem; font-size:1rem; line-height:1.7; color:var(--rs-text); }
        .rs-pillars-grid{ display:grid; grid-template-columns:repeat(3,1fr); gap:3rem; }
        .rs-pillar-icon{
            width:52px; height:52px; border-radius:50%; display:flex; align-items:center; justify-content:center;
            font-size:1.15rem; margin-bottom:1.4rem;
        }
        .rs-pillar:nth-child(1) .rs-pillar-icon{ background:rgba(31,58,46,.1); color:var(--rs-ink); }
        .rs-pillar:nth-child(2) .rs-pillar-icon{ background:rgba(176,135,62,.16); color:var(--rs-brass); }
        .rs-pillar:nth-child(3) .rs-pillar-icon{ background:rgba(122,46,46,.12); color:var(--rs-burgundy); }
        .rs-pillar h3{ font-size:1.35rem; margin-bottom:.6rem; }
        .rs-pillar p{ font-size:.98rem; line-height:1.65; color:var(--rs-text); max-width:32ch; }

        /* CTA */
        .rs-cta{ background:var(--rs-ink-deep); padding:5.5rem 0; text-align:center; position:relative; }
        .rs-cta::before{
            content:''; position:absolute; inset:0;
            background:radial-gradient(60% 120% at 50% 0%, rgba(176,135,62,.16), transparent 70%);
        }
        .rs-cta-inner{ position:relative; z-index:1; }
        .rs-cta span{ display:block; color:var(--rs-brass); font-family:'Public Sans',sans-serif; font-size:.95rem; margin-bottom:1rem; }
        .rs-cta h2{ color:var(--rs-cream); font-style:italic; font-size:clamp(1.9rem,3.4vw,2.7rem); max-width:18ch; margin:0 auto 2.2rem; line-height:1.2; }
        .rs-cta-btn{
            display:inline-flex; align-items:center; gap:.7rem; background:var(--rs-brass); color:var(--rs-ink-deep);
            font-family:'Public Sans',sans-serif; font-weight:600; padding:.95rem 2.1rem; border-radius:3px;
        }
        .rs-cta-btn:hover{ background:var(--rs-cream); color:var(--rs-ink-deep); }

        /* Testimonials */
        .rs-testimonials{ padding:6rem 0; }
        .rs-testimonials-head{ max-width:50ch; margin:0 auto 3rem; text-align:center; }
        .rs-testimonials-head h2{ font-size:clamp(1.8rem,2.8vw,2.4rem); }
        .rs-testimonials-head p{ margin-top:.9rem; color:var(--rs-text); line-height:1.65; }
        .rs-about .testimonial-card-items{
            background:var(--rs-cream); border-radius:6px; padding:2.6rem 2.2rem 2rem; position:relative; box-shadow:none;
        }
        .rs-about .testimonial-card-items::before{
            content:'\201C'; position:absolute; top:.6rem; left:1.4rem;
            font-family:'Newsreader',serif; font-size:4rem; color:var(--rs-brass); opacity:.55; line-height:1;
        }
        .rs-about .testimonial-card-items > p{ font-family:'Newsreader',serif; font-size:1.08rem; line-height:1.65; color:var(--rs-ink-deep); position:relative; z-index:1; }
        .rs-about .client-info h3{ font-size:1.05rem; }
        .rs-about .client-info span{ font-family:'Public Sans',sans-serif; font-size:.88rem; color:var(--rs-text); opacity:.75; }
        .rs-about .star i{ color:var(--rs-brass); font-size:.8rem; }

        /* Team */
        .rs-team{ background:var(--rs-paper-deep); padding-top:5.5rem; padding-bottom:5.5rem; }
        .rs-team .section-title p{ color:var(--rs-text); }
        .rs-about .team-image .thumb{ border-radius:50%; overflow:hidden; width:110px; height:110px; margin:0 auto; border:3px solid var(--ring,var(--rs-ink)); }
        .rs-about .team-image .thumb img{ width:100%; height:100%; object-fit:cover; }
        .rs-about .team-image .shape-img{ display:none; }
        .rs-about .team-slider .swiper-slide:nth-child(3n+1) .thumb{ --ring:var(--rs-ink); }
        .rs-about .team-slider .swiper-slide:nth-child(3n+2) .thumb{ --ring:var(--rs-brass); }
        .rs-about .team-slider .swiper-slide:nth-child(3n+3) .thumb{ --ring:var(--rs-burgundy); }
        .rs-about .team-content{ margin-top:1.1rem; }
        .rs-about .team-content h6 a{ font-family:'Newsreader',serif; font-size:1.1rem; color:var(--rs-ink-deep); }
        .rs-about .team-content p{ font-size:.9rem; color:var(--rs-text); opacity:.8; margin-top:.2rem; }
        .rs-about .array-prev,.rs-about .array-next{ border:1px solid var(--rs-ink); color:var(--rs-ink); background:transparent; }
        .rs-about .array-prev:hover,.rs-about .array-next:hover{ background:var(--rs-ink); color:var(--rs-cream); }

        @media (max-width:991px){
            .rs-hero .rs-hero-grid{ grid-template-columns:1fr; }
            .rs-pillars-grid{ grid-template-columns:1fr; gap:2.5rem; }
        }
    </style>

    <!-- Breadcumb Section Start -->
    <div class="breadcrumb-wrapper bg-cover section-padding rs-breadcrumb"
        style="background-image: url({{asset('user/assets/img/hero/breadcrumb-bg.jpg);')}}">
        <div class="container">
            <div class="page-heading">
                <h1>About Us</h1>
                <div class="page-header">
                    <ul class="breadcrumb-items" data-wow-delay=".3s">
                        <li>
                            <a href='index.html'>
                                Home
                            </a>
                        </li>
                        <li>
                            <i class="fa-solid fa-chevron-right"></i>
                        </li>
                        <li>
                            About Us
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section Start -->
    <section class="rs-hero fix">
        <div class="container">
            <div class="rs-hero-grid">
                <div class="wow fadeInUp" data-wow-delay=".3s">
                    <h2>A library that grows with everyone who opens it.</h2>
                    <p>
                        ReadSphere is where readers go to find their next favorite book, and where writers go
                        to be found. Novels, comics, journals, quizzes, and general knowledge sit side by side
                        with the people who make them — a shelf that's always being added to.
                    </p>
                    <a class="rs-hero-link" href="about.html">Learn more <i class="fa-regular fa-arrow-right"></i></a>
                </div>
                <div class="rs-hero-media">
                    <div class="about-image">
                        <img src="{{asset('user/assets/img/about.jpg')}}" alt="img">
                        <div class="video-box">
                            <a href="" class="video-btn ripple video-popup">
                                <i class="fa-solid fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pillars Section Start -->
    <section class="rs-pillars">
        <div class="container">
            <div class="rs-pillars-head">
                <h2>Three ideas, one shelf</h2>
                <p>Everything on ReadSphere is built around helping readers find great books, helping authors
                    find their readers, and giving writers a reason to finish what they started.</p>
            </div>
            <div class="rs-pillars-grid">
                <div class="rs-pillar">
                    <div class="rs-pillar-icon"><i class="fa-solid fa-book-open"></i></div>
                    <h3>Discover</h3>
                    <p>Explore genres, follow authors, and fill your library with novels, comics, journals, and more, all in one place.</p>
                </div>
                <div class="rs-pillar">
                    <div class="rs-pillar-icon"><i class="fa-solid fa-pen-nib"></i></div>
                    <h3>Support Authors</h3>
                    <p>Every purchase helps writers, new and established, reach readers who are genuinely looking for their work.</p>
                </div>
                <div class="rs-pillar">
                    <div class="rs-pillar-icon"><i class="fa-solid fa-trophy"></i></div>
                    <h3>Encourage Creativity</h3>
                    <p>Enter essay and story competitions, put your writing in front of real readers, and compete for recognition and prizes.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Cta Banner Section Start -->
    <section class="rs-cta fix">
        <div class="container">
            <div class="rs-cta-inner">
                <span>Discover ReadSphere</span>
                <h2>Your next chapter starts here.</h2>
                <a class="rs-cta-btn" href="shop.html">Browse Books <i class="fa-solid fa-arrow-right-long"></i></a>
            </div>
        </div>
    </section>

    <!-- Testimonial Section Start -->
    <section class="rs-testimonials fix">
        <div class="container">
            <div class="rs-testimonials-head">
                <h2>What our readers say</h2>
                <p>Real feedback from the readers, writers, and book lovers who make up the ReadSphere community.</p>
            </div>
            <div class="swiper testimonial-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <p>
                                ReadSphere completely changed the way I discover books. I can explore new authors,
                                add titles to my cart in seconds, and my whole library is right there whenever I
                                want to read.
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
                                        <span>Avid Reader</span>
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
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
                                Publishing my first story collection on ReadSphere gave me the confidence to put
                                my work in front of real readers. The response from the community has been
                                incredible.
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
                                        <span>Independent Author</span>
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
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
                                I love how easy it is to find something new on ReadSphere, from comics to
                                journals to quizzes. There's always another book waiting to be discovered.
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
                                        <h3>Courtney Henry</h3>
                                        <span>Book Blogger</span>
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
                                Entering a ReadSphere writing competition pushed me to finally finish a story
                                I'd been sitting on for years. Winning was just the icing on the cake.
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
                                        <h3>Guy Hawkins</h3>
                                        <span>Competition Winner</span>
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
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

    <!-- Team Section Start -->
    <section class="rs-team fix margin-bottom-30">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="mb-3">Featured Author</h2>
                <p>Meet a few of the talented writers sharing their work with the ReadSphere community.</p>
            </div>
            <div class="array-button">
                <button class="array-prev"><i class="fal fa-arrow-left"></i></button>
                <button class="array-next"><i class="fal fa-arrow-right"></i></button>
            </div>
            <div class="swiper team-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="team-box-items">
                            <div class="team-image">
                                <div class="thumb">
                                    <img src="{{asset('user/assets/img/team/01.jpg')}}" alt="img">
                                </div>
                                <div class="shape-img">
                                    <img src="{{asset('user/assets/img/team/shape-img.png')}}" alt="img">
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h6><a href='team-details.html'>Esther Howard</a></h6>
                                <p>10 Published Books</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-box-items">
                            <div class="team-image">
                                <div class="thumb">
                                    <img src="{{asset('user/assets/img/team/02.jpg')}}" alt="img">
                                </div>
                                <div class="shape-img">
                                    <img src="{{asset('user/assets/img/team/shape-img.png')}}" alt="img">
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h6><a href='team-details.html'>Shikhon Islam</a></h6>
                                <p>07 Published Books</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-box-items">
                            <div class="team-image">
                                <div class="thumb">
                                    <img src="{{asset('user/assets/img/team/03.jpg')}}" alt="img">
                                </div>
                                <div class="shape-img">
                                    <img src="{{asset('user/assets/img/team/shape-img.png')}}" alt="img">
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h6><a href='team-details.html'>Kawser Ahmed</a></h6>
                                <p>04 Published Books</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-box-items">
                            <div class="team-image">
                                <div class="thumb">
                                    <img src="{{asset('user/assets/img/team/04.jpg')}}" alt="img">
                                </div>
                                <div class="shape-img">
                                    <img src="{{asset('user/assets/img/team/shape-img.png')}}" alt="img">
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h6><a href='team-details.html'>Brooklyn Simmons</a></h6>
                                <p>15 Published Books</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-box-items">
                            <div class="team-image">
                                <div class="thumb">
                                    <img src="{{asset('user/assets/img/team/05.jpg')}}" alt="img">
                                </div>
                                <div class="shape-img">
                                    <img src="{{asset('user/assets/img/team/shape-img.png')}}" alt="img">
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h6><a href='team-details.html'>Leslie Alexander</a></h6>
                                <p>05 Published Books</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-box-items">
                            <div class="team-image">
                                <div class="thumb">
                                    <img src="{{asset('user/assets/img/team/06.jpg')}}" alt="img">
                                </div>
                                <div class="shape-img">
                                    <img src="{{asset('user/assets/img/team/shape-img.png')}}" alt="img">
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h6><a href='team-details.html'>Guy Hawkins</a></h6>
                                <p>12 Published Books</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>

@endsection