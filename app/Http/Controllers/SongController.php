<?php

namespace App\Http\Controllers;

use App\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function getAllSongs() {
        return response()->json(['songs' => Song::all()],200);
    }


    
    public function getSong($songId){
        $song = Song::find($songId);
        if(!$song)
            return response()->json(['error'=>'Song does not found'],404);
            return response()->json(['song'=>$song],200);
        
    }
}
