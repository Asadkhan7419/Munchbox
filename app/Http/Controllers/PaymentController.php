<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;

class PaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('pages.user.payment');
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        // dd($request);

        try
        {

            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            Stripe\Charge::create ([
                    "amount" => 100*100,
                    "currency" => "PKR",
                    "source" => $request->stripeToken,
                    "description" => "This payment is testing purpose of techsolutionstuff",
            ]);
        }catch(\Exception $e){
            dd($e->getMessage());
        }


        Session::flash('success', 'Payment successful!');

        return back();
    }
}
