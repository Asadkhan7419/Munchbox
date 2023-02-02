<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Session;

class RestaurantController extends Controller
{
    public function index(){
        $product = Product::all();
        // dd($product);
        return view('pages.user.restaurant', compact('product'));
    }

    public function cart()
    {
        return view('cart');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    // public function addToCart($id)
    // {
    //     // dd($id);
    //     $product = Product::find($id);

    //     if(!$product) {
    //         abort(404);
    //     }

    //     $cart = session()->get('cart', []);

    //     if(!$cart) {
    //         $cart = [
    //                 $id => [
    //                     "name" => $product->name,
    //                     "quantity" => 1,
    //                     "price" => $product->price,
    //                     "photo" => $product->photo
    //                 ]
    //         ];
    //         session()->put('cart', $cart);
    //         return back()->with([
    //             'message' => 'Product added to cart successfully!',
    //         ], 201);
    //     }

    //     if(isset($cart[$id])) {
    //         $cart[$id]['quantity']++;
    //     } else {
    //         $cart[$id] = [
    //             "name" => $product->name,
    //             "quantity" => 1,
    //             "price" => $product->price,
    //             "image" => $product->image
    //         ];
    //     }
    //     session()->put('cart', $cart);
    //     return redirect()->back()->with('success', 'Product added to cart successfully!');
    // }
    public function addToCart($id)
{
    $product = Product::find($id);

    if(!$product) {
        abort(404);
    }

    $cart = session()->get('cart', []);

    if(!$cart) {
        $cart = [
                $id => [
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $product->sale ? $product->sale : $product->price,
                    "photo" => $product->photo
                ]
        ];
        session()->put('cart', $cart);
        return back()->with([
            'message' => 'Product added to cart successfully!',
        ], 201);
    }

    if(isset($cart[$id])) {
        $cart[$id]['quantity']++;
    } else {
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->sale ? $product->sale : $product->price,
            "image" => $product->image
        ];
    }
    session()->put('cart', $cart);
    return redirect()->back()->with('success', 'Product added to cart successfully!');
}

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        dd($request);
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }

    public function empty(){
        Session::forget('cart');
        return back()->with([
            'message' => 'Bag empty successfully',
        ], 201);
    }
}
