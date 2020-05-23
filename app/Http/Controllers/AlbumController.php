<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function getAllAlbums()
    {
        $albums = Album::all();

        foreach ($albums as $album) {
            $album->songs;
        }
        return response()->json(['albums' => $albums], 200);
    }

}
