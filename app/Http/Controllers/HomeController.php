<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Setting;
use DB;

class HomeController extends Controller
{
    public function index(){
        // $user_name = Auth::user()->first_name;
    //    return view('pages.home', compact('user_name'));
       return view('pages.user.home');
    }

    public function listview(){
        return view('pages.user.listview');
    }
}
