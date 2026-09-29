@extends('user.navbar')
@section('nav')
{{-- Breadcrumb --}}
 <div class="breadcrumb-wrapper bg-cover section-padding"
        style="background-image: url({{asset('user/assets/img/hero/breadcrumb-bg.jpg)')}}">
        <div class="container">
            <div class="page-heading">
                <h1>Enrollment Form</h1>
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
                          Enroll now
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    {{--   Form --}}
<form action="{{ route('competition.enroll') }}" method="POST">
    @csrf
    
    <input
        type="hidden"
        name="competition_id"
        value="{{ $comp->id }}"
    >

    <div class="row mt-3">

        <div class="col-md-5 offset-1">
            <input
                type="text"
                class="form-control"
                value="{{ $user->name }}"
                disabled
            >
        </div>

        <div class="col-md-5">
            <input
                type="text"
                class="form-control"
                value="{{ $user->email }}"
                disabled
            >
        </div>

    </div>


    <div class="row mt-3">

        <div class="col-md-4 offset-1">
            <input
                type="text"
                class="form-control"
                value="{{ $comp->title }}"
                disabled
            >
        </div>

        <div class="col-md-3">
            <input
                type="text"
                class="form-control"
                value="{{ $comp->topic }}"
                disabled
            >
        </div>

        <div class="col-md-3">
            <input
                type="text"
                class="form-control"
                value="{{ $comp->type }}"
                disabled
            >
        </div>

    </div>


    <div class="row mt-3">

        <div class="col-md-4 offset-1">
            <input
                type="text"
                class="form-control"
                value="{{ $comp->first_prize }}"
                disabled
            >
        </div>

        <div class="col-md-3">
            <input
                type="text"
                class="form-control"
                value="{{ $comp->second_prize }}"
                disabled
            >
        </div>

        <div class="col-md-3">
            <input
                type="text"
                class="form-control"
                value="{{ $comp->third_prize }}"
                disabled
            >
        </div>

    </div>


    <div class="row mt-3">

        <div class="col-md-5 offset-1">

            <label class="form-label">
                Competition Deadline
            </label>

            <input
                type="text"
                class="form-control"
                value="{{ $comp->deadline->format('d M Y, h:i A') }}"
                disabled
            >

        </div>

        <div class="col-md-5">

            <label class="form-label">
                Duration
            </label>

            <input
                type="text"
                class="form-control"
                value="{{ $comp->time }} minutes"
                disabled
            >

        </div>

    </div>


    <div class="row mt-3">

        <div class="col-md-10 offset-1">

            <textarea
                name="text"
                rows="6"
                class="form-control"
                placeholder="Why did you choose this competition? Any comments?"
                required
            ></textarea>

        </div>

    </div>


    <div class="text-center mt-3 mb-4">

        <button class="btn btn-outline-success">
            Enroll Now
        </button>

    </div>

</form>


@endsection
