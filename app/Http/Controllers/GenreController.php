<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    public function show(){
        $genreData = Genre::all();
        return view("genre", ["genreData"=>$genreData]);
    }
}
