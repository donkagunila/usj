<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Category;
use App\Vrequest;
use Auth;

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

       //  $validator = $request->validate([
       //    'name' => 'alphanum|min:6|unique:users',
       //    'email' => 'required|string|email|max:255|unique:users',
       //    'password' => 'required|string|min:8|confirmed',
       // ]);

        $user =  Vrequest::create([
            'user_id' => Auth::id(),
            'name' => request('name'),
            'category' => request('email'),
            'subcat' => request('subcat'),
            'about' => request('about'),
            'location' => request('location'),
            'ward' => request('ward'),
            'district' => request('district'),
            'region' => request('region'),
            'country' => request('country'),
            'phone' => request('phone'),
            'email' => request('email'),
            'address' => request('address'),
            'website' => request('website'),
        ]);

        $request->session()->flash('success', 'Success, Submitted successfuly');
    	return redirect()->route('my-profile');
    }
}
