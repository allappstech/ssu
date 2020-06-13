<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:student');
    }
 
    /*
     * After logging as client the dashboard for client
     * @return \Illuminate\Contracts\Support\Referable
     * */
    public function studentDashboard()
    {
        return view('students.dashboard');
    }
}
