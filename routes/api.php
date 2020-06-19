<?php

use App\Http\Controllers\AlbumController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//user controller route
Route::get('users', 'UserController@getAllUsers');
Route::get('user/{userId}', 'UserController@getUser');


//song controller route
Route::get('songs', ['uses' => 'SongController@getAllsongs']);
Route::get('song/{songId}', ['uses' => 'SongController@getSong']);
Route::post('song/{albumId}', ['uses' => 'SongController@postSong']);

Route::get('playSong/{songId}',['uses' => 'SongController@playSong']);


//album controller route
// Route::get('albums', ['uses' => 'AlbumController@getAllalbums']);
// Route::get('album/{albumId}',['uses' => 'AlbumController@getAlbum']);
// Route::post('album',['uses' => 'AlbumController@postAlbum']);
// Route::get('viewAlbumcover/{albumId}',['uses' => 'AlbumController@viewAlbumcover']);




//role route
Route::get('roles', 'RoleController@index');

//organization route
Route::get('organizations', 'OrganizationController@index');

