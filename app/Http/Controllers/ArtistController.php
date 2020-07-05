<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Artist;

class ArtistController extends Controller
{
 public function getArtists()
    {
        $artists = Artist::all();
        return view('pages.verify_artist', [ 'artists' => $artists ]);
    }

 public function postArtist(Request $request) 
   {
        $validator = Validator::make($request->all(),[
        'first_name' =>  'required',
        'last_name'   =>  'required',
        'user_name'   =>  'required',
        'home_town'   =>  'required',
        'label'   =>  'required',
        'genre'   =>  'required'
        ]);


        $artist = new Artist;
        $artist->first_name = $request->input('fname');
        $artist->last_name = $request->input('lname');
        $artist->user_name = $request->input('uname');
        $artist->label = $request->input('label');
        $artist->genre = $request->input('genre');
        $artist->home_town = $request->input('htown');
        $artist->save();

        return redirect('/profile');





 }
}
