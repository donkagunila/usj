<?php

namespace Usajili\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Usajili\Http\Controllers\Controller;

class MailController extends Controller
{
    public function all()
    {
    	return Mail::all();
    }
}
