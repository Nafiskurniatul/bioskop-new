
<!-- Carousel Section -->
<div id="movieCarousel" class="carousel slide " data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('assets/caraousel/cs1.jpg') }}" class="d-block w-100" alt="Movie 1" style="height: 500px; object-fit: cover;">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/caraousel/cs3.jpg') }}" class="d-block w-100" alt="Movie 2" style="height: 500px; object-fit: cover;">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/caraousel/cs1.jpg') }}" class="d-block w-100" alt="Movie 3" style="height: 500px; object-fit: cover;">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#movieCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#movieCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Movie Cards Section -->
<div class="container mt-5">
    <div class="row">
        @foreach($movies as $movie)
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{ asset('images/'.$movie->img_url) }}" class="card-img-top" alt="">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $movie->name }}</h5>
                    <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>