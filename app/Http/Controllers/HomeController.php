<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Opening;

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
        return view('app.feed');
    }

    public function openings()
    {

        $openings = Opening::all();
        return view('app.opening', compact('openings'));
    }
}
