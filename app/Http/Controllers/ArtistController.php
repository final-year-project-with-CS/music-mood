<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Artist;
use App\User;


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

        $user = Auth::user();

        $artist = new Artist;
        $artist->user_id = $user->id;
        $artist->first_name = $request->input('fname');
        $artist->last_name = $request->input('lname');
        $artist->user_name = $request->input('uname');
        $artist->label = $request->input('label');
        $artist->genre = $request->input('genre');
        $artist->home_town = $request->input('htown');
        $artist->status = 'Requested';
        $artist->save();

        return back();


 }

 public function updateRequest(Request $request)
 {
      $validator = Validator::make($request->all(),[
          'status'  =>  'required'
      ]);

      $artist = Artist::find($request->input('artistId'));
      $user = $artist->user;
      if($artist->status == 'approve')
      {
        $user->assignRole('Artist');
      }
                
      
       $artist->update([
        'status' => $request->input('request')
        ]);

      return back();

 }
}
