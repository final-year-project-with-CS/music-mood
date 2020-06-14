<?php

namespace App\Http\Controllers;
use App\Song;
use App\Album;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function songs(){
       $songs =  Song::all();
        return view('pages.song', ['songs' => $songs]);
    }

    // public function albums(){
    //     $albums =  Album::orderBy('name')->paginate(3);
    //      return view('pages.album', ['albums' => $albums]);
    //  }
     public function browses(){
         $browses = Album::all();
         return view('pages.browse', ['browses' => $browses]);
     }
 
}
