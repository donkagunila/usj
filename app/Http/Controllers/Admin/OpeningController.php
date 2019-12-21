<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Opening;

class OpeningController extends Controller
{
    public function index()
    {
    	$openings = Opening::all();
    	return view('admin.opening.index', compact('openings'));
    }

    public function create()
    {
    	return view('admin.opening.create');
    }

    public function save(Request $request)
    {
    	return $request->all();
    }
}
