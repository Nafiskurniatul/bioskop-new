<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LpMovieController;

Route::get('/', [LpMovieController::class, 'index'])->name('movie.lp');
Route::get('/movie/{id}', [LpMovieController::class, 'detail'])->name('movies.show');