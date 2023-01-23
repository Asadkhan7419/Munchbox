<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use DB;

class MenuController extends Controller
{
    public function indexMenu () {

        // $products = Product::all();
        $products = DB::table('products')->leftjoin('categories', 'products.category', '=', 'categories.id')
        ->select('products.id','products.image','products.name','products.sku','products.stock','products.price','products.tags','products.updated_at','categories.name as category_name')
        ->get();
         return view('pages.admin.menu.menu', compact('products')); //

    }

    public function show(Request $request){
        dd($request);
        return Product::filter($request)->get();
        // $products = DB::table('products')->leftjoin('categories', 'products.category', '=', 'categories.id')
        // ->where('products.id','products.image','products.name','products.sku','products.stock','products.price','products.tags','products.updated_at','categories.name as category_name','categories.id as category_id')
        // ->get();

         return view('pages.admin.menu.menu', compact('products'));
        // return DB::table('Categories')
        // ->join('products','products.category',"=",'Categories.id')
        // ->where('Categories.id', $id)
        // ->get();
        }
}
