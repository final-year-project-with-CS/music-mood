<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;

class PagesController extends Controller
{
    public function song(){
        $song = Song::all();
        return view('pages.song',['songs'=>$song]);

    }
}
