<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class StripeController extends Controller
{
    public function payment(Request $request)
    {

        Stripe::setApiKey(config('stripe.sk'));
        $response=Session::create([
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name'=>'get product now !!!'
                    ],
                    'unit_amount'=>$request->price *100,
                ],
                'quantity' => 1,
            ],],
            'mode' => 'payment',
            'success_url' => route('stripe.success'),
            'cancel_url' => route('stripe.cancel'),
        ]);
        return redirect($response->url);
    }
    public function success()
    {
        return redirect()->back()->with('success', 'Payment successful!');
    }
    public function cancel()
    {
        return redirect()->back()->with('fail', 'Payment Failed!');
    }
}
