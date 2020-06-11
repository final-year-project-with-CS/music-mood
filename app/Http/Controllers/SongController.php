<?php

namespace App\Http\Controllers;

use App\Song;
use App\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SongController extends Controller
{
    //get all songs
    public function getAllSongs() {
        return response()->json(['songs' => Song::all()],200);
    }


    //get single song
    public function getSong($songId){
        $song = Song::find($songId);
        if(!$song)
            return response()->json(['error'=>'Song does not found'],404);
            return response()->json(['song'=>$song],200);
        
    }

    //post song
    public function postSong(Request $request, $albumId)
    {
         $validator = Validator::make($request->all(),[
             'name'=>'required',
             'time'=> 'required',
             'artist_id' => 'required',
             'album_id' => 'required',
             'genre' => 'required',
             'play_count' => 'required',
             'song_file'=> 'required'
         ]);
          if($validator->fails()){
              return response()->json([
                  'error' => $validator->errors(),
              ],404);

            }
            $album = Album::find($albumId);

            $path_to_storage = 'songs/' .$album->name. '_'.$album->id. '_songs/'.$request->input('name');

            if(!$album) return response()->json(['error'=>'album not found']);

            if($request->hasFile('song_file')){
                $this->songPath = $request->file('song_file')->store('Songs');
           }else{
               return response()->json([
                   'message'=>'song should be thefile(song)' 
               ],404);
           }

              $song = new Song();
              $song->name = $request->input('name');
              $song->time = 0;
              $song->song_file = $this->songPath;
              $song->artist_id = 0;
              $song->album_id = 0;
              $song->genre = $request->input('genre');
              $song->play_count = 0;
              $album->songs()->save($song);

              return response()->json([
                  'song' => $song
              ],200);
    }
}
