<?php

namespace Usajili\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Usajili\Http\Controllers\Controller;

use Usajili\Opening;

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
