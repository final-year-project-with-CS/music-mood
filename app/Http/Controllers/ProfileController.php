<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;
use App\Abusive;


class ProfileController extends Controller
{
    public function Profile(){
        $songs = Song::all();
        $abusives = Abusive::all();
        return view('pages.profile', [
            'songs' => $songs,
            'abusives' => $abusives
            ]);
    }
    
}
