@extends('layouts.user')

@section('title', 'My Classes')

@section('content')

<div class="container my-5">

    <!-- PAGE HEADER -->
    <div class="mb-4">
        <h2 class="fw-bold text-white">
            My Classes
        </h2>
        <p class="text-white mb-0">
            Registered Class
        </p>
    </div>

    @if ($classes->isEmpty())
        <div class="alert alert-warning text-center">
            You have not registered for any classes yet.
        </div>
    @else
        <div class="row">

            @foreach ($classes as $class)
                <div class="col-md-4 mb-4">

                    <div class="card card-soft h-100" style="background-color: #ffeed1ff">

                        <img src="{{ asset('storage/' . $class->image_path) }}"
                             class="card-img-top"
                             style="height: 220px; object-fit: cover;"
                             alt="Class Image">

                        <div class="card-body">

                            <h5 class="fw-bold">
                                {{ $class->class_name }}
                            </h5>

                            <p class="mb-1">
                                <strong>Mode:</strong>
                                {{ $class->mode }}
                            </p>

                            <p class="mb-1">
                                <strong>Duration:</strong>
                                {{ $class->duration }} minutes
                            </p>

                            <p class="mb-3">
                                <strong>Schedule:</strong><br>
                                {{ $class->start_date }} – {{ $class->end_date }}
                            </p>

                            <a href="{{ route('class.details', $class->class_id) }}"
                               class="btn btn-success w-100">
                                View Details
                            </a>

                        </div>
                    </div>

                </div>
            @endforeach

        </div>
    @endif

</div>

@endsection
