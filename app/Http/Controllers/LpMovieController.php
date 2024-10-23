<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class LpMovieController extends Controller
{
    public function index() {
        $movies = Movie::all();
        return view('partials.main', compact('movies'));
    }

    public function detail($id) {
        $movie = Movie::findOrFail($id);
        return view('detailMovie', compact('movie'));
    }
}
