@extends('user.navbar')

@section('nav')

{{-- Breadcrumb --}}
<div class="breadcrumb-wrapper bg-cover section-padding"
     style="background-image: url({{ asset('user/assets/img/hero/breadcrumb-bg.jpg') }});">

    <div class="container">

        <div class="page-heading">

            <h1>Competitions</h1>

            <div class="page-header">

                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">

                    <li>
                        <a href="{{ route('web') }}">
                            Home
                        </a>
                    </li>

                    <li>
                        <i class="fa-solid fa-chevron-right"></i>
                    </li>

                    <li>
                        Competitions
                    </li>

                </ul>

            </div>

        </div>

        <div class="text-center mt-3">
            <a href="{{ route('viewcomp') }}">
                <h5>Enrolled Competitions</h5>
            </a>
        </div>

    </div>

</div>


{{-- =========================================================
     ABOUT COMPETITION | MARQUEE
========================================================= --}}

<div class="competition-marquee">

    <div class="marquee-track">


        {{-- CARD 1 --}}
        <div class="competition-card">

            <div class="competition-icon-box">

                <i class="bi bi-trophy-fill"></i>

                <div class="competition-badge">
                    BOOKIM EVENT
                </div>

            </div>

            <div class="competition-content">

                <span class="competition-label">
                    <i class="bi bi-stars"></i>
                    Competition
                </span>

                <h3>Share Your Story</h3>

                <p>
                    Show your creativity, share your story,
                    and get a chance to have your work published
                    through Bookim.
                </p>

                <div class="competition-bottom">

                    <span>
                        <i class="bi bi-award"></i>
                        Win exciting prizes
                    </span>

                    <a href="#">
                        Join Now
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </div>

            </div>

        </div>


        {{-- CARD 2 --}}
        <div class="competition-card">

            <div class="competition-icon-box">

                <i class="bi bi-pencil-square"></i>

                <div class="competition-badge">
                    FOR AUTHORS
                </div>

            </div>

            <div class="competition-content">

                <span class="competition-label">
                    <i class="bi bi-pencil"></i>
                    Creative Writing
                </span>

                <h3>Become the Next Author</h3>

                <p>
                    Write something meaningful, submit your
                    best work, and let Bookim help your story
                    reach new readers.
                </p>

                <div class="competition-bottom">

                    <span>
                        <i class="bi bi-book"></i>
                        Publish your story
                    </span>

                    <a href="#">
                        Participate
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </div>

            </div>

        </div>


        {{-- CARD 3 --}}
        <div class="competition-card">

            <div class="competition-icon-box">

                <i class="bi bi-book-half"></i>

                <div class="competition-badge">
                    OPEN NOW
                </div>

            </div>

            <div class="competition-content">

                <span class="competition-label">
                    <i class="bi bi-stars"></i>
                    Story Contest
                </span>

                <h3>Your Story Could Be Next</h3>

                <p>
                    Turn your imagination into a story and
                    compete with other creative writers in
                    the Bookim community.
                </p>

                <div class="competition-bottom">

                    <span>
                        <i class="bi bi-people"></i>
                        Join the community
                    </span>

                    <a href="#">
                        Learn More
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </div>

            </div>

        </div>


        {{-- DUPLICATE CARD 1 --}}
        <div class="competition-card">

            <div class="competition-icon-box">

                <i class="bi bi-trophy-fill"></i>

                <div class="competition-badge">
                    BOOKIM EVENT
                </div>

            </div>

            <div class="competition-content">

                <span class="competition-label">
                    <i class="bi bi-stars"></i>
                    Competition
                </span>

                <h3>Share Your Story</h3>

                <p>
                    Show your creativity, share your story,
                    and get a chance to have your work published
                    through Bookim.
                </p>

                <div class="competition-bottom">

                    <span>
                        <i class="bi bi-award"></i>
                        Win exciting prizes
                    </span>

                    <a href="#">
                        Join Now
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </div>

            </div>

        </div>


        {{-- DUPLICATE CARD 2 --}}
        <div class="competition-card">

            <div class="competition-icon-box">

                <i class="bi bi-pencil-square"></i>

                <div class="competition-badge">
                    FOR AUTHORS
                </div>

            </div>

            <div class="competition-content">

                <span class="competition-label">
                    <i class="bi bi-pencil"></i>
                    Creative Writing
                </span>

                <h3>Become the Next Author</h3>

                <p>
                    Write something meaningful, submit your
                    best work, and let Bookim help your story
                    reach new readers.
                </p>

                <div class="competition-bottom">

                    <span>
                        <i class="bi bi-book"></i>
                        Publish your story
                    </span>

                    <a href="#">
                        Participate
                        <i class="bi bi-arrow-right"></i>
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>


{{-- =========================================================
     DATABASE COMPETITIONS
========================================================= --}}

