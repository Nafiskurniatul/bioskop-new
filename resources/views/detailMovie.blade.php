@extends('partials.main')
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            @if($movie)
                <img src="{{ asset('images/'.$movie->img_url) }}" class="card-img-top" alt="{{ $movie->name }}">
            @else
                <p>Movie not found.</p>
            @endif
        </div>
        <div class="col-md-6">
            <h1>{{ $movie->name }}</h1>
            <p>{{ $movie->sinopsis }}</p>
            <p><strong>Director:</strong> {{ $movie->director }}</p>
            <p><strong>Trailer:</strong> <a href="{{ $movie->trailer_url }}" target="_blank">Watch Trailer</a></p>

            <a href="{{ url()->previous() }}" class="btn btn-primary mt-3">Back to Movies</a>
        </div>
    </div>
</div>

@endsection