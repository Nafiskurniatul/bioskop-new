<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\genre;
use App\Models\Movie;

class GenreController extends Controller
{
    public function index() {
        $genre = Genre::all();
        return view("genre.index", compact("genre"));
    }

    public function create() {
        $movie = Movie::all(); 
        return view("genre.create", compact("movie"));
    }

    public function store(Request $request) {
        $request->validate([
            "movie_id"=> "required|exists:movies,id",
            "nama_genre"=> "required|string",
        ]);

        Genre::create([
            "movie_id"=> $request->movie_id,
            "nama_genre" => $request->nama_genre,
        ]);

        return redirect()->route("genre.index")->with("success","Data berhasil ditambahkan");

    }

    //edit,update,delete ->rute
}
