<?php

namespace Usajili\Http\Controllers;

use Illuminate\Http\Request;
use Usajili\Opening;
use Usajili\Post;

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

        $posts = Post::all();

        return view('app.feed', compact('posts'));
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
