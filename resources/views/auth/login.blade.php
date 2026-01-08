@extends('layouts.auth') 
@section('title', 'Login')

@section('content')

<div class="container my-5">

    <!-- PAGE TITLE -->
    <div class="mb-4 text-center">
        <h3 class="fw-bold text-white" style="font-size: 32px;">
            Welcome Back
        </h3>
        <p class="text-white" style="font-size: 18px;">
            Login to continue your art journey
        </p>
    </div>

    <!-- FORM CARD -->
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-sm border-0" style="background-color: #eeb3b3ff">
                <div class="card-body p-4">

                    {{-- SUCCESS MESSAGE --}}
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    {{-- ERROR MESSAGE --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            {{ $errors->first() }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

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
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Password</label>
                            <input type="password"
                                   class="form-control"
                                   name="password"
                                   placeholder="Enter your password"
                                   required>
                        </div>

                        <!--ROLE-->
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Login As</label>
                            <select class="form-select" name="role" required>
                                <option disabled selected>Select Role</option>
                                <option value="admin" {{ old('role')=='admin'?'selected':'' }}>Admin</option>
                                <option value="user" {{ old('role')=='user'?'selected':'' }}>User</option>
                            </select>
                        </div>

                        <!-- ACTION BUTTONS -->
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('register') }}" class="btn btn-secondary me-2 btn-cancel">
                                Create Account
                            </a>
                            <button type="submit"
                                    class="btn btn-primary px-4"
                                    style="background-color: #ea990dff">
                                Login
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection
