@extends('layouts.admin')

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
            Welcome Back, Admin
        </h1>

        <p class="fs-5 mb-4">
            Empowering the teaching of traditional arts 
            through seamless administration.
        </p>

    </div>
</div>

<!-- DASHBOARD STATS -->
<div class="container my-5">

    <div class="row text-center">

        <!-- AVAILABLE CLASSES -->
        <div class="col-md-6 mb-4">
            <div class="card card-soft p-4">
                <a href="{{ route('admin.index') }}" class="btn btn-lg px-5">
            View Classes
        </a>
            </div>
        </div>

        <!-- MY CLASSES -->
        <div class="col-md-6 mb-4">
            <div class="card card-soft p-4">
                <a href="{{ route('admin.manage') }}" class="btn btn-lg px-5">
            Users
        </a>
            </div>
        </div>

    </div>

</div>

@endsection
