<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Information;
use App\Notice;
use App\StudentInfo;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function home()
    {
        return view('home.home');
    }

    public function contact()
    {
        $infos = Information::all();
        return view('home.contact', compact('infos'));
    }

    public function about()
    {
        $infos = Information::all();
        return view('home.about', compact('infos'));
    }

    public function studentLogin()
    {
        return view('home.StudentLogin');
    }

    public function adminLogin()
    {
        return view('home.adminLogin');
    }

    public function noticeBoard()
    {
        $notices = Notice::all();
        return view('home.noticeBoard', compact('notices'));
    }

    public function administration()
    {
        $infos = Information::all();
        return view('home.administration', compact('infos'));
    }

    public function hallLibrary()
    {
        $infos = Information::all();
        return view('home.hallLibrary', compact('infos'));
    }

    public function dining()
    {
        $infos = Information::all();
        return view('home.dining', compact('infos'));
    }

    public function canteen()
    {
        $infos = Information::all();
        return view('home.canteen', compact('infos'));
    }

    public function emergencyContact()
    {
        return view('home.emergencyContact');
    }

    public function houseTutor()
    {
        return view('home.houseTutor');
    }

    public function hallStaff()
    {
        return view('home.hallStaff');
    }

    public function hallMosque()
    {
        return view('home.hallMosque');
    }

    /*public function viewstudentinfo(Request $request)
    {
        $id = $request["id"];
        $studentInfoes = StudentInfo::find($id);
        return view('home.viewStudentInfo', compact('studentInfoes'));
    }*/



















































    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
