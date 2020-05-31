<?php

namespace Usajili\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Usajili\Http\Controllers\Controller;

use Usajili\Vrequest;

class RequestController extends Controller
{
    public function index()
    {
    	$requests = Vrequest::all();
    	return view('admin.request.index', compact('requests'));
    }

    public function create()
    {
    	
    }
}
