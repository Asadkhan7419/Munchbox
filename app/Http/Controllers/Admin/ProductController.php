<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use DB;

class ProductController extends Controller
{
    public function indexProduct () {
        // $products = Product::all();
        // $products = DB::table('products')->leftjoin('categories', 'products.C_id', '=', 'categories.C_id')
        // ->select('products.id','products.image','products.name','products.sku','products.stock','products.price','products.tags','products.updated_at','categories.name as category_name')
        // ->get();
        $products = Product::with('category')
        ->get();
        return view('pages.admin.product.product', compact('products'));
        }
    public function productAdd () {
        $categories = Category::all();
        return view('pages.admin.product.productAdd', compact('categories'));
        }
        public function productInsert (Request $request){

            $request->validate([
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'name' => 'required',
                    'sku' => 'nullable',
                    'stock' => 'nullable',
                    'price' => 'nullable|numeric|min:1|digits_between:1,12',
                    'sale' => 'nullable|numeric|min:1|digits_between:1,12',
                    'category' => 'nullable',
                    'tags' => 'nullable',
                    'description' => 'nullable',
             ]);
            $product =  new Product();
            $product->name = $request->name;
            $product->sku = $request->sku;
            $product->stock = $request->stock;
            $product->price = $request->price;
            $product->sale = $request->sale;
            $product->C_id = $request->category;
            $product->tags = $request->tags;
            $product->description = $request->description;
            $product->save();
            if($request->hasFile('image')){
                $imageName = $request->image->getClientOriginalName();
                $imageName= time().'.'.$request->image->extension();
                $request->image->move(public_path('menu'), $imageName);
                $product->image = $imageName;
                $product->save();
            }
            return redirect('/admin/product');
        }

        public function productEdit ($id){
            $products = Product::find($id);
            $categories = Category::all();
            return view('pages.admin.product.productEdit', compact('products', 'categories'));
        }

        public function productUpdate (Request $request, $id){
            $request->validate([
                    'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'name' => 'required',
                    'sku' => 'nullable',
                    'stock' => 'nullable',
                    'price' => 'nullable|numeric|min:1|digits_between:1,12',
                    'sale' => 'nullable|numeric|min:1|digits_between:1,12',
                    'category' => 'nullable',
                    'tags' => 'nullable',
                    'description' => 'nullable',
                 ]);

                $product = Product::find($id);
                $product->name = $request->name;
                $product->sku = $request->sku;
                $product->stock = $request->stock;
                $product->price = $request->price;
                $product->sale = $request->sale;
                $product->C_id = $request->category;
                $product->tags = $request->tags;
                $product->description = $request->description;
                $product->update();
                if($request->hasFile('image')){
                    $imageName = $request->image->getClientOriginalName();
                    $imageName= time().'.'.$request->image->extension();
                    $request->image->move(public_path('menu'), $imageName);
                    $product->image = $imageName;
                    $product->update();
                }
                return redirect('/admin/product');
        }

        public function productDelete($id){
            $product = Product::find($id);
            $product->delete();
            return back();
        }
}
