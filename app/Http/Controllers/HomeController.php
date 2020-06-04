<?php

namespace Usajili\Http\Controllers;

use Illuminate\Http\Request;
use Usajili\Opening;
use Usajili\Post;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    
        return view('app.feed', [

            'posts' => auth()->user()->timeline()
        ]);
    }


    public function dashboard()
    {
        return view('app.dashboard');
    }
    public function openings()
    {

        $openings = Opening::all();
        return view('app.opening', compact('openings'));
    }
}
