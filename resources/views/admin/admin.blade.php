@extends('layout.app')

@section('title')

	Administration

@endsection

@section('top')

	<a  href="/home"><li> Home </li></a>
    <a  href="/"><li class="Rig"> Logout </li></a>

@endsection

@section('body')

	<div class="container">
                <div class="row content">
                    <div class="col-md-6">
                        <div>
                            <ul class = "Left1">
                                <li class = "Left2">
                                    <a class = "Left3" href="UpdateNoticeBoard"> Add Notice </a>
                                </li>
                                <li class = "Left2">
                                    <a class = "Left3" href="Ntctm.php"> Delete Notice Board </a>
                                </li>
                                <li class = "Left2">
                                    <a class = "Left3" href="/updateadministration"> Update Administration </a>
                                </li>
                                <li class = "Left2">
                                    <a class = "Left3" href="/updatelibrary"> Update Hall Library </a>
                                </li>
                                <li class = "Left2">
                                    <a class = "Left3" href="/updatedining"> Update Dining </a>
                                </li>
                                <li class = "Left2">
                                    <a class = "Left3" href="/updatecanteen"> Update Canteen </a></li>
                                <li class = "Left2">
                                    <a class = "Left3" href="updateemergencycontact"> Update Emergency Contact </a>
                                </li>
                                <li class = "Left2">
                                    <a class = "Left3" href="updatehousetutor"> Update House Tutor </a>
                                </li>
                                <li class = "Left2">
                                    <a class = "Left3" href="updatehallstuff"> Update Hall Stuff </a>
                                </li>
                                <li class = "Left2">
                                    <a class = "Left3" href="updatehallmosque"> Update Hall Mosque </a>
                                </li>
                                <li class = "Left2">
                                    <a class = "Left3" href="/updateabout"> Update About </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <br>
                            <br>
                            <br>
                            <ul class = "Left1">
                                <li class = "Left2">
                                    <a class = "Left3" href="/admitstudent">Admit Student</a>
                                </li>
                                <li class = "Left2">
                                    <a class = "Left3" href="/viewstudentcomplain"> View Student Complain </a>
                                </li>
                                <li class = "Left2">
                                    <a class = "Left3" href="/studentpayment"> Student Payment</a>
                                </li>
                                <li class = "Left2">
                                    <a class = "Left3" href="/updatecontact"> Update Contact </a>
                                </li>
                                <li class = "Left2">
                                    <a class = "Left3" href="/updatestudentinformation"> Update Student Information </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

@endsection