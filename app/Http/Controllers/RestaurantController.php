<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class RestaurantController extends Controller
{
    public function index(){
        $product = Product::all();
        // dd($product);
        return view('pages.user.restaurant', compact('product'));
    }
}
