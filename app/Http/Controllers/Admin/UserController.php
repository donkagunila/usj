<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Profile;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;



class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    
    public function index()
    {
        $users = User::all();
    	return view('admin.user.index', compact('users'));
    }

    public function create()
    {
    	return view('admin.user.create');
    }

    public function all()
    {
    	return User::all();
    }

    public function save(Request $request)
    {

        $validator = $request->validate([
          'username' => 'alphanum|min:6|unique:users',
          'email' => 'required|string|email|max:255|unique:users',
          'password' => 'required|string|min:8|confirmed',
       ]);

        $user =  User::create([
            'username' => request('username'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
        ]);


        Profile::create([
            'user_id' => $user->id,
        ]);

        $request->session()->flash('success', 'Success, User created successfully');

        return redirect()->route('admin.user.add');
    }
}
