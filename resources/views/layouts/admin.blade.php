<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Admin Dashboard')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
            body {
        min-height: 100vh;
        background: 
            linear-gradient(rgba(0,0,0,0.75), rgba(0,0,0,0.75)),
            url('/images/batik1.jpg') no-repeat center center fixed;
        background-size: cover;
        }

        .btn {
            background-color: #ffb005ff;
            color: #ffffffff;
        }
        .btn:hover { background-color: #fffbb8ff; color: #000000ff; }

        .btn-delete { background-color: #dc3545; color: #fff; }
        .btn-delete:hover { background-color: #e28690ff; }

        .btn-cancel { background-color: #6b6b6bff; color: #fff; }
        .btn-cancel:hover { background-color: #8b8a8aff; }

        .cust-navbar { background-color: #5a0808ff; }

        .navbar-brand,
        .nav-link { color: #fff !important; font-weight: 500; }
        .nav-link:hover { color: #ffcc80ff !important; }

        /* Card */
        .card-soft {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.05);
        }

        .table thead th {
            position: sticky;
            top: 0;
            background: #e0ece9ff;
            z-index: 10;
            text-align: center;
            vertical-align: middle;
        }

        .table tbody td { vertical-align: middle; }
        .table-hover tbody tr:hover { background-color: #f1f3f5; transition: 0.2s; }

        .action-btns a,
        .action-btns button { margin-bottom: 6px; width: 90px; }
    </style>
</head>
<body>

<!-- TOP NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light border-bottom shadow-sm cust-navbar">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">
            Admin Dashboard
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#custNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="custNavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.index') }}">Dashboard</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.manage') }}">Manage Users</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>

                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">My Account</a></li>
                        <li>
                            <form action="#" method="POST">
                                @csrf
                                <button class="dropdown-item text-danger">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>

<!-- MAIN CONTENT -->
<main class="container my-4">
    @yield('content')
</main>

<!-- FOOTER -->
<footer class="bg-dark text-white mt-5">
    <div class="container py-4">
        <div class="row">
            <div class="col-md-6">
                <h5 class="fw-bold">Traditional Art Class Management</h5>
                <p class="mb-0">built by Umi Maisarah</p>
            </div>
            <div class="col-md-6 text-md-end">
                <p class="mb-0">&copy; {{ date('Y') }} All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@stack('scripts')
</body>
</html>
