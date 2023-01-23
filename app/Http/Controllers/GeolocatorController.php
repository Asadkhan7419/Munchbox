<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeolocatorController extends Controller
{
    public function index(){
        return view('pages.user.geolocator');
    }
}
