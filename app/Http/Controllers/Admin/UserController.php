<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function index()
    {
    	return view('admin.user.index');
    }

    public function create()
    {
    	return view('admin.user.create');
    }

    public function all()
    {
    	return User::all();
    }
}
