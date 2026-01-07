@extends('admin.layouts.app')

@section('content')
@include('admin.classes.partials.class-cards')


<div class="container mt-4">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-white">
            Art Class Management
        </h2>
        <a href="#" class="btn">
            Add Class
        </a>
    </div>

    <!-- TABS -->
    <ul class="nav nav-tabs mb-4" role="tablist">
        <li class="nav-item">
            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#all">
                All Classes
            </button>
        </li>
        <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#online">
                Online Classes
            </button>
        </li>
        <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#physical">
                Physical Classes
            </button>
        </li>
    </ul>

    <!-- TAB CONTENT -->
    <div class="tab-content">

        <!-- ALL -->
        <div class="tab-pane fade show active" id="all">
            @include('admin.classes.partials.class-cards')
        </div>

        <!-- ONLINE -->
        <div class="tab-pane fade" id="online">
            @include('admin.classes.partials.class-cards-online')
        </div>

        <!-- PHYSICAL -->
        <div class="tab-pane fade" id="physical">
            @include('admin.classes.partials.class-cards-physical')
        </div>

    </div>

</div>

@endsection
