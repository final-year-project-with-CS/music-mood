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


//song controller route
Route::get('songs', ['uses' => 'SongController@getAllSongs']);
Route::get('song/{songId}', ['uses' => 'SongController@getSong']);
Route::post('song', ['uses' => 'SongController@postSong']);



//album controller route
Route::get('albums', ['uses' => 'AlbumController@getAllalbums']);
Route::get('album/{albumId}',['uses' => 'AlbumController@getAlbum']);
Route::post('album',['uses' => 'AlbumController@postAlbum']);
Route::get('viewAlbumcover/{albumId}',['uses' => 'AlbumController@viewCover']);





Route::get('roles', 'RoleController@index');
Route::get('organizations', 'OrganizationController@index');

