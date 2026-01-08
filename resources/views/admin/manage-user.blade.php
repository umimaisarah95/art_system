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
                <table class="table table-hover table-striped mb-0">

                    <thead style="background-color: #431919ff; color:white;">
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
                        @foreach ($users as $user)
                            @foreach ($user->classes as $class)
                                <tr class="text-center align-middle 
                                    {{ $class->mode === 'Online' ? 'table-info' : 'table-success' }}">

                                    <td>{{ $user->user_id }}</td>
                                    <td>{{ $user->full_name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $class->class_id }}</td>
                                    <td>{{ $class->class_name }}</td>
                                    <td>
                                        <span class="badge 
                                            {{ $class->mode === 'Online' ? 'bg-primary' : 'bg-success' }}">
                                            {{ $class->mode }}
                                        </span>
                                    </td>

                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>

                </table>

            </div>

        </div>
    </div>

</div>

@endsection
