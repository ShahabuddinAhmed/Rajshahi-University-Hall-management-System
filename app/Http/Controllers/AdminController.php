<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentModel;
use App\Info;

class AdminController extends Controller
{
    
    /* Here All Get Method Routes */
    public function admin()
    {
    	return view('admin.admin');
    }

    public function updateAbout()
    {
    	return view('admin.updateAbout');
    }
    
    public function updateAdministration()
    {
    	return view('admin.updateAdministration');
    }

    public function updateCanteen()
    {
    	return view('admin.updateCanteen');
    }
    
    public function updateDining()
    {
    	return view('admin.updateDining');
    }
    
    public function updateLibrary()
    {
    	return view('admin.updateHallLibrary');
    }
    
    public function updateEmergencyContact()
    {
    	return view('admin.updateEmergencyContact');
    }
    
    public function updateHallMosque()
    {
    	return view('admin.updateHallMosque');
    }

    public function updateHallStuff()
    {
        return view('admin.updateHallStuff');
    }

    public function updateHouseTutor()
    {
        return view('admin.updateHouseTutor');
    }

    public function admitStudent()
    {
        return view('admin.admitStudent');
    }

    public function viewStudentComplain()
    {
        return view('admin.viewStudentComplain');
    }

    public function studentPayment()
    {
        return view('admin.studentPayment');
    }

    public function updateStudentInformation()
    {
        return view('admin.updateStudentInformation');
    }

    public function updateContact()
    {
        return view('admin.updateContact');
    }







    /* Here All Post Method Routes */
    public function postAdmitStudent(Request $request)
    {
        
        $fname = $request['fnamen'];
        $lname = $request['lname'];
        $name = $fname.' '.$lname;
        /*if($request['fname'] == "" || $request['lname'] == "" || 
            $request['id'] == "" || $request['dept'] || 
            $request['year'] == "" || $request['session'] ||
            $request['room'] == "" || $request['address'] || 
            $request['mobile'] == "" || $request['roomType'] ||
            $request['birthDay'] == "" )
        {
            return view('admin.admitStudent')->with('error', 'All Inputs Are Required !!!');
        }*/



        $studentInfo = new StudentModel;
        $studentInfo->id = $request['id'];
        $studentInfo->name = $name;
        $studentInfo->dept = $request['dept'];
        $studentInfo->year = $request['year'];
        $studentInfo->session = $request['session'];
        $studentInfo->room = $request['room'];
        $studentInfo->address = $request['address'];
        $studentInfo->mobile = $request['mobile'];
        $studentInfo->roomType = $request['roomType'];
        $studentInfo->birthDay = $request['birthDay'];
        $studentInfo->password = $request['birthDay'];
        $studentInfo->save();

        return redirect('admin');

    }

    public function postAbout(Request $request)
    {
        $infos = new Info;
        $infos->about = $request['about'];
    }

}
