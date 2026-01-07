@extends('layouts.admin')
@section('content')

<div class="container my-5">

    <!-- PAGE TITLE -->
    <div class="mb-4">
        <h3 class="fw-bold" style= "color: #ffffffff, size: 20">Add Art Class</h3>
        <p class="mb-0" style= "color: #ffffffff">Add a new art class to the system</p>
    </div>

    <!-- FORM CARD -->
     <body class="bg-light">
    <div class="card shadow-sm border-0" style="background-color: #eeb3b3ff">
        <div class="card-body p-4">

            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- IMAGE -->
                <div class="mb-4">
                    <label for="imagePath" class="form-label fw-semibold">Art Image</label>
                    <input type="file" class="form-control" id="imagePath" name="image_path" required>
                </div>

                <!-- TITLE -->
                <div class="mb-3">
                    <label for="class_name" class="form-label fw-semibold">Class Name</label>
                    <input type="text" class="form-control" id="class_name" name="class_name"
                        placeholder="Enter class name" required>
                </div>

                <!-- DESCRIPTION -->
                <div class="mb-4">
                    <label for="description" class="form-label fw-semibold">Description</label>
                    <textarea class="form-control" id="description" name="description"
                        rows="4" placeholder="Enter class description" required></textarea>
                </div>

                <!-- ART TYPE -->
                <div class="mb-3">
                    <label for="artType" class="form-label fw-semibold">Art Type</label>
                    <select class="form-select" id="artType" name="art_type" required>
                        <option value="" selected disabled>Select Art Type</option>
                        <option value="Batik">Batik</option>
                        <option value="Calligraphy">Calligraphy</option>
                        <option value="Ukiran">Ukiran</option>
                        <option value="Anyaman">Anyaman</option>
                    </select>
                 </div>

            <!-- MODE -->
            <div class="mb-3">
                <label for="mode" class="form-label fw-semibold">Mode</label>
                <select class="form-select" id="mode" name="mode" required>
                    <option value="" selected disabled>Select Mode</option>
                    <option value="Online" {{ old('mode')=='Online'?'selected':'' }}>Online</option>
                    <option value="Physical" {{ old('mode')=='Physical'?'selected':'' }}>Physical</option>
                </select>
            </div>

            <!-- LOCATION (Physical) -->
            <div class="mb-3" id="locationDiv" style="display: {{ old('mode')=='Physical'?'block':'none' }};">
                <label for="location" class="form-label fw-semibold">Location</label>
                <input type="text" class="form-control" id="location" name="location"
                    value="{{ old('location') }}" placeholder="Enter location">
            </div>

            <!-- LINK (Online) -->
            <div class="mb-3" id="linkDiv" style="display: {{ old('mode')=='Online'?'block':'none' }};">
                <label for="link" class="form-label fw-semibold">Online Class Link</label>
                <input type="url" class="form-control" id="link" name="link"
                    value="{{ old('link') }}" placeholder="Enter online class link">
            </div>


            <!-- DURATION -->
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="duration" class="form-label fw-semibold">Duration (minutes)</label>
                        <input type="integer" class="form-control" id="duration" name="duration" required>
                    </div>
                </div>

            <!-- START/END DATE -->
            <div class="row">
                <div class="col-md-6 mb-4">
                    <label for="classStart" class="form-label fw-semibold">
                        Class Start Date
                    </label>
                    <input type="date" class="form-control" id="classStart"
                        name="class_start_date" required>
                </div>

                <div class="col-md-6 mb-4">
                    <label for="classEnd" class="form-label fw-semibold">
                        Class End Date
                    </label>
                    <input type="date" class="form-control" id="classEnd"
                        name="class_end_date" required>
                </div>
            </div>

                <!-- PRICE -->
                <div class="mb-3">
                    <label for="price" class="form-label fw-semibold">Price</label>
                    <input type="text" class="form-control" id="price" name="price"
                        placeholder="Enter price" required>
                </div>

                

                

                
                <div class="d-flex justify-content-end">

                    <a href="#" class="btn btn-secondary me-2 btn-cancel">
                        Cancel
                    </a>
                    <button type="submit" class="btn btn-primary px-4" style= "background-color: #ea990dff">
                        Add Class
                    </button>

                </div>

            </form>
            <script>
                const modeSelect = document.getElementById('mode');
                const locationDiv = document.getElementById('locationDiv');
                const linkDiv = document.getElementById('linkDiv');

                modeSelect.addEventListener('change', function() {
                    if (this.value === 'Physical') {
                        locationDiv.style.display = 'block';
                        linkDiv.style.display = 'none';
                        linkDiv.querySelector('input').value = '';
                    } else if (this.value === 'Online') {
                        linkDiv.style.display = 'block';
                        locationDiv.style.display = 'none';
                        locationDiv.querySelector('input').value = '';
                    } else {
                        locationDiv.style.display = 'none';
                        linkDiv.style.display = 'none';
                    }
                });
            </script>


        </div>
    </div>

</div>

@endsection
