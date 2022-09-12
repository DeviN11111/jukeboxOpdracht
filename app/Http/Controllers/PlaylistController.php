<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Song;

class PlaylistController extends Controller
{
    function addSongToPlaylist(Request $request, $id) {
        $songData = Song::where("id", $id)->first();

        if(!$request->session()->has("playlist")) {
            $playlist = [];
            $request->session()->put('playlist', $playlist);
        }

        $sessionPlaylist = $request->session()->get('playlist');
        array_push($sessionPlaylist, $songData);
        $request->session()->put('playlist', $sessionPlaylist);

        return redirect('playlist');
    }


    function showPlaylist(Request $request) {
        $playlist = $request->session()->get('playlist');

        // $totalDuration = PlaylistController::calculateDuration($playlist);

        return view('playlist', ['playlist' => $playlist]);
    }
}
