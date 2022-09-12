<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\SongoverviewController;
use App\Http\Controllers\PlaylistController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/genres', [GenreController::class, "show"]);

Route::get('/songs/{genreId}', [SongController::class, "show"]);

Route::get('/songOverview/{songId}', [SongoverviewController::class, "show"]);

Route::get('/addToPlaylist/{id}', [PlaylistController::class,"addSongToPlaylist"]);

Route::get('/playlist', [PlaylistController::class,"showPlaylist"]);