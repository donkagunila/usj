<?php

namespace Usajili\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

	public function __construct()
    {
        $this->middleware('guest');
    }

    
    public function index()
    {
    	return view('site.index');
    }
}
