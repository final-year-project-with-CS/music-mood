<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Song;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('welcome', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('auth.login');
});


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

//browses
Route::get('/browse', ['uses' => 'PagesController@browses']);


Route::get('/radio', function () {
    return view('pages.radio');
});

Route::get('/recentlyadded', function () {
    return view('pages.recentlyadded');
});

Route::get('/artist', function () {
    return view('pages.artist');
});


//songs
Route::get('/song', ['uses' => 'SongController@getAllsongs']);
Route::get('song_view/{songId}', ['uses' => 'SongController@getSong']);
Route::post('storeSong/{albumId}', ['uses' => 'SongController@postSong']);
Route::delete('deleteSong/{songId}' ,['uses' => 'SongController@deleteSong']);

//album form
Route::get('/song_form', function () {
    return view('pages.song_form');
});



//album
// Route::get('/album', ['uses' => 'AlbumController@albums']);

Route::get('album', ['uses' => 'AlbumController@getAllalbums']);
// Route::get('album/{albumId}',['uses' => 'AlbumController@getAlbum']);
Route::post('store',['uses' => 'AlbumController@postAlbum']);
// Route::get('viewAlbumcover/{albumId}',['uses' => 'AlbumController@viewAlbumcover']);

//album form
Route::get('/album_form', function () {
    return view('pages.album_form');
});


//artists
Route::get('/verify', ['uses' => 'ArtistController@getArtists']);
Route::post('/storeArtist', ['uses' => 'ArtistController@postArtist']);


Route::get('/upload', function () {
    return view('pages.upload');
});

Route::get('/download', function () {
    return view('pages.download');
});

Route::get('/claimpayment', function () {
    return view('pages.claimpayment');
});

Route::get('/verifySong', function () {
    return view('pages.verify_song');
});

Route::get('/notify', function () {
    return view('pages.notify');
});
Route::get('/profile', function () {
    return view('pages.profile');
});
Route::get('/editprofile', function () {
    return view('pages.editprofile');
});




Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
