<?php

namespace App\Http\Controllers;
use App\Song;
use App\Album;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
     public function browses(){
         $browses = Album::all();
         return view('pages.browse', ['browses' => $browses]);
     }
 
}
