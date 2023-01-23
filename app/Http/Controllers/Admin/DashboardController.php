<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function indexAdmin () {
    return view('pages.admin.dashboard');
    }


    public function indexFinance () {
        return view('pages.admin.finance.finance');
        }

}
