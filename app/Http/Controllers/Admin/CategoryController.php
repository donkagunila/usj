<?php

namespace Usajili\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Usajili\Http\Controllers\Controller;

use Usajili\Category;

class CategoryController extends Controller
{
    public function index()
    {
    	$categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    public function save(Request $request)
    {

    	Category::create([
    		'title' => request('title'),
    		'description' => request('description'),
    	]);

    	$request->session()->flash('success', 'Success, Category created successfully');
    	return redirect()->route('admin.category.all');
    }
}
