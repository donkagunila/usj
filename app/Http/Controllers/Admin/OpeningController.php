<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Opening;
use Illuminate\Support\Facades\Log;

class OpeningController extends Controller
{
    public function index()
    {
    	$openings = Opening::all();
    	return view('admin.opening.index', compact('openings'));
    }

    public function create()
    {

        Log::channel('command')->info('Something happened!');
        $categories = Category::all();
    	return view('admin.opening.create', compact('categories'));
    }

    public function save(Request $request)
    {
    	return $request->all();
    }
}
