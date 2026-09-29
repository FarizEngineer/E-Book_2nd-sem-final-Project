@extends('user.navbar')

@section('nav')

<div class="container py-5">

    {{-- Page Heading --}}
    <div class="text-center mb-5">
        <h2 class="fw-bold">My Enrolled Competitions</h2>
        <p class="text-muted">
            View your enrolled competitions and submit your work before the deadline.
        </p>
    </div>


    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
            </button>
        </div>
    @endif


    {{-- Error Message --}}
    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}

            <button type="button"
                    class="btn-close"
                    data-bs-dismiss="alert">
            </button>
        </div>
    @endif


    {{-- No Enrollments --}}
    @if($enrolled->isEmpty())

        <div class="text-center py-5">

            <h4 class="fw-bold">
                No Competitions Found
            </h4>

            <p class="text-muted">
                You have not enrolled in any competition yet.
            </p>

            <a href="{{ route('allcomp') }}"
               class="btn btn-primary">
                Browse Competitions
            </a>

        </div>

    @else

        {{-- Enrolled Competitions --}}
        <div class="row g-4">

            @foreach($enrolled as $item)

                <div class="col-md-6 col-lg-4">

                    <div class="card h-100 shadow-sm border-0">

                        <div class="card-body">

                            {{-- Competition Title --}}
                            @if($item->competition)

                                <h4 class="card-title fw-bold">
                                    {{ $item->competition->title }}
                                </h4>

                                <p class="text-muted mb-2">
                                    <strong>Topic:</strong>
                                    {{ $item->competition->topic }}
                                </p>

                                <p class="text-muted mb-2">
                                    <strong>Type:</strong>
                                    {{ $item->competition->type }}
                                </p>

                                <p class="text-muted mb-2">
                                    <strong>Deadline:</strong>
                                    {{ $item->competition->deadline->format('d M Y, h:i A') }}
                                </p>

                            @else

                                <h4 class="card-title fw-bold">
                                    Competition Not Found
                                </h4>

                            @endif


                            {{-- Status --}}
                            <p class="mb-3">

                                <strong>Status:</strong>

                              @if($item->status == 'submitted')

    <span class="badge bg-success">
        Submitted
    </span>

@elseif($item->status == 'win')

    <span class="badge bg-primary">
        Winner
    </span>

@elseif($item->status == 'lose')

    <span class="badge bg-danger">
        Lose
    </span>

@else

    <span class="badge bg-warning text-dark">
        Not Submitted
    </span>

@endif

                            </p>


                            {{-- Submitted Time --}}
                            @if($item->status == 'submitted')

                                <p class="text-muted mb-3">

                                    <strong>Submitted At:</strong>

                                    {{ optional($item->submitted_at)->format('d M Y, h:i A') ?? 'N/A' }}

                                </p>

                            @endif


                       @if ($item->status == "submitted")

    <div class="text-center">
        <span class="badge bg-primary px-3 py-2">
            Already Submitted
        </span>
    </div>

@elseif ($item->status == "win")

    <div class="text-center">
        <span class="badge bg-info px-3 py-2">
            <i class="bi bi-trophy-fill me-1"></i>
            You Won! : {{ $item->prize }}
        </span>
    </div>

@elseif ($item->status == "lose")

    <div class="text-center">
        <span class="badge bg-danger px-3 py-2">
            You Lost!
        </span>
    </div>

@else

    <a href="{{ route('competition.work', $item->id) }}"
       class="btn btn-primary w-100">

        View Competition

    </a>

@endif

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    @endif

</div>

@endsection

