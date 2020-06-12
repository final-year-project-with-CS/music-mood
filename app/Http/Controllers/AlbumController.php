<?php

namespace App\Http\Controllers;

use App\Album;
use App\User;
use Illuminate\Http\Request;

class AlbumController extends Controller
{

    
    //get all albums
    public function getAllAlbums()
    {
        $albums = Album::all();

        foreach ($albums as $album) {
            $album->songs;
        }
        return response()->json(['albums' => $albums], 200);
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
        $user = User::find($request->user_id);

        $path_to_storage = 'albums/' .$user->name. '_' .$user->id.  '_albums/' .$request->input('name');

        if($request->hasFile('cover')){
            // $this->path = $request->file('cover')->store($path_to_storage. '/cover');
            $filename = $request->file('cover')->getClientOriginalName();
            $file = $request->file('cover')->move($path_to_storage. '/cover', $filename);
            $this->path = pathinfo($file, PATHINFO_DIRNAME);
            $this->path = $this->path .'/'. $filename;

        }

        $album = new Album();
        $album->name = $request->input('name');
        $album->genre = $request->input('genre');
        $album->user_id = 1;
        $album->cover = $this->path;
        $album->path_to_storage = $path_to_storage;
        $user->albums()->save($album);

       return  response()->json(['album' => $album]);
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
