<?php

namespace App\Http\Controllers;

use App\Album;
use App\Song;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Events\UploadedSongEvent;
use Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory;

class SongController extends Controller
{
    public function __construct()
    {
        set_time_limit(8000000);
    }
    public function getAllsongs()
    {
        $songs = Song::all();
        return view('pages.song', ['songs' => $songs]);
    }

    public function getSong($songId)
    {
        $song = Song::find($songId);

        if (!$song) {
            return response()->json(['error' => 'Song does not found'], 404);
        }

        return view('pages.songView', ['song' => $song]);
    }

    //post song
    public function postSong(Request $request, $albumId)
    {
        $validator = Validator::make($request->all(), [
            'time' => 'required',
            'album_id' => 'required',
            'genre' => 'required',
            'play_count' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors(),
            ], 404);
        }
        $album = Album::find((int) $request->input('album_id'));
        $path_to_storage = 'songs/' . $album->name . '_' . $album->id . '_songs/' . $request->input('artist_name');

        if (!$album) {
            return response()->json(['error' => 'album not found']);
        }

        if ($request->hasFile('song_file')) {
            $filename = $request->file('song_file')->getClientOriginalName();
            $file = $request->file('song_file')->move($path_to_storage . '/songs', $filename);
            $this->songPath = pathinfo($file, PATHINFO_DIRNAME);
            $this->songPath = $this->songPath . '/' . $filename;

        } else {
            return response()->json([
                'message' => 'song should be the file(song)',
            ], 404);
        }

        $song = new Song();
        $song->name = $filename;
        $song->time = $request->input('time');
        $song->song_file = $this->songPath;
        $song->artist_id = 1;
        $song->album_id = $request->input('album_id');
        $song->genre = $request->input('genre');
        $song->status = 'pending';
        $song->play_count = $request->input('play_count');
        $album->songs()->save($song);

        // event call 
      event(new UploadedSongEvent($song));
      
        return  back();
    }


    
 public function updateSong(Request $request)
 {
      $validator = Validator::make($request->all(),[
          'status'  =>  'required'
      ]);

      $song  = Song::find($request->input('songId'));
      
                
      
       $song->update([
        'status' => $request->input('request')
        ]);

      return back();

 }


    public function playSong($songId)
    {
        $song = Song::find($songId);
        if (!$song) {
            return response()->json(['error' => 'song not found']);
        }

        $pathToFile = storage_path('/app/songs/a.mp3');

        return response()->download($pathToFile);
    }

    public function deleteSong($songId)
    {

        $audio = Song::find($songId);
        dd($audio);
        if (!$audio) {
            return back()->with('error', 'Song deleted');
        }

        $audio->delete();
        return redirect('pages.songView', ['audio' => $audio]);
    }
}
