<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enrollment;

class EnrollmentController extends Controller
{
    public function index()
    {

    	$enrollments = Enrollment::all();
    	return view('app.enrollment.index', compact('enrollments'));
    }
}
