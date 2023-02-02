<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function indexlogin(){
        return view('pages.user.login');
    }

    public function login(Request $request){
            $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
        // dd($request->only('email', 'password'));
        if(Auth::guard('customer')->attempt($request->only(['email','password']), $request->get('remember'))){
            return redirect('/')->with('login successfull');
        }
        dd('invalid');
        return redirect('/login')->with('Login details invalid');
    }

        // REGISTER
    public function index(){
        return view('pages.user.register');
    }

    public function register(Request $request, Customer $customer){

        $request->validate([
                'firstname'=> 'required',
                'lastname'=> 'required',
                'email'=> 'required|email|unique:registers',
                'password'=> 'required|min:8'
        ]);

        $customer->firstName = $request->firstname;
        $customer->lastName = $request->lastname;
        $customer->email = $request->email;
        $customer->password = Hash::make($request->password);
        $customer->status = 1;
        $customer->save();


       return redirect('/register')->with('status','Account Created Successfuly');
    }

    //     if(Auth::attempt($request->only('email', 'password'))){
    //         return redirect('/login')->withError('login details are not valid');
    //     }
    //     return redirect('/');
//     }

    // LOGOUT
    public function logout(){
        \Session::flush();
        \Auth::logout();
        return redirect('/login');
    }
}
