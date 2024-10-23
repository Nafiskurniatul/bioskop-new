@extends('admin.body.main')
@section('admin')

<main class="main" id="main">
  <div class="pagetitle">
    <h1>General Tables</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">General</li>
      </ol>
    </nav>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <div class="title-table d-flex justify-content-between align-items-center">
            <h5 class="card-title mb-0 mt-2">Data Movie</h5>
            <a href="{{ route('movie.add') }}" class="btn btn-success">Tambah data</a>
          </div>        
          <!-- Table with stripped rows -->
          <div class="table mt-3">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Film</th>
                  <th>Director</th>
                  <th>Cast</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach($movies as $key => $mv)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $mv->name }}</td>
                    <td>{{ $mv->director }}</td>
                    <td>{{ $mv->cast }}</td>
                    <td>
                      <a href="{{ route('movie.show', $mv->id) }}" class="btn btn-info"><i class="bi bi-info-circle-fill text-white"></i></a>
                      <a href="{{ route('movie.edit', $mv->id) }}" class="btn btn-info"><i class="bi bi-pen-fill text-white"></i></a>
                      <a href="{{ route('movie.delete', $mv->id) }}" id= "delete" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- End Table with stripped rows -->
        </div>
      </div>
    </div>
  </div>
</main>

@endsection