<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SongOverview;

class SongoverviewController extends Controller
{
    public function show($songData){
        $songData = Song::where("name", $songData->name); // where genre id =
        return view("songOverview", ["songData"=>$songData]);
    }
}
