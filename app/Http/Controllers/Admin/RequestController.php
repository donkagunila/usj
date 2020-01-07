<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Vrequest;

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
