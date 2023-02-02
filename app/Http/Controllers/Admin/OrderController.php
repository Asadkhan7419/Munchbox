<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Detail;

class OrderController extends Controller
{
    public function index(){
        $order = Detail::with('order')->get();
        // dd($order);
        return view('pages.admin.order.order', compact('order'));
    }

}
