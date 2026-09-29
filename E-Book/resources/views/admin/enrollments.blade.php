@extends('admin.sidebar')

@section('admin')

<div class="container-fluid py-4">


    <div class="d-flex justify-content-between align-items-center mb-4">

        <div class="text-center">
            <h2 class="fw-bold">
                Competition Enrollments
            </h2>

            <p class="text-muted">
                View participants and their competition submissions.
            </p>
        </div>

        <div>
            <span class="badge bg-primary px-3 py-2">
                {{ $enrollments->count() }} Enrollments
            </span>
        </div>

    </div>



    <div class="card border-0 shadow-sm">

        <div class="card-body p-0">

            <div class="table-responsive">

                <table class="table table-hover align-middle mb-0">

                    <thead class="table-light">

                        <tr>

                            <th class="px-4">
                                #
                            </th>

                            <th>
                                Participant
                            </th>

                            <th>
                                Competition
                            </th>

                            <th>
                                Type
                            </th>

                            <th>
                                Enrolled At
                            </th>

                            <th>
                                Status
                            </th>

                            <th>
                                Submitted At
                            </th>

                            <th>
                                PDF
                            </th>

                            <th>
                               Annouce Result
                            </th>

                            <th>
                               Prizes
                            </th>

                        </tr>

                    </thead>


                    <tbody>

                        @forelse ($enrollments as $item)

                        <tr>

                            {{-- ID --}}
                            <td class="px-4">
                                {{ $item->id }}
                            </td>


                            {{-- USER --}}
                            <td>

                                @if ($item->user)

                                    <div class="fw-semibold">
                                        {{ $item->user->name }}
                                    </div>

                                    <small class="text-muted">
                                        {{ $item->user->email }}
                                    </small>

                                @else

                                    <span class="text-muted">
                                        User not found
                                    </span>

                                @endif

                            </td>


                            {{-- COMPETITION --}}
                            <td>

                                @if ($item->competition)

                                    <div class="fw-semibold">
                                        {{ $item->competition->title }}
                                    </div>

                                    <small class="text-muted">
                                        {{ ucfirst($item->competition->type) }}
                                    </small>

                                @else

                                    <span class="text-muted">
                                        Competition not found
                                    </span>

                                @endif

                            </td>


                            {{-- TYPE --}}
                            <td>

                                @if ($item->competition)

                                    <span class="badge bg-secondary">
                                        {{ ucfirst($item->competition->type) }}
                                    </span>

                                @else

                                    —

                                @endif

                            </td>



                            <td>

                                @if ($item->enrolled_at)

                                    {{ $item->enrolled_at->format('d M Y') }}

                                    <br>

                                    <small class="text-muted">
                                        {{ $item->enrolled_at->format('h:i A') }}
                                    </small>

                                @else

                                    —

                                @endif

                            </td>


                            {{-- STATUS --}}
                            <td>

                                @if ($item->status === 'submitted')

                                    <span class="badge bg-success">
                                        <i class="bi bi-check-circle me-1"></i>
                                        Submitted
                                    </span>

                                @elseif ($item->status === 'win')

                                    <span class="badge bg-primary">
                                        <i class="bi bi-trophy-fill me-1"></i>
                                        Winner
                                    </span>

                                @elseif ($item->status === 'lose')

                                    <span class="badge bg-danger">
                                        <i class="bi bi-x-circle me-1"></i>
                                        Lose
                                    </span>

                                @else

                                    <span class="badge bg-warning text-dark">
                                        <i class="bi bi-clock me-1"></i>
                                        Not Submitted
                                    </span>

                                @endif

                            </td>


                            {{-- SUBMITTED AT --}}
                            <td>

                                @if ($item->submitted_at)

                                    {{ $item->submitted_at->format('d M Y') }}

                                    <br>

                                    <small class="text-muted">
                                        {{ $item->submitted_at->format('h:i A') }}
                                    </small>

                                @else

                                    <span class="text-muted">
                                        —
                                    </span>

                                @endif

                            </td>


                            {{-- PDF --}}
                             <td>

                                @if (
                                    in_array($item->status, ['submitted', 'win', 'lose'])
                                    &&
                                    $item->pdf
                                )

                                    <a
                                        href="{{ asset('storage/competition_files/' . $item->pdf) }}"
                                        target="_blank"
                                        class="btn btn-sm btn-outline-success"
                                    >
                                        <i class="bi bi-file-earmark-pdf me-1"></i>
                                        View PDF
                                    </a>

                                @else

                                    <span class="text-muted">
                                        Not Submitted
                                    </span>

                                @endif

                            </td>
                            <td>
                                    @if ($item->status === 'submitted')
 <a
                                        href="{{route('result',  $item->id ) }}"
                                        target="_blank"
                                        class="btn btn-sm btn-outline-success"
                                    >
                                        <i class="bi bi-file-earmark-pdf me-1"></i>
                                        Result
                                    </a>
                                    @else
---
                                    @endif
                            </td>

                            {{-- prizes --}}
                            <td>
{{$item->prize}}
                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td
                                colspan="8"
                                class="text-center py-5"
                            >

                                <i
                                    class="bi bi-people fs-1 text-muted"
                                ></i>

                                <h5 class="mt-3">
                                    No Enrollments Yet
                                </h5>

                                <p class="text-muted mb-0">
                                    No users have enrolled in a competition.
                                </p>

                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection

