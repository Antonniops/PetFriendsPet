<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{

    protected function checkOutSession(Request $request){

        // Set your secret key. Remember to switch to your live secret key in production!
        \Stripe\Stripe::setApiKey('sk_test_z54RRPaXuWxGmHckqh5Sv4Rb00wUfvEEAW');

        

        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [
              [
                'price_data' => [
                  'unit_amount_decimal' => $request->total_price * 100,
                  'currency' => 'eur',
                  'product' => 'prod_HT97JPLupl6wFJ'
                ],
                'quantity' => 1,
              ]
            ],
            'mode' => 'payment',
            'success_url'=> 'http://petfriendspet.com/pago/confirmacion',
            'cancel_url'=> 'http://petfriendspet.com/pago/cancelado',
        ]);

        
        return $session;

      }
    
}
