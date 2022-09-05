<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongoverviewController extends Controller
{
    public function show($songId){
        $songData = Song::where("id", $songId)->get(); // where genre id =
        return view("songOverview", ["songData"=>$songData]);
    }
}
