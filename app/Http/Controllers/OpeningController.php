<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Opening;

class OpeningController extends Controller
{
    public function index()
    {
    	return Opening::all();	
    }

    public function create() {

    }
}