<div class="container competition-section">

    {{-- Session Error --}}
    @if(session('error'))

        <div class="alert alert-danger alert-dismissible fade show mb-4"
             role="alert">

            {{ session('error') }}

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
            </button>

        </div>

    @endif


    {{-- Session Success --}}
    @if(session('success'))

        <div class="alert alert-success alert-dismissible fade show mb-4"
             role="alert">

            {{ session('success') }}

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
            </button>

        </div>

    @endif


    @foreach ($data as $item)

        <div class="competition-announcement">


            {{-- =================================================
                 TOP SECTION
            ================================================== --}}

            <div class="competition-top">

                <div class="competition-symbol">

                    <i class="bi bi-trophy-fill"></i>

                </div>


                <div class="competition-heading">

                    <span class="competition-tag">

                        <i class="bi bi-megaphone-fill"></i>

                        Competition Announcement

                    </span>


                    <h2>
                        {{ $item->title }}
                    </h2>


                    <p>
                        {{ $item->description }}
                    </p>

                </div>

            </div>


            {{-- =================================================
                 INFORMATION
            ================================================== --}}

            <div class="competition-details">


                {{-- Competition Type --}}
                <div class="competition-detail">

                    <div class="detail-icon">

                        <i class="bi bi-bookmark-fill"></i>

                    </div>

                    <div>

                        <span>
                            Competition Type
                        </span>

                        <strong>
                            {{ $item->type }}
                        </strong>

                    </div>

                </div>


                {{-- Topic --}}
                <div class="competition-detail">

                    <div class="detail-icon">

                        <i class="bi bi-lightbulb-fill"></i>

                    </div>

                    <div>

                        <span>
                            Topic
                        </span>

                        <strong>
                            {{ $item->topic }}
                        </strong>

                    </div>

                </div>


                {{-- Deadline --}}
                <div class="competition-detail">

                    <div class="detail-icon">

                        <i class="bi bi-calendar-event-fill"></i>

                    </div>

                    <div>

                        <span>
                            Deadline
                        </span>

                        <strong>

                            {{ $item->deadline->format('d M Y, h:i A') }}

                        </strong>

                    </div>

                </div>


                {{-- Time --}}
                <div class="competition-detail">

                    <div class="detail-icon">

                        <i class="bi bi-clock-fill"></i>

                    </div>

                    <div>

                        <span>
                            Time
                        </span>

                        <strong>
                            {{ $item->time }} minutes
                        </strong>

                    </div>

                </div>

            </div>


            {{-- =================================================
                 PRIZE SECTION
            ================================================== --}}

            <div class="competition-prizes">

                <div class="prize-heading">

                    <i class="bi bi-award-fill"></i>

                    <div>

                        <span>
                            WINNING PRIZES
                        </span>

                        <strong>
                            Rewards for the winners
                        </strong>

                    </div>

                </div>


                <div class="prize-items">


                    {{-- First Prize --}}
                    <div class="prize-item">

                        <div class="prize-position first">
                            1
                        </div>

                        <div>

                            <small>
                                FIRST PRIZE
                            </small>

                            <strong>
                                {{ $item->first_prize }}
                            </strong>

                        </div>

                    </div>


                    {{-- Second Prize --}}
                    <div class="prize-item">

                        <div class="prize-position second">
                            2
                        </div>

                        <div>

                            <small>
                                SECOND PRIZE
                            </small>

                            <strong>
                                {{ $item->second_prize }}
                            </strong>

                        </div>

                    </div>


                    {{-- Third Prize --}}
                    <div class="prize-item">

                        <div class="prize-position third">
                            3
                        </div>

                        <div>

                            <small>
                                THIRD PRIZE
                            </small>

                            <strong>
                                {{ $item->third_prize }}
                            </strong>

                        </div>

                    </div>

                </div>

            </div>


            {{-- =================================================
                 BOTTOM SECTION
            ================================================== --}}

            <div class="competition-bottom">


                {{-- Competition Status --}}
                <div class="competition-status">

                    <span class="status-dot"></span>

                    <div>

                        <small>
                            Status
                        </small>

                        <strong>

                            @if(
                                $item->status === 'active'
                                &&
                                now()->lessThan($item->deadline)
                            )

                                Active

                            @else

                                Closed

                            @endif

                        </strong>

                    </div>

                </div>


                {{-- =================================================
                     JOIN BUTTON / CLOSED BUTTON
                ================================================== --}}

                @if(
                    $item->status === 'active'
                    &&
                    now()->lessThan($item->deadline)
                )

                    {{-- Competition is still open --}}
                    <a href="{{ route('enrollform', $item->id) }}"
                       class="competition-button text-light">

                        Join Competition

                        <i class="bi bi-arrow-right"></i>

                    </a>

                @else

                    {{-- Competition deadline has passed --}}
                    <button type="button"
                            class="competition-button text-light"
                            disabled
                            style="opacity: 0.6; cursor: not-allowed;">

                        Competition Closed

                        <i class="bi bi-lock-fill"></i>

                    </button>

                @endif


            </div>

        </div>

    @endforeach


    {{-- No competitions --}}
    @if($data->isEmpty())

        <div class="text-center py-5">

            <h3>
                No Competitions Available
            </h3>

            <p class="text-muted">
                There are currently no competitions available.
            </p>

        </div>

    @endif

</div>

@endsection

