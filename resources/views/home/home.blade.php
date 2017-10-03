@extends('layout.app')

@section('title')

    Hall Management System

@endsection

@section('top')
	<a  href="/home" ><li> Home </li></a>
    <a  href="/contact"><li> Contact </li></a>
    <a  href="/about"><li> About </li></a>
    <a  href="/studentlogin"><li class="Rig"> Student Login</li></a>
    <a  href="/adminlogin"><li class="Rig"> Administration Login</li></a>
@endsection

@section('body')
	<div class="container">
            <div class="row content">
                <div class="col-md-7">
                    <div>
                        <ul class = "Left1">
                            <li class = "Left2"><a class = "Left3" href="/noticeboard"> Notice Board </a></li>
                            <li class = "Left2"><a class = "Left3" href="/administration"> Administration </a></li>
                            <li class = "Left2"><a class = "Left3" href="/halllibrary"> Hall Library </a></li>
                            <li class = "Left2"><a class = "Left3" href="/dining"> Dining </a></li>
                            <li class = "Left2"><a class = "Left3" href="/canteen"> Canteen </a></li>
                            <li class = "Left2"><a class = "Left3" href="/emergencycontact"> Emergency Contact </a></li>
                            <li class = "Left2"><a class = "Left3" href="/housetutor"> House Tutor </a></li>
                            <li class = "Left2"><a class = "Left3" href="/hallstaff"> Hall Stuff </a></li>
                            <li class = "Left2"><a class = "Left3" href="/hallmosque"> Hall Mosque </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h2 style="color:white">View Student Information</h2>
                        <div class="field-wrap">
                            <div class="align">

                                <div class="grid">

                                    <form action="ViewStudentInformation.php" method="post" class="search">

                                        <div class="form__field">
                                            <input type="search" name="abs" placeholder="Entire Student ID" class="form__input">
                                            <input type="submit" name="abs1" value="Search" class="button">
                                        </div>

                                    </form>

                                </div>

                            </div>
                        </div> 
                        <br>
                        <br>
                        <br>
                        <h2 style="color:white">Info Room</h2>
                        <div class="field-wrap">
                            <div class="align">

                                <div class="grid">

                                    <form action="ViewRoomInformation.php" method="post" class="search">

                                        <div class="form__field">
                                            <input type="search" name="search" placeholder="Entire Room Number" class="form__input">
                                            <input type="submit" value="Search" class="button" onClick="document.location.href='ViewStudentInformation.php'">
                                        </div>

                                    </form>

                                </div>

                            </div>
                        </div> 
                    </div>
                </div>
                <div class="col-md-1">

                </div>
            </div>
        </div>
@endsection