<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Setting;
use App\Models\Category;
use DB;

class HomeController extends Controller
{
    public function index(){
        $categories = Category::all();
       return view('pages.user.home', compact('categories'));
    }

    public function listview(){
        return view('pages.user.listview');
    }
}
