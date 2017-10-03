<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/* All Routes for Home's Page */
Route::get('home', 'HomeController@home');
Route::get('contact', 'HomeController@contact');
Route::get('about', 'HomeController@about');
Route::get('studentlogin', 'HomeController@studentLogin');
Route::get('adminlogin', 'HomeController@adminLogin');
Route::get('noticeboard', 'HomeController@noticeBoard');
Route::get('administration', 'HomeController@administration');
Route::get('halllibrary', 'HomeController@hallLibrary');
Route::get('dining', 'HomeController@dining');
Route::get('canteen', 'HomeController@canteen');
Route::get('emergencycontact', 'HomeController@emergencyContact');
Route::get('housetutor', 'HomeController@houseTutor');
Route::get('hallstaff', 'HomeController@hallStaff');
Route::get('hallmosque', 'HomeController@hallMosque');
/* End All Routes for Home's Page */



/* All Routes for Admin's Pages */
Route::get('admin', 'AdminController@admin');
Route::get('updateabout', 'AdminController@updateAbout');
Route::get('updateadministration', 'AdminController@updateAdministration');
Route::get('updatecanteen', 'AdminController@updateCanteen');
Route::get('updatedining', 'AdminController@updateDining');
Route::get('updatelibrary', 'AdminController@updateLibrary');
Route::get('updateemergencycontact', 'AdminController@updateEmergencyContact');
Route::get('updatehallmosque', 'AdminController@updateHallMosque');
Route::get('updatehallstuff', 'AdminController@updateHallStuff');
Route::get('updatehousetutor', 'AdminController@updateHouseTutor');
Route::get('admitstudent', 'AdminController@admitStudent');
Route::get('viewstudentcomplain', 'AdminController@viewStudentComplain');
Route::get('studentpayment', 'AdminController@studentPayment');
Route::get('updatestudentinformation', 'AdminController@updateStudentInformation');
Route::get('updatecontact', 'AdminController@updateContact');
Route::get('addnotice', 'AdminController@addNotice');
Route::get('deletenotice', 'AdminController@deleteNotice');




Route::post('admitstudent', 'AdminController@postAdmitStudent');
Route::post('about', 'AdminController@postAbout');
Route::post('admitstudent', 'AdminController@postAdmitStudent');
Route::post('admitstudent', 'AdminController@postAdmitStudent');
Route::post('admitstudent', 'AdminController@postAdmitStudent');
Route::post('admitstudent', 'AdminController@postAdmitStudent');
Route::post('admitstudent', 'AdminController@postAdmitStudent');
Route::post('admitstudent', 'AdminController@postAdmitStudent');

/* End All Routes for Admin's Pages */


/* All Routes for Student's Pages  */
Route::get('student', 'StudentController@student');
Route::get('changepassword', 'StudentController@changePassword');
Route::get('viewmypayment', 'StudentController@viewMyPayment');
