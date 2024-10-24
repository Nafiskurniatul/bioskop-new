<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class LpMovieController extends Controller
{
    
    public function index() {
        $movies = Movie::all(); // mengambil data dari tabel movie
        return view('partials.main', compact('movies')); // mengambil data dari tabel movie ditampilkab di ke landing page
    }

    public function detail($id) { // untuk melihat detail movies berdasarkan id
        $movie = Movie::findOrFail($id);
        return view('detailMovie', compact('movie'));
    }
}
