<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentComplain;

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

    public function postStudent(Request $request)
    {
        $complain = new StudentComplain;
        $complain->name = $request['name'];
        $complain->std_id = $request['std_id'];
        $complain->room = $request['room'];
        $complain->complain = $request['complain'];
        $complain->save();
        return view('/student.student');
    }
}
