@extends('layouts.user')
@section('title', 'User Dashboard')
@section('content')

<div class="container mt-4">

    <!-- PAGE HEADER -->

    <div class="mb-5 text-center">
        <h1 class="fw-bold text-white display-4">
            Available Art Classes
        </h1>
        <p class="text-white fs-5 mb-0">
            Explore and register for traditional art classes
        </p>
        </div>

    <div class="row">

        @foreach ($artclasses as $artclass)
        <div class="col-md-4 mb-4">

            <div class="card card-soft h-100" style="background-color: #ffeed1ff">

                <!-- IMAGE -->
                <img src="{{ asset('storage/' . $artclass->image_path) }}"
                     class="card-img-top"
                     style="height: 220px; object-fit: cover;"
                     alt="Art Class Image">

                <div class="card-body">

                    <h5 class="fw-bold">
                        {{ $artclass->class_name }}
                    </h5>

                    <p class="mb-1">
                        <strong>Mode:</strong> {{ $artclass->mode }}
                    </p>

                    <p class="mb-1">
                        <strong>Duration:</strong> {{ $artclass->duration }} minutes
                    </p>

                    <p class="mb-1">
                        <strong>Price:</strong> RM{{ number_format($artclass->price, 2) }}
                    </p>

                    <p class="mb-3">
                        <strong>Schedule:</strong>
                        {{ $artclass->start_date }} – {{ $artclass->end_date }}
                    </p>

                    <div class="d-flex gap-2">

                        <!-- DETAILS -->
                        <a href="{{ route('class.details', $artclass->class_id) }}"
                           class="btn btn-sm w-100">
                            Details
                        </a>

                    </div>

                </div>
            </div>

        </div>
        @endforeach

    </div>

</div>

@endsection
