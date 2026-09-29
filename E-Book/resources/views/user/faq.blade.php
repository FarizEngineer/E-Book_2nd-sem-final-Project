@extends('user.navbar')
@section('nav')
<!-- Sidebar Area Here -->
    <div id="targetElement" class="side_bar slideInRight side_bar_hidden">
        <div class="side_bar_overlay"></div>
        <div class="cart-title mb-50">
           
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
                <a href="#" class="facebook-text"><img src="{{asset('assets/img/facebook.png')}}" alt="img">FACEBOOK</a>
                <a href="#" class="facebook-text google-text"><img src="{{asset('assets/img/google.png')}}" alt="img">Google</a>
            </div>
            <div class="user-icon-box">
                <img src="{{asset('assets/img/user.png')}}" alt="img">
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
                <h1>Faqs</h1>
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
                            Faq
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--<< Faq Section Start >>-->
    <section class="faq-section fix section-padding">
        <div class="container">
            <div class="faq-wrapper">
                <div class="row g-4">
                    <div class="col-lg-3">
                        <div class="faq-left">
                            <ul class="nav" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a href="#general" data-bs-toggle="tab" class="nav-link active" aria-selected="true"
                                        role="tab">
                                        General
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="#readers" data-bs-toggle="tab" class="nav-link" aria-selected="false"
                                        role="tab" tabindex="-1">
                                        For Readers
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="#authors" data-bs-toggle="tab" class="nav-link" aria-selected="false"
                                        role="tab" tabindex="-1">
                                        For Authors
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="#competitions" data-bs-toggle="tab" class="nav-link" aria-selected="false"
                                        role="tab" tabindex="-1">
                                        Writing Competitions
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-content">
                            <div id="general" class="tab-pane fade show active" role="tabpanel">
                                <div class="faq-content">
                                    <div class="faq-accordion">
                                        <div class="accordion" id="accordion">
                                            <div class="accordion-item mb-3">
                                                <h5 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#faq1"
                                                        aria-expanded="true" aria-controls="faq1">
                                                        What is ReadSphere?
                                                    </button>
                                                </h5>
                                                <div id="faq1" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordion">
                                                    <div class="accordion-body">
                                                        ReadSphere is an online reading and literary platform where
                                                        readers can discover and purchase books, explore talented
                                                        authors, and participate in writing competitions. From novels
                                                        and comics to stories, journals, and educational content,
                                                        ReadSphere brings books, authors, and readers together in one
                                                        community.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item mb-3">
                                                <h5 class="accordion-header">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#faq2"
                                                        aria-expanded="false" aria-controls="faq2">
                                                        What kind of content is available on ReadSphere?
                                                    </button>
                                                </h5>
                                                <div id="faq2" class="accordion-collapse show"
                                                    data-bs-parent="#accordion">
                                                    <div class="accordion-body">
                                                        ReadSphere offers a wide range of content, including novels,
                                                        comics, story books, journals, general knowledge titles,
                                                        quizzes, and other literary works, created by both new and
                                                        established authors.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item mb-3">
                                                <h5 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#faq3"
                                                        aria-expanded="false" aria-controls="faq3">
                                                        Do I need to create an account to use ReadSphere?
                                                    </button>
                                                </h5>
                                                <div id="faq3" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordion">
                                                    <div class="accordion-body">
                                                        Yes. Creating a free account lets you browse the full catalog,
                                                        add books to your cart, complete purchases, and access
                                                        everything you've bought from your personal library.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item mb-3">
                                                <h5 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#faq4"
                                                        aria-expanded="false" aria-controls="faq4">
                                                        Is ReadSphere free to join?
                                                    </button>
                                                </h5>
                                                <div id="faq4" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordion">
                                                    <div class="accordion-body">
                                                        Signing up for ReadSphere is completely free. You only pay for
                                                        the individual books or content you choose to purchase.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item mb-3">
                                                <h5 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#faq5"
                                                        aria-expanded="false" aria-controls="faq5">
                                                        What makes ReadSphere different from other book platforms?
                                                    </button>
                                                </h5>
                                                <div id="faq5" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordion">
                                                    <div class="accordion-body">
                                                        ReadSphere is built around three core ideas: helping readers
                                                        discover great books, supporting authors in sharing their
                                                        work, and encouraging creativity through writing
                                                        competitions, all in one connected community.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h5 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#faq6"
                                                        aria-expanded="false" aria-controls="faq6">
                                                        How do I get help if I run into a problem?
                                                    </button>
                                                </h5>
                                                <div id="faq6" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordion">
                                                    <div class="accordion-body">
                                                        If you need assistance with your account, an order, or
                                                        anything else on the platform, you can reach out to our
                                                        support team, and we'll be happy to help.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="readers" class="tab-pane fade" role="tabpanel">
                                <div class="faq-content">
                                    <div class="faq-accordion">
                                        <div class="accordion" id="accordion2">
                                            <div class="accordion-item mb-3">
                                                <h5 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#faq11"
                                                        aria-expanded="true" aria-controls="faq11">
                                                        How do I find books on ReadSphere?
                                                    </button>
                                                </h5>
                                                <div id="faq11" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordion">
                                                    <div class="accordion-body">
                                                        You can browse ReadSphere's catalog by genre, author, or type
                                                        of content, such as novels, comics, journals, or quizzes, to
                                                        discover titles that match your interests.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item mb-3">
                                                <h5 class="accordion-header">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#faq22"
                                                        aria-expanded="false" aria-controls="faq22">
                                                        How does buying a book work?
                                                    </button>
                                                </h5>
                                                <div id="faq22" class="accordion-collapse show"
                                                    data-bs-parent="#accordion">
                                                    <div class="accordion-body">
                                                        Simply add a book to your cart, proceed to checkout, and
                                                        complete your purchase. Once it's confirmed, the book is added
                                                        to your personal library.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item mb-3">
                                                <h5 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#faq33"
                                                        aria-expanded="false" aria-controls="faq33">
                                                        Where can I access the books I've purchased?
                                                    </button>
                                                </h5>
                                                <div id="faq33" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordion">
                                                    <div class="accordion-body">
                                                        All the books you've bought are stored in your ReadSphere
                                                        account, so you can access and read them anytime after
                                                        logging in.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item mb-3">
                                                <h5 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#faq44"
                                                        aria-expanded="false" aria-controls="faq44">
                                                        Can I add multiple books to my cart before checking out?
                                                    </button>
                                                </h5>
                                                <div id="faq44" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordion">
                                                    <div class="accordion-body">
                                                        Yes, you can add as many books as you like to your cart and
                                                        purchase them together in a single checkout.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item mb-3">
                                                <h5 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#faq55"
                                                        aria-expanded="false" aria-controls="faq55">
                                                        Can I explore books by a specific author?
                                                    </button>
                                                </h5>
                                                <div id="faq55" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordion">
                                                    <div class="accordion-body">
                                                        Absolutely. ReadSphere lets you view author profiles and
                                                        explore the full collection of work each author has published
                                                        on the platform.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h5 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#faq66"
                                                        aria-expanded="false" aria-controls="faq66">
                                                        Is it safe to make purchases on ReadSphere?
                                                    </button>
                                                </h5>
                                                <div id="faq66" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordion">
                                                    <div class="accordion-body">
                                                        Yes. Your purchases and payment details are handled securely,
                                                        so you can shop for books, comics, and other content with
                                                        confidence.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="authors" class="tab-pane fade" role="tabpanel">
                                <div class="faq-content">
                                    <div class="faq-accordion">
                                        <div class="accordion" id="accordion3">
                                            <div class="accordion-item mb-3">
                                                <h5 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#faq111"
                                                        aria-expanded="true" aria-controls="faq111">
                                                        Can I publish my own writing on ReadSphere?
                                                    </button>
                                                </h5>
                                                <div id="faq111" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordion">
                                                    <div class="accordion-body">
                                                        Yes. ReadSphere welcomes both aspiring and established authors
                                                        to share their novels, comics, stories, journals, and other
                                                        written work with the community.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item mb-3">
                                                <h5 class="accordion-header">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#faq222"
                                                        aria-expanded="false" aria-controls="faq222">
                                                        Who can become an author on ReadSphere?
                                                    </button>
                                                </h5>
                                                <div id="faq222" class="accordion-collapse show"
                                                    data-bs-parent="#accordion">
                                                    <div class="accordion-body">
                                                        Anyone with a story to tell is welcome, whether you're a
                                                        first-time writer or an experienced, published author.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item mb-3">
                                                <h5 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#faq333"
                                                        aria-expanded="false" aria-controls="faq333">
                                                        What types of work can authors share?
                                                    </button>
                                                </h5>
                                                <div id="faq333" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordion">
                                                    <div class="accordion-body">
                                                        Authors can publish a wide variety of content on ReadSphere,
                                                        including novels, comics, story books, journals, and general
                                                        knowledge or educational material.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item mb-3">
                                                <h5 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#faq444"
                                                        aria-expanded="false" aria-controls="faq444">
                                                        How does ReadSphere support authors?
                                                    </button>
                                                </h5>
                                                <div id="faq444" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordion">
                                                    <div class="accordion-body">
                                                        ReadSphere gives authors a platform to reach readers directly,
                                                        sell their work, and grow their audience, while also offering
                                                        writing competitions as a way to gain recognition.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item mb-3">
                                                <h5 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#faq555"
                                                        aria-expanded="false" aria-controls="faq555">
                                                        Can I sell the books I publish?
                                                    </button>
                                                </h5>
                                                <div id="faq555" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordion">
                                                    <div class="accordion-body">
                                                        Yes. Once your work is published on ReadSphere, readers can
                                                        discover it, add it to their cart, and purchase it just like
                                                        any other title on the platform.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h5 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#faq666"
                                                        aria-expanded="false" aria-controls="faq666">
                                                        Can I manage or update my published work?
                                                    </button>
                                                </h5>
                                                <div id="faq666" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordion">
                                                    <div class="accordion-body">
                                                        Yes, authors can manage their published content on
                                                        ReadSphere, keeping their profile and catalog up to date for
                                                        readers to explore.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="competitions" class="tab-pane fade" role="tabpanel">
                                <div class="faq-content">
                                    <div class="faq-accordion">
                                        <div class="accordion" id="accordion4">
                                            <div class="accordion-item mb-3">
                                                <h5 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#faq1111"
                                                        aria-expanded="true" aria-controls="faq1111">
                                                        What are ReadSphere's writing competitions?
                                                    </button>
                                                </h5>
                                                <div id="faq1111" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordion">
                                                    <div class="accordion-body">
                                                        ReadSphere hosts writing competitions that give writers the
                                                        chance to submit essays and stories, showcase their
                                                        creativity, and compete for prizes.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item mb-3">
                                                <h5 class="accordion-header">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#faq2222"
                                                        aria-expanded="false" aria-controls="faq2222">
                                                        Who can enter a writing competition on ReadSphere?
                                                    </button>
                                                </h5>
                                                <div id="faq2222" class="accordion-collapse show"
                                                    data-bs-parent="#accordion">
                                                    <div class="accordion-body">
                                                        Both aspiring and established authors on ReadSphere are
                                                        welcome to enter, giving writers of every experience level a
                                                        chance to participate.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item mb-3">
                                                <h5 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#faq3333"
                                                        aria-expanded="false" aria-controls="faq3333">
                                                        What types of competitions does ReadSphere run?
                                                    </button>
                                                </h5>
                                                <div id="faq3333" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordion">
                                                    <div class="accordion-body">
                                                        ReadSphere runs a variety of competitions, including essay and
                                                        story competitions, with more formats added over time to give
                                                        writers different ways to showcase their work.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item mb-3">
                                                <h5 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#faq4444"
                                                        aria-expanded="false" aria-controls="faq4444">
                                                        How do I submit my entry to a competition?
                                                    </button>
                                                </h5>
                                                <div id="faq4444" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordion">
                                                    <div class="accordion-body">
                                                        You can submit your essay or story directly through your
                                                        ReadSphere account once a competition is open for entries.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item mb-3">
                                                <h5 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#faq5555"
                                                        aria-expanded="false" aria-controls="faq5555">
                                                        What can I win by entering a competition?
                                                    </button>
                                                </h5>
                                                <div id="faq5555" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordion">
                                                    <div class="accordion-body">
                                                        Competition winners have the opportunity to win prizes and
                                                        gain greater visibility for their work within the ReadSphere
                                                        community.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h5 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#faq6666"
                                                        aria-expanded="false" aria-controls="faq6666">
                                                        Where can I find out about upcoming competitions?
                                                    </button>
                                                </h5>
                                                <div id="faq6666" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordion">
                                                    <div class="accordion-body">
                                                        New and upcoming writing competitions are announced on
                                                        ReadSphere, so keep an eye on the platform to find out when
                                                        submissions open.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection