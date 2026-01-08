@extends('layouts.admin')

@section('title', 'Admin Edit')

@section('content')

<div class="container my-5">

    <!-- PAGE TITLE -->
    <div class="mb-4">
        <h3 class="fw-bold text-white fs-2">Edit Art Class</h3>
        <p class="text-white fs-6 mb-0">Update existing art class information</p>
    </div>

    <div class="card shadow-sm border-0" style="background-color: #eeb3b3ff">
        <div class="card-body p-4">

            <form action="{{ route('admin.update', $artclass->class_id) }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- CURRENT IMAGE -->
                <div class="mb-4">
                    <label class="form-label fw-semibold">Current Art Image</label>
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $artclass->image_path) }}"
                             class="img-fluid rounded"
                             style="max-height: 200px; object-fit: cover;"
                             alt="Art Class Image">
                    </div>

                    <label class="form-label fw-semibold">Change Image (optional)</label>
                    <input type="file" class="form-control" name="image_path">
                </div>

                <!-- CLASS NAME -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Class Name</label>
                    <input type="text"
                           class="form-control"
                           name="class_name"
                           value="{{ old('class_name', $artclass->class_name) }}"
                           required>
                </div>

                <!-- DESCRIPTION -->
                <div class="mb-4">
                    <label class="form-label fw-semibold">Description</label>
                    <textarea class="form-control"
                              name="description"
                              rows="4"
                              required>{{ old('description', $artclass->description) }}</textarea>
                </div>

                <!-- ART TYPE -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Art Type</label>
                    <select class="form-select" name="art_type" required>
                        @foreach (['Batik','Anyaman','Calligraphy','Ukiran Kayu','Wau Bulan'] as $type)
                            <option value="{{ $type }}"
                                {{ old('art_type', $artclass->art_type) == $type ? 'selected' : '' }}>
                                {{ $type }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- MODE -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Mode</label>
                    <select class="form-select" id="mode" name="mode" required>
                        <option value="Online" {{ old('mode', $artclass->mode) == 'Online' ? 'selected' : '' }}>
                            Online
                        </option>
                        <option value="Physical" {{ old('mode', $artclass->mode) == 'Physical' ? 'selected' : '' }}>
                            Physical
                        </option>
                    </select>
                </div>

                <!-- LOCATION -->
                <div class="mb-3" id="locationDiv">
                    <label class="form-label fw-semibold">Location</label>
                    <input type="text"
                           class="form-control"
                           name="location"
                           value="{{ old('location', $artclass->location) }}">
                </div>

                <!-- LINK -->
                <div class="mb-3" id="linkDiv">
                    <label class="form-label fw-semibold">Online Class Link</label>
                    <input type="url"
                           class="form-control"
                           name="link"
                           value="{{ old('link', $artclass->link) }}">
                </div>

                <!-- DURATION -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Duration (minutes)</label>
                    <input type="number"
                           class="form-control"
                           name="duration"
                           value="{{ old('duration', $artclass->duration) }}"
                           min="1"
                           required>
                </div>

                <!-- DATES -->
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Class Start Date</label>
                        <input type="date"
                               class="form-control"
                               name="start_date"
                               value="{{ old('start_date', $artclass->start_date) }}"
                               required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-semibold">Class End Date</label>
                        <input type="date"
                               class="form-control"
                               name="end_date"
                               value="{{ old('end_date', $artclass->end_date) }}"
                               required>
                    </div>
                </div>

                <!-- PRICE -->
                <div class="mb-4">
                    <label class="form-label fw-semibold">Price (RM)</label>
                    <input type="number"
                           step="0.01"
                           class="form-control"
                           name="price"
                           value="{{ old('price', $artclass->price) }}"
                           required>
                </div>

                <!-- ACTION BUTTONS -->
                <div class="d-flex justify-content-end">
                    <a href="{{ route('admin.index') }}" class="btn btn-cancel me-2">
                        Cancel
                    </a>
                    <button type="submit" class="btn px-4">
                        Update Class
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>

<!-- MODE TOGGLE SCRIPT -->
<script>
const modeSelect = document.getElementById('mode');
const locationDiv = document.getElementById('locationDiv');
const linkDiv = document.getElementById('linkDiv');

function toggleMode() {
    if (modeSelect.value === 'Physical') {
        locationDiv.style.display = 'block';
        linkDiv.style.display = 'none';
    } else {
        linkDiv.style.display = 'block';
        locationDiv.style.display = 'none';
    }
}
toggleMode();
modeSelect.addEventListener('change', toggleMode);
</script>

@endsection
