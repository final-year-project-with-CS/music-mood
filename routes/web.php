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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::get('/browse', function () {
    return view('pages.browse');
});

Route::get('/radio', function () {
    return view('pages.radio');
});

Route::get('/recentlyadded', function () {
    return view('pages.recentlyadded');
});

Route::get('/artist', function () {
    return view('pages.artist');
});

Route::get('/album', function () {
    return view('pages.album');
});

// Route::get('/song', function () {
//     return view('pages.song');
// });

Route::get('song', 'Pagescontroller@song');


Route::get('/upload', function () {
    return view('pages.upload');
});

Route::get('/download', function () {
    return view('pages.download');
});

Route::get('/claimpayment', function () {
    return view('pages.claimpayment');
});

Route::get('/verify', function () {
    return view('pages.verify');
});

Route::get('/notify', function () {
    return view('pages.notify');
});
Route::get('/login', function () {
    return view('pages.login');
});
Route::get('/profile', function () {
    return view('pages.profile');
});


