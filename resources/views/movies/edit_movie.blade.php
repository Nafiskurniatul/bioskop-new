@extends('admin.body.main')
@section('admin')

<main class="main" id="main">
<section class="section">
    <div class="row justify-content-center">
      <div class="col-lg-12">

        <div class="card ">
          <div class="card-body">
            <h5 class="card-title">Update Movie</h5>

            <!-- General Form Elements -->
            <form method="post" action="{{ route('movie.update', $movies->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" name="name" class="form-control" value="{{ old('name', $movies->name) }}">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputNama" class="col-sm-2 col-form-label">Cast</label>
                <div class="col-sm-10">
                  <input type="text" name="cast" class="form-control" value="{{ old('cast', $movies->cast) }}">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputNama" class="col-sm-2 col-form-label">Img</label>
                  <div class="col-sm-10">
                    <input type="file" name="img_url" class="form-control" value="{{ old('img_url', $movies->img_url) }}" accept=".jpg,.jpeg,.png,.gif,.svg">
                    @if ($movies->img_url)
                    <img src="{{ asset('images/' . $movies->img_url) }}" alt="Pratinjau Gambar" class="mt-2" width="200px">
                    @else
                        <p>Gambar belum tersedia</p>
                    @endif
                  </div>
              </div>
              <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Sinopsis</label>
                <div class="col-sm-10">
                  <input type="text" name="sinopsis" class="form-control" value="{{ old('sinopsis', $movies->sinopsis) }}">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Director</label>
                <div class="col-sm-10">
                  <input type="text" name="director" class="form-control" value="{{ old('director', $movies->director) }}">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Duration</label>
                <div class="col-sm-10">
                  <input type="text" name="duration" class="form-control" value="{{ old('duration', $movies->duration) }}">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Age</label>
                <div class="col-sm-10">
                  <input type="number" name="age" class="form-control" value="{{ old('age', $movies->age) }}">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Trailer</label>
                <div class="col-sm-10">
                  <input type="text" name="trailer_url" class="form-control" value="{{ old('trailer_url', $movies->trailer_url) }}">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-10">
                  <input type="number" name="price" class="form-control" value="{{ old('price', $movies->price) }}">
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Submit Form</button>
                </div>
              </div>

            </form><!-- End General Form Elements -->
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

@endsection