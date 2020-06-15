<?php

namespace App\Http\Controllers;

use App\Song;
use App\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SongController extends Controller
{
    public function getAllsongs(){
        $songs =  Song::all();
        return view('pages.song', ['songs' => $songs]);
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
            //  'time'=> 'required',
            //  'artist_id' => 'required',
            //  'album_id' => 'required',
             'genre' => 'required',
            //  'play_count' => 'required',
         ]);
          if($validator->fails()){
              return response()->json([
                  'error' => $validator->errors(),
              ],404);
            }
            $album = Album::find($albumId);
        
            $path_to_storage = 'songs/' .$album->name. '_'.$album->id. '_songs/'.$request->input('name');
               
            if(!$album) return response()->json(['error'=>'album not found']);

           
        if($request->hasFile('songFile')){
            $filename = $request->file('songFile')->getClientOriginalName();
            $file = $request->file('songFile')->move($path_to_storage. '/songs', $filename);
            $this->songPath = pathinfo($file, PATHINFO_DIRNAME);
            $this->songPath = $this->songPath .'/'. $filename;

        }
             else{
               return response()->json([
                   'message'=>'song should be the file(song)' 
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

              return redirect('/song_form');
    }
}
