@extends('layouts.admin')

@section('title', 'Admin Manage Users')

@section('content')

<div class="container mt-4">

    <!-- PAGE HEADER -->
    <div class="mb-4">
        <h2 class="fw-bold text-white">
            User Registration List
        </h2>
        <p class="text-white mb-0">
            List of users registered in the system
        </p>
    </div>

    <!-- USER TABLE -->
    <div class="card card-soft">
        <div class="card-body p-0">

            <div class="table-responsive">
                <table class="table table-hover mb-0">

                    <thead>
                        <tr class="text-center align-middle">
                            <th>Registration ID</th>
                            <th>User ID</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Age</th>
                        </tr>
                    </thead>

                    <tbody>

                        {{-- UI ONLY --}}
                        @for ($i = 1; $i <= 8; $i++)
                        <tr class="text-center align-middle">
                            <td>R00{{ $i }}</td>
                            <td>U00{{ $i }}</td>
                            <td>Nur Aina Izzati</td>
                            <td>aina@example.com</td>
                            <td>Female</td>
                            <td>21</td>
                        </tr>
                        @endfor

                    </tbody>

                </table>
            </div>

        </div>
    </div>

</div>

@endsection
