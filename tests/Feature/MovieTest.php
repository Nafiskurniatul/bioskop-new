<?php

namespace Tests\Feature;

use App\Models\Movie;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MovieTest extends TestCase
{
    use RefreshDatabase; // Menggunakan trait ini untuk mengatur ulang database setiap kali pengujian dijalankan

    public function testIndexReturnsViewWithMovies()
    {
        // Membuat beberapa data movie
        Movie::factory()->count(3)->create();

        // Mengakses route index
        $response = $this->get(route('movie.index'));

        // Memastikan response status adalah 200
        $response->assertStatus(200);

        // Memastikan view yang digunakan adalah 'movies.view_movie'
        $response->assertViewIs('movies.view_movie');

        // Memastikan terdapat data movie dalam view
        $response->assertViewHas('movies');
    }

    // public function testStoreCreatesMovie()
    // {
    //     // Data movie yang akan dikirim
    //     $data = [
    //         'name' => 'Movie Title',
    //         'cast' => 'Cast Name',
    //         'director' => 'Director Name',
    //         // tambahkan data lain yang diperlukan
    //     ];

    //     // Mengirim permintaan untuk menyimpan movie
    //     $response = $this->post(route('movie.store'), $data);

    //     // Memastikan movie berhasil ditambahkan ke database
    //     $this->assertDatabaseHas('movies', [
    //         'name' => 'Movie Title',
    //     ]);

    //     // Memastikan redirect setelah menyimpan
    //     $response->assertRedirect(route('movie.index'));
    // }

    // public function testUpdateModifiesMovie()
    // {
    //     // Membuat movie untuk diuji
    //     $movie = Movie::factory()->create();

    //     // Data baru untuk diupdate
    //     $data = [
    //         'name' => 'Updated Movie Title',
    //         'cast' => 'Updated Cast Name',
    //         'director' => 'Updated Director Name',
    //     ];

    //     // Mengirim permintaan untuk mengupdate movie
    //     $response = $this->put(route('movie.update', $movie->id), $data);

    //     // Memastikan movie diupdate di database
    //     $this->assertDatabaseHas('movies', [
    //         'name' => 'Updated Movie Title',
    //     ]);

    //     // Memastikan redirect setelah mengupdate
    //     $response->assertRedirect(route('movie.index'));
    // }

    // public function testDeleteRemovesMovie()
    // {
    //     // Membuat movie untuk diuji
    //     $movie = Movie::factory()->create();

    //     // Mengirim permintaan untuk menghapus movie
    //     $response = $this->delete(route('movie.delete', $movie->id));

    //     // Memastikan movie dihapus dari database
    //     $this->assertDatabaseMissing('movies', [
    //         'id' => $movie->id,
    //     ]);

    //     // Memastikan redirect setelah menghapus
    //     $response->assertRedirect(route('movie.index'));
    // }
}
