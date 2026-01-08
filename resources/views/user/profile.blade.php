@extends('layouts.user')

@section('title', 'My Profile')

@section('content')

<div class="container my-5">

    <!-- PAGE HEADER -->
    <div class="mb-5 text-center">
        <h1 class="fw-bold text-white">
            My Profile
        </h1>
        <p class="text-white fs-5">
            Your account information
        </p>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card card-soft shadow-sm" style="background-color: #ffeed1ff">
                <div class="card-body p-4">
                    <div class="text-center mb-4">
                        <div class="rounded-circle text-white d-inline-flex 
                                    align-items-center justify-content-center"
                            style="width: 140px; height: 140px; font-size: 52px;
                                    background-color:#5a0808ff;
                                    box-shadow:0 6px 18px rgba(0,0,0,.25);">
                            {{ strtoupper(substr($user->full_name, 0, 1)) }}
                        </div>
                    </div>



                    <table class="table table-borderless mb-0">
                        <tr>
                            <th class="text-start">Full Name</th>
                            <td>{{ $user->full_name }}</td>
                        </tr>

                        <tr>
                            <th class="text-start">Age</th>
                            <td>{{ $user->age }}</td>
                        </tr>

                        <tr>
                            <th class="text-start">Gender</th>
                            <td>{{ $user->gender }}</td>
                        </tr>

                        <tr>
                            <th class="text-start">Email</th>
                            <td>{{ $user->email }}</td>
                        </tr>

                        <tr>
                            <th class="text-start">Role</th>
                            <td class="text-capitalize">
                                {{ $user->role }}
                            </td>
                        </tr>

                        <tr>
                            <th class="text-start">Password</th>
                            <td>
                                <span class="text-muted">********</span>
                            </td>
                        </tr>
                    </table>

                </div>
            </div>

        </div>
    </div>

</div>

@endsection
