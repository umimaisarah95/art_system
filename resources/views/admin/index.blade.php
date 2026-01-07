@extends('layouts.admin')

@section('content')

<div class="container mt-4">

    @if (session('success'))
        <div class="alert alert-success shadow-sm">
            {{ session('success') }}
        </div>
    @endif

    <!-- PAGE HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-white">Art Class Management</h2>
        <a href="#" class="btn">
            Add Class
        </a>
    </div>

    <div class="row">

        {{-- UI ONLY: replace with @foreach($classes as $class) later --}}
        @for ($i = 1; $i <= 6; $i++)
        <div class="col-md-4 mb-4">

            <div class="card card-soft h-100" style="background-color: #ffeed1ff">
                <img src="https://via.placeholder.com/400x250"
                     class="card-img-top"
                     alt="Art Class Image">

                <div class="card-body">

                    <h5 class="fw-bold">
                        Batik Painting Class
                    </h5>

                    <p class="mb-1">
                        <strong>Mode:</strong> Online
                    </p>

                    <p class="mb-1">
                        <strong>Duration:</strong> 120 minutes
                    </p>

                    <p class="mb-1">
                        <strong>Price:</strong> RM 120
                    </p>

                    <p class="mb-3">
                        <strong>Schedule:</strong>
                        10 Aug 2026 – 15 Aug 2026
                    </p>

                    <div class="d-flex gap-2">
                        <a href="#" class="btn btn-sm w-100">
                            Edit
                        </a>

                        <button class="btn btn-sm btn-delete w-100">
                            Delete
                        </button>
                    </div>

                </div>
            </div>

        </div>
        @endfor

    </div>
</div>

@endsection
