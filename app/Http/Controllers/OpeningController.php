<?php

namespace Usajili\Http\Controllers;

use Illuminate\Http\Request;
use Usajili\Opening;

class OpeningController extends Controller
{
    public function index()
    {
    	return Opening::all();	
    }
}
