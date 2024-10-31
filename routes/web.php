<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GenreController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('admin.admin_dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/lpWeb.php';

Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Route::prefix('movie')->group(function(){
    Route::get('/view', [MovieController::class, 'index'])->name('movie.index');
    Route::get('/add', [MovieController::class, 'create'])->name('movie.add');
    Route::post('/store', [MovieController::class, 'store'])->name('movie.store');
    Route::get('/detail/{id}', [MovieController::class, 'show'])->name('movie.show');
    Route::get('/edit/{id}', [MovieController::class, 'edit'])->name('movie.edit');
    Route::put('/update/{id}', [MovieController::class, 'update'])->name('movie.update');
    Route::get('/delete/{id}', [MovieController::class, 'delete'])->name('movie.delete');
    Route::get('/search', [MovieController::class,'search'])->name('movie.search');
// });

    Route::get('/genre/view', [GenreController::class, 'index'])->name('genre.index');
    Route::get('/genre/add', [GenreController::class, 'create'])->name('genre.add');
    Route::post('/genre/store', [GenreController::class, 'store'])->name('genre.store');

