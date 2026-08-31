<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/whoami', function () {
    return 'Ralfh Justyn V. Gianan | 2023-70756 | Block 4C | ITRACKB4 Laravel 12';
});

// Must be in this order: featured, filter, then detail, then list
Route::get('/movies/featured', [MovieController::class, 'featured'])->name('movies.featured');
Route::get('/movies/filter/{genre?}', [MovieController::class, 'filter'])->name('movies.filter');
Route::get('/movies/{id}', [MovieController::class, 'show'])->name('movies.show');
Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');
