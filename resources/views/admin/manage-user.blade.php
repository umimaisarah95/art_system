@extends('layouts.admin')
@section('title', 'Admin Manage Users')
@section('content')

<div class="container mt-4">

    <!-- PAGE HEADER -->
    <div class="mb-4">
        <h2 class="fw-bold text-white">
            Class Registration List
        </h2>
        <p class="text-white mb-0">
            List of users registered for art classes
        </p>
    </div>

    <!-- REGISTRATION TABLE -->
    <div class="card card-soft">
        <div class="card-body p-0">

            <div class="table-responsive">
                <table class="table table-hover mb-0">

                    <thead>
                        <tr class="text-center align-middle">
                            <th>User ID</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Class ID</th>
                            <th>Class Name</th>
                            <th>Mode</th>
                        </tr>
                    </thead>

                    <tbody>

                        {{-- UI ONLY --}}
                        @for ($i = 1; $i <= 8; $i++)
                        <tr class="text-center align-middle">
                            <td>U00{{ $i }}</td>
                            <td>Nur Aina Izzati</td>
                            <td>aina@example.com</td>
                            <td>C00{{ rand(1,5) }}</td>
                            <td>Batik Painting Class</td>
                            <td>
                                @if ($i % 2 == 0)
                                    <span class="badge bg-primary">Online</span>
                                @else
                                    <span class="badge bg-success">Physical</span>
                                @endif
                            </td>
                        </tr>
                        @endfor

                    </tbody>

                </table>
            </div>

        </div>
    </div>

</div>

@endsection
