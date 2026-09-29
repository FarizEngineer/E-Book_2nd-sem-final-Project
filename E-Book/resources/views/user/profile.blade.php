@extends('user.navbar')

@section('nav')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card border-0 shadow-sm rounded-4 p-4">
                <div class="text-center mb-4">
                    <div style="width:90px;height:90px;border-radius:50%;background:#111;color:#fff;display:flex;align-items:center;justify-content:center;margin:0 auto 15px;font-size:32px;font-weight:700;">
                        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                    </div>
                    <h2 class="mb-1">{{ auth()->user()->name }}</h2>
                    <p class="text-muted mb-0">{{ auth()->user()->email }}</p>
                </div>

                <div class="border-top pt-4">
                    <div class="row mb-3">
                        <div class="col-sm-4 fw-semibold">Name</div>
                        <div class="col-sm-8">{{ auth()->user()->name }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 fw-semibold">Email</div>
                        <div class="col-sm-8">{{ auth()->user()->email }}</div>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-dark px-4">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
