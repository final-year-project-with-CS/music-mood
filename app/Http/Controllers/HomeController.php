<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $dashboards = Album::all();
        return view('pages.dashboard', ['dashboards' => $dashboards]);
    }
}
