<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class VendorController extends Controller
{
    public function join()
    {
    	$categories = Category::all();
    	return view('app.vendor.join', compact('categories'));
    }
}
