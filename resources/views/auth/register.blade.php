@extends('layouts.auth') 
@section('title', 'Register')

@section('content')

<div class="container my-5">

    <!-- PAGE TITLE -->
    <div class="mb-4 text-center">
        <h3 class="fw-bold text-white" style="font-size: 32px;">
            Create Account
        </h3>
        <p class="text-white" style="font-size: 18px;">
            Join our Traditional Art Class community
        </p>
    </div>

    <!-- FORM CARD -->
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-sm border-0" style="background-color: #eeb3b3ff">
                <div class="card-body p-4">

                    <form method="POST" action="{{ route('register.store') }}">
                        @csrf

                        <!-- FULL NAME -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Full Name</label>
                            <input type="text"
                                   class="form-control"
                                   name="full_name"
                                   value="{{ old('full_name') }}"
                                   placeholder="Enter your full name"
                                   required>
                        </div>

                        <!-- AGE -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Age</label>
                            <input type="number"
                                   class="form-control"
                                   name="age"
                                   value="{{ old('age') }}"
                                   placeholder="Enter your age"
                                   required>
                        </div>

                        <!-- GENDER -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Gender</label>
                            <select class="form-select" name="gender" required>
                                <option disabled selected>Select Gender</option>
                                <option value="Male" {{ old('gender')=='Male'?'selected':'' }}>Male</option>
                                <option value="Female" {{ old('gender')=='Female'?'selected':'' }}>Female</option>
                            </select>
                        </div>

                        <!-- EMAIL -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Email Address</label>
                            <input type="email"
                                   class="form-control"
                                   name="email"
                                   value="{{ old('email') }}"
                                   placeholder="Enter your email"
                                   required>
                        </div>

                        <!-- PASSWORD -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Password</label>
                            <input type="password"
                                   class="form-control"
                                   name="password"
                                   placeholder="Create a password"
                                   required>
                        </div>

                        <!-- CONFIRM PASSWORD -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Confirm Password</label>
                            <input type="password"
                                class="form-control"
                                name="password_confirmation"
                                placeholder="Confirm your password"
                                required>
                        </div>    

                        <!-- ACTION BUTTONS -->
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('login') }}" class="btn btn-secondary me-2 btn-cancel">
                                Already have account?
                            </a>
                            <button type="submit"
                                    class="btn btn-primary px-4"
                                    style="background-color: #ea990dff">
                                Register
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection
