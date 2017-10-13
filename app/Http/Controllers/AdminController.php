<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentInfo;
use App\Information;
use App\emergency_contact;
use App\HouseTutor;
use App\HallStuff;
use App\HallMosque;
use App\StudentComplain;
use App\Notice;

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
        $complains = StudentComplain::all();
        return view('admin.viewStudentComplain', compact('complains'));
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

    public function addNotice()
    {
        return view('admin.addNotice');
    }

    public function deleteNotice()
    {
        return view('admin.deleteNoticeBoard');
    }




    /* Here All Post Method Routes */
    public function postUpdateAdministration(Request $request)
    {
        $id = 1;
        $Information = Information::find($id);
        $Information->administration = $request['info'];
        $Information->save();
        return redirect('/admin');
    }

    public function postUpdateLibrary(Request $request)
    {
        $id = 1;
        $Information = Information::find($id);
        $Information->library = $request['info'];
        $Information->save();
        return redirect('/admin');
    }

    public function postUpdateDining(Request $request)
    {
        $id = 1;
        $Information = Information::find($id);
        $Information->dining = $request['info'];
        $Information->save();
        return redirect('/admin');
    }

    public function postUpdateCanteen(Request $request)
    {
        $id = 1;
        $Information = Information::find($id);
        $Information->canteen = $request['info'];
        $Information->save();
        return redirect('/admin');
    }

    public function postUpdateContact(Request $request)
    {
        $id = 1;
        $Information = Information::find($id);
        $Information->contact = $request['info'];
        $Information->save();
        return redirect('/admin');
    }

    public function postAbout(Request $request)
    {
        $id = 1;
        $Information = Information::find($id);
        $Information->about = $request['info'];
        $Information->save();
        return redirect('/admin');
    }

    public function postUpdateEmergencyContact(Request $request)
    {
        $id = $request['abc'];
        $contact = emergency_contact::find($id);
        $contact->name = $request['t_name'];
        $contact->phon = $request['t_phon'];
        $contact->save();
        return redirect('/admin');
    }

    public function postUpdateHouseTutor(Request $request)
    {
        $id = $request['abc'];
        $contact = HouseTutor::find($id);
        $contact->name = $request['t_name'];
        $contact->info = $request['info'];
        $contact->save();
        return redirect('/admin');
    }

    public function postUpdateHallStuff(Request $request)
    {
        $id = $request['abcd'];
        $contact = HallStuff::find($id);
        $contact->name = $request['t_name'];
        $contact->phon = $request['t_phon'];
        $contact->info = $request['about'];
        $contact->save();
        return redirect('/admin');
    }

    public function postUpdateHallMosque(Request $request)
    {
        $id = $request['abcd'];
        $contact = HallMosque::find($id);
        $contact->info = $request['info'];
        $contact->save();
        return redirect('/admin');
    }


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



        $studentInfo = new StudentInfo;
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
        return redirect('/admin');

    }

    public function postAddNotice(Request $request)
    {
        $notice = new Notice;
        $notice->notice = $request['notice'];
        $notice->save();
        return redirect('/admin');
    }

}
