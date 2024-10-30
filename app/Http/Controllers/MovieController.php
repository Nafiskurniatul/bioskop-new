<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class MovieController extends Controller  
{
    public function index() { 
        $movies = Movie::all(); // mengambil semua data dari database // object dari class movie
        return view('movies.view_movie',[
            'movies' => $movies
        ]);
    }

    // menampilkan halaman tambah movie
    public function create() {
        return view('movies.add_movie'); // menampilkan semua halaman/view
    }

    // method create untuk menampilkan halaman tambah movie
    public function store(Request $request) { // proses pengisian movie/
        $request->validate([
            'name' => 'required|string|max:255', // required: harus diisi
            'cast' => 'nullable|string', // nullabel: bisa diisi bisa tidak
            'img_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi gambar
            'sinopsis' => 'nullable|string',
            'director' => 'nullable|string',
            'age' => 'nullable|integer',
            'duration' => 'nullable|string|regex:/^\d{2}:\d{2}:\d{2}$/',
            'trailer_url' => 'nullable|string',
            'price' => 'nullable|integer',
            ''
        ]);
    
        // Proses upload gambar
        if ($request->hasFile('img_url')) {
            $imageName = time().'.'.$request->img_url->extension();
            $request->img_url->move(public_path('images'), $imageName);
        } else {
            $imageName = null; // Jika tidak ada gambar, img_url akan bernilai null

        }
    
        try {
            //objek
            Movie::create([
                'name' => $request->name,
                'cast' => $request->cast,
                'img_url' => $imageName, // Menyimpan nama file gambar
                'sinopsis' => $request->sinopsis,
                'director' => $request->director,
                'age' => $request->age,
                'duration' => $request->duration,
                'trailer_url' => $request->trailer_url,
                'price' => $request->price,
            ]);
        
            Log::info('Movie created successfully.', ['name' => $request->name]);
            return redirect()->route('movie.index')->with('success', 'Movie added successfully'); // mengembalikan kehalaman view
        } catch (\Throwable $th) {
            Log::error('Error creating movie: ' . $th->getMessage());
            return back()->withErrors('Gagal menambahkan data. Silakan coba lagi.' . $th->getMessage());
        }
    }

    // overloading
    public function show($id) {
        $movies = Movie::findOrFail($id);
        return view('movies.show_movie', compact('movies'));
    }

    public function edit($id)
    {
        $movies = Movie::findOrFail($id);
        return view('movies.edit_movie', compact('movies'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'cast' => 'nullable|string',
        'img_url' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi gambar
        'sinopsis' => 'nullable|string',
        'director' => 'nullable|string',
        'age' => 'nullable|integer',
        'duration' => 'nullable|string|regex:/^\d{2}:\d{2}:\d{2}$/',
        'trailer_url' => 'nullable|string',
        'price' => 'nullable|integer',
    ]);

    $movies = Movie::findOrFail($id);

    // Proses upload gambar
    if ($request->hasFile('img_url')) {
        // Hapus gambar lama jika ada
        if ($movies->img_url && file_exists(public_path('images/' . $movies->img_url))) {
            unlink(public_path('images/' . $movies->img_url));
        }

        $imageName = time().'.'.$request->img_url->extension();
        try {
            $request->img_url->move(public_path('images'), $imageName);
        } catch (\Exception $e) {
            Log::error("Error uploading image: {$e->getMessage()}");
            //return back()->withErrors('Error uploading image: ' . $e->getMessage());
            //log::error("Error {$e->getMessage()}");
        }        
    } else {
        $imageName = $movies->img_url; // Jika tidak ada gambar baru, gunakan gambar yang lama
    }

    try {
        $movies->update([
            'name' => $request->name,
            'cast' => $request->cast,
            'img_url' => $imageName, // Update dengan nama file gambar baru jika ada
            'sinopsis' => $request->sinopsis,
            'director' => $request->director,
            'age' => $request->age,
            'duration' => $request->duration,
            'trailer_url' => $request->trailer_url,
            'price' => $request->price
        ]);

        Log::info('Movie updated successfully.', ['id' => $id]);
        return redirect()->route('movie.index')->with('success', 'Movie updated successfully');
    } catch (\Throwable $th) {
        Log::error('Error updating movie: ' . $th->getMessage());
        return back()->withErrors('Gagal menambahkan data. Silakan coba lagi.' . $th->getMessage());
    }
}

public function delete($id)
{
    try {
        $movies = Movie::findOrFail($id);
        $movies->delete();

        // Tambahkan log info jika penghapusan berhasil
        Log::info('Movie deleted successfully.', ['id' => $id, 'name' => $movies->name]);

        return redirect()->route('movie.index')->with('success', 'Movie deleted successfully');
    } catch (\Throwable $th) {
        // Log error jika terjadi kesalahan
        Log::error('Error deleting movie: ' . $th->getMessage(), ['id' => $id]);

        return back()->withErrors('Gagal menghapus data. Silakan coba lagi.');
    }
}

}
