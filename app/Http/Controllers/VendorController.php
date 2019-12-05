<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class VendorController extends Controller
{

	function __construct($foo = null)
	{
		$this->middleware('auth');
	}
    public function join()
    {
    	$categories = Category::all();
    	return view('app.vendor.join', compact('categories'));
    }

    public function save(Request $request)
    {
    	return $request->all();
    }
}
