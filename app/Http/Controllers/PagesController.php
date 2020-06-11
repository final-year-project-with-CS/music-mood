<?php

namespace App\Http\Controllers;
use App\Song;
use App\Album;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getAllalbums()
    {
        $albums = Album::all();

        foreach ($albums as $album) {
            $album->songs;
        }
        return view("pages.album",['albums' => $album]);
    }
}
