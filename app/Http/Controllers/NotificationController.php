<?php

namespace Usajili\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
    	return view('app.notification.index');
    }
}
