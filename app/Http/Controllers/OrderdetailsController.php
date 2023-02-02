<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Detail;
use Session;

class OrderdetailsController extends Controller
{
    public function index(){
        return view('pages.user.orderDetails');
    }

    public function store(Request $request)
{
                $cart = session('cart');
                $amount_paid = 0;

                if ($cart) {
                foreach ($cart as $id => $details) {
                    $amount_paid += $details['price']* $details['quantity'];
                        }
                     }

                     $lastOrder = Order::orderBy('id', 'desc')->first();
                     $orderNumber = ($lastOrder) ? $lastOrder->id + 1 : 1;

    $order = Order::create([
        'customer_id' => $request->user()->id,
        'amount_paid' => $amount_paid,
        'order_number' => $orderNumber,
    ]);

    foreach ($cart as $id => $details) {
        $existingDetail = $order->details()
            ->where('item', $details['name'])
            ->first();

        if ($existingDetail) {
            $existingDetail->quantity += $details['quantity'];
            $existingDetail->price = $details['price'];
            $existingDetail->save();
        } else {
            $order->details()->create([
                'item' => $details['name'],
                'quantity' => $details['quantity'],
                'price' => $details['price']*$details['quantity'],
            ]);
        }
    }
    Session::forget('cart');
    return back()->with([
        'message' => 'Order placed successfully',
    ], 201);
}
}
