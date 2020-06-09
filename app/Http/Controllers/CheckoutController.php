<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{

    protected function checkOutSession($product){

        // Set your secret key. Remember to switch to your live secret key in production!
        \Stripe\Stripe::setApiKey('sk_test_z54RRPaXuWxGmHckqh5Sv4Rb00wUfvEEAW');
        

        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
              'price' => 'sku_HIR6Bx0PUZFMSO',
              'quantity' => 1,
            ],[
              'price' => 'sku_HIR6Bx0PUZFMSO',
              'quantity' => 2,
            ]],
            'mode' => 'payment',
            'success_url' => 'https://example.com/success?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => 'https://example.com/cancel',
        ]);

        return $session;
    }
    
}
