<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    public function show($genre_id){
        $songData = Song::all(); // where genre id =
        return view("songs", ["songData"=>$songData]);
    }
}
