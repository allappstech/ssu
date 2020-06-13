<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/student', function () {
 //   return view('students.student');
//});
//Route::get('/timeTable', function () {
 //   return view('students.timetable');
//});

Auth::routes(); 

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/timeTable', 'TimetableController');
Route::resource('/chat', 'ChatsController');
Route::resource('/Courses', 'CourseRegController');

Route::get('/Register/Courses', 'CourseRegController@create');



  Route::get('/Staff/Login', 'Auth\LoginController@showstaff')->name('staff_login');
  Route::get('/Staff/Register', 'Auth\RegisterController@showstaff')->name('staff_register');
//********************************GET********************************
//LoginController
Route::get('/student', 'Auth\LoginController@showStudentLoginForm')->name('admin_login');
//Route::get('/login/client', 'Auth\LoginController@showClientLoginForm')->name('client_login');
 
//RegisterController
Route::get('/register/student', 'Auth\RegisterController@showStudentRegisterForm')->name('student_register');
//Route::get('/register/client', 'Auth\RegisterController@showClientRegisterForm')->name('client_register');
 
//ClientController
//Route::get('/client', 'ClientController@clientDashboard')->name('client_dashboard');
 
//AdminController
Route::get('/Dashboard', 'StudentsController@studentDashboard')->name('student_dashboard');
 
//HomeController
Route::get('/home', 'HomeController@index')->name('home');
 
//********************************POST********************************
//LoginController
Route::post('/loginstudent', 'Auth\LoginController@loginstudent')->name('loginstudent');
//Route::post('/login/client', 'Auth\LoginController@clientLogin')->name('client_login');
 
//RegisterController
Route::post('/Add/student', 'Auth\RegisterController@createStudent')->name('stu_register');
//Route::post('/register/client', 'Auth\RegisterController@createClient')->name('client_register');
