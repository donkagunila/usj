<?php

namespace Usajili\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
    	return view('app.message.index');
    }
}