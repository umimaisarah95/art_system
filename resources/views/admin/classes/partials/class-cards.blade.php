<div class="row">

    {{-- UI ONLY: dummy data --}}
    @for ($i = 1; $i <= 6; $i++)
    <div class="col-md-4 mb-4">

        <div class="card card-soft h-100">
            <img src="https://via.placeholder.com/400x250" class="card-img-top">

            <div class="card-body">
                <h5 class="fw-bold">Batik Painting Class</h5>

                <span class="badge bg-primary mb-2">
                    Online
                </span>

                <p class="mb-1"><strong>Duration:</strong> 120 mins</p>
                <p class="mb-1"><strong>Price:</strong> RM 120</p>

                <div class="d-flex gap-2 mt-3">
                    <a href="#" class="btn btn-sm w-100">Edit</a>
                    <button class="btn btn-sm btn-delete w-100">Delete</button>
                </div>
            </div>

        </div>

    </div>
    @endfor

</div>
