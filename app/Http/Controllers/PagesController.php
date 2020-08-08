<?php

namespace App\Http\Controllers;
use App\Song;
use App\Album;
use App\Artist;
use App\Abusive;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
     public function dashboard(){
         $dashboards = Album::all();
         return view('pages.dashboard', ['dashboards' => $dashboards]);
     }
     
     public function browses(){
        $browses = Album::orderBy('name')->paginate(3);
        return view('pages.browse', ['browses' => $browses]);
    }
    public function artists(){
        $artists = Artist::all();
        return view('pages.artist', ['artists' => $artists]);
    }

    public function verifySong(){
        $songs = Song::all();
        $abusives = Abusive::all();
        return view('pages.verify_song', [
            'songs' => $songs,
            'abusives' => $abusives
            ]);
    }
   
   
    public function show($id)
    {
        $abusives = Abusive::query()->where('song_id', $id)->get();

        return $abusives;
    }
}
