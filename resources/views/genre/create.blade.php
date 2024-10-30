@extends('admin.body.main')
@section('admin')

<main class="main" id="main">
<section class="section">
    <div class="row justify-content-center">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Tambah Film</h5>

            <!-- General Form Elements -->
            <form method="post" action="{{ route('genre.store') }}"  enctype="multipart/form-data">

                @csrf
                <div class="row mb-3">
                    <label for="movie_id" class="col-sm-2 col-form-label">Movie</label>
                    <select class="col-sm-10" name="movie_id" id="movie_id" class="form-select">
                        @foreach($movie as $mv)
                        <option value="{{ $mv->id }}">{{ $mv->name }}</option>
                        @endforeach
                    </select>
                  </div>
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Nama Genre</label>
                <div class="col-sm-10">
                  <input type="text" name="nama_genre" class="form-control">
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