<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function student()
    {
    	return view('student.student');
    }

    public function changePassword()
    {
    	return view('student.changePassword');
    }

    public function viewMyPayment()
    {
    	return view('student.viewMyPayment');
    }
}
