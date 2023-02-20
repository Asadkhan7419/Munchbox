<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function adminLogin () {
        return view('pages.admin.auth.login');
    }

    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    public function login(Request $request){

        $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:6'
    ]);

    if(Auth::guard('web')->attempt($request->only('email', 'password'))){

        return redirect('/admin/dashboard')->with('login successfull');
    }
    return redirect('/admin/login')->with('Login details invalid');
    }

    public function adminSignup () {
        return view('pages.admin.auth.signup');
    }
    public function adminReset () {
        return view('pages.admin.auth.reset');
    }

    public function logout(){
        \Session::flush();
        Auth::logout();
        return redirect('/admin/login');
    }

}
