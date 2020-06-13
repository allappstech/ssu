<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //Import Auth

class LoginPageController extends Controller
{
    public function showAdminLoginForm()
{
    return view('auth.login', ['url' => '']);
}

public function adminLogin(Request $request)
{
    $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:6'
    ]);
 
    if (Auth::guard('student')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
 
        return redirect()->intended('/student');
    }
    return back()->withInput($request->only('email', 'remember'));
}

/**
 * @return Factory|View
 */
public function showAdminRegisterForm()
{
    return view('auth.register', ['url' => 'admin']);
}
 
/**
 * @param Request $request
 *
 * @return RedirectResponse
 */
protected function createAdmin(Request $request)
{
    $this->validator($request->all())->validate();
    Admin::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);
    return redirect()->intended('login/admin');
}
 

}
