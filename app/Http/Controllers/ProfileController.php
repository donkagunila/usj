<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vrequest;
use App\Profile;
use Auth;

class ProfileController extends Controller
{
    public function index()
    {

    	$user = Auth::user();

    	$requested = $user->vrequest->status;

    	// return $requested;

    	return view('app.profile.index', compact('requested'));
    }
}
