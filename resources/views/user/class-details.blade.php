@extends('layouts.user')

@section('title', 'Class Details')

@section('content')

<div class="container my-5">

    <!-- PAGE HEADER -->
    <div class="mb-4">
        <h2 class="fw-bold text-white">
            {{ $artclass->class_name }}
        </h2>
        <p class="text-white mb-0">
            Learn more about this traditional art class
        </p>
    </div>

    <div class="row">

        <!-- LEFT: IMAGE -->
        <div class="col-md-6 mb-4">
            <div class="card card-soft h-100">
                <img src="{{ asset('storage/' . $artclass->image_path) }}"
                     class="card-img-top"
                     style="height: 350px; object-fit: cover;"
                     alt="Art Class Image">
            </div>
        </div>

        <!-- RIGHT: DETAILS -->
        <div class="col-md-6">
            <div class="card card-soft h-100" style="background-color: #ffeed1ff">
                <div class="card-body">

                    <h5 class="fw-bold mb-3">Class Information</h5>

                    <p>
                        <strong>Description:</strong><br>
                        {{ $artclass->description }}
                    </p>

                    <p>
                        <strong>Art Type:</strong>
                        {{ $artclass->art_type }}
                    </p>

                    <p>
                        <strong>Mode:</strong>
                        <span class="badge {{ $artclass->mode === 'Online' ? 'bg-primary' : 'bg-success' }}">
                            {{ $artclass->mode }}
                        </span>
                    </p>

                    @if ($artclass->mode === 'Online')
                        <p>
                            <strong>Online Link:</strong><br>
                            <a href="{{ $artclass->link }}" target="_blank">
                                {{ $artclass->link }}
                            </a>
                        </p>
                    @else
                        <p>
                            <strong>Location:</strong><br>
                            {{ $artclass->location }}
                        </p>
                    @endif

                    <p>
                        <strong>Duration:</strong>
                        {{ $artclass->duration }} minutes
                    </p>

                    <p>
                        <strong>Schedule:</strong><br>
                        {{ $artclass->start_date }} – {{ $artclass->end_date }}
                    </p>

                    <p class="fs-5 fw-bold">
                        Price: RM{{ number_format($artclass->price, 2) }}
                    </p>

                    <!-- ACTION BUTTONS -->
                    <div class="d-flex gap-2 mt-4">

                        <a href="{{ route('user.dashboard') }}"
                           class="btn btn-cancel w-50">
                            Back
                        </a>

                        <form action="{{ route('class.register', $artclass->class_id) }}"
                              method="POST"
                              class="w-50">
                            @csrf
                            <button type="submit"
                                    class="btn btn-success w-100">
                                Register & Pay
                            </button>
                        </form>

                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

@endsection
