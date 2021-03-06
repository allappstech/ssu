<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Student;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        // $this->middleware('guest:student')->except('logout');
    }
 
public function showStudentLoginForm()
{
    return view('/', ['url' => '/']);
}

public function showstaff()
{
    return view('login.Login', ['url' => '/Staff/Login']);
}


 
public function loginstudent(Request $request)
{
    $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:6'
    ]);
 
    if (Auth::guard('student')
        ->attempt(['email' => $request->email, 'password' => $request->password], $request
        ->get('remember'))) {
 
        return redirect()->intended('/Dashboard');
    }
    return back()->withInput($request->only('email', 'remember'));
}
}
