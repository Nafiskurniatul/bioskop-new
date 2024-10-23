@extends('admin.body.main')
@section('admin')

<main class="main" id="main">
    <section class="section">
        <div class="row justify-content-center">
          <div class="col-lg-12">
    
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Detail</h5>
    
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                         <p>{{ $movies->name }}</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Cast</label>
                        <div class="col-sm-10">
                         <p>{{ $movies->cast }}</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                         <img src="{{ asset('images/' . $movies->img_url) }}" width="100px">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Sinopsis</label>
                        <div class="col-sm-10">
                         <p>{{ $movies->sinopsis }}</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Director</label>
                        <div class="col-sm-10">
                         <p>{{ $movies->director }}</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Age</label>
                        <div class="col-sm-10">
                         <p>{{ $movies->age }}</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Duration</label>
                        <div class="col-sm-10">
                         <p>{{ $movies->duration }}</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Trailer</label>
                        <div class="col-sm-10">
                         <p>{{ $movies->trailer_url }}</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-10">
                         <p>{{ $movies->price }}</p>
                        </div>
                    </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</main>

@endsection