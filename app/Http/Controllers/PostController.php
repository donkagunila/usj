<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function store(Request $request)
    {

    	$attributes = request()->validate(['body' => 'required|max:255']);

    	Post::create([
    		'user_id' => auth()->id(),
    		'body' => $attributes['body']
    	]);

    	return redirect()->route('home');
    }
}
