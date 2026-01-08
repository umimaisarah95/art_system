@extends('layouts.user')

@section('content')

<!-- HERO SECTION -->
<!-- HERO SECTION -->
<div class="container-fluid px-0">
    <div class="text-center text-white"
         style="
            background-color: rgba(0,0,0,0.55);
            padding: 120px 20px;
            border-radius:20px;
         ">

        <h1 class="fw-bold mb-3" style="font-family: 'Pacifico', regular;">
            Welcome to Traditional Art Class
        </h1>

        <p class="fs-5 mb-4">
            Discover, learn, and preserve traditional arts through
            interactive online and physical classes.
        </p>

        <a href="{{ route('user.dashboard') }}" class="btn btn-lg px-5">
            Get Started →
        </a>

    </div>
</div>

<!-- DASHBOARD STATS -->
<div class="container my-5">

    <div class="row text-center">

        <!-- AVAILABLE CLASSES -->
        <div class="col-md-6 mb-4">
            <div class="card card-soft p-4">
                <h5 class="fw-bold">Available Classes</h5>
                <p class="fs-2 mb-0">{{ $totalClasses }}</p>
                <a href="{{ route('user.dashboard') }}" class="btn btn-lg px-5">
            See More
        </a>
            </div>
        </div>

        <!-- MY CLASSES -->
        <div class="col-md-6 mb-4">
            <div class="card card-soft p-4">
                <h5 class="fw-bold">My Classes</h5>
                <p class="fs-2 mb-0">{{ $myClassCount }}</p>
                <a href="{{ route('user.myclasses') }}" class="btn btn-lg px-5">
            My Classes
        </a>
            </div>
        </div>

    </div>

</div>

@endsection
