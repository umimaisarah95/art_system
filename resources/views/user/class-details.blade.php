@extends('layouts.user')

@section('title', 'Class Details')

@section('content')

<div class="row justify-content-center">

    <div class="col-md-8">

        <div class="card card-soft shadow-sm" style="background-color: #ffeed1ff">

            <!-- IMAGE -->
            <img src="{{ asset('storage/' . $artclass->image_path) }}"
                 class="card-img-top"
                 style="height: 380px; object-fit: cover;"
                 alt="Art Class Image">

            <!-- CARD BODY -->
            <div class="card-body p-4">

                <h4 class="fw-bold mb-3">
                    {{ $artclass->class_name }}
                </h4>

                <p class="mb-3">
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

                <p class="fs-5 fw-bold mt-3">
                    Price: RM{{ number_format($artclass->price, 2) }}
                </p>

                <!-- ACTION AREA -->
                <div class="mt-4 d-flex flex-column gap-2">

                    @if ($isRegistered)
                        <div class="alert alert-success text-center fw-semibold mb-0">
                            ✅ Payment Successful <br>
                            You are registered in this class
                        </div>

                    @else
                        <form action="{{ route('class.register', $artclass->class_id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary w-100">
                                Register & Pay
                            </button>
                        </form>
                    @endif

                    <a href="{{ route('user.dashboard') }}"
                       class="btn btn-cancel">
                        Back
                    </a>

                </div>

            </div>
        </div>

    </div>
</div>


@endsection
