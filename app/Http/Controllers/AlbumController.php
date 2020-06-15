<?php

namespace App\Http\Controllers;

use App\Album;
use App\User;
use Illuminate\Http\Request;

class AlbumController extends Controller
{

    //get all albums
    public function getAllalbums()
    {
        $albums = Album::orderBy('name')->paginate(3);
        foreach ($albums as $album) {
            $album->songs;
        }
        return view('pages.album', ['albums' => $albums]);
    }

    //get single album
    public function getAlbum($albumId)
    {
        $album = Album::find($albumId);
        if(!$album) 
          return response()->json(['error' => 'album not found']);
          return response()->json(['album' => $album]);
    }

    //post album
    public function postAlbum(Request $request)
    {
        $user = User::find($request->input('artist'));
        $path_to_storage = 'albums/' .$user->name. '_' .$user->id.  '_albums/' .$request->input('album_name');

        if($request->hasFile('cover')){
            $filename = $request->file('cover')->getClientOriginalName();
            $file = $request->file('cover')->move($path_to_storage. '/cover', $filename);
            $this->path = pathinfo($file, PATHINFO_DIRNAME);
            $this->path = $this->path .'/'. $filename;

        }

        $album = new Album();
        $album->name = $request->input('album_name');
        $album->genre = $request->input('genre');
        $album->user_id = 1;
        $album->cover = $this->path;
        $user->albums()->save($album);

       return  redirect('/album_form');
    }

    //view cover album
    public function viewAlbumcover($albumId)
    {
        $album = Album::find($albumId);
        if(!$album) {
            return response()->json(['error' => 'cover not found']);
        }

        $pathToFile = storage_path('/app/' .$album->cover);
        return response()->download($pathToFile);
    }
}
