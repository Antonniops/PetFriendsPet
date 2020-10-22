<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Mail\ConfirmOrder;
use Illuminate\Support\Facades\Mail;
use Log;

class CheckoutController extends Controller
{

    protected function checkOutSession(Request $request){

        // Set your secret key. Remember to switch to your live secret key in production!
        \Stripe\Stripe::setApiKey('sk_test_z54RRPaXuWxGmHckqh5Sv4Rb00wUfvEEAW');

        $unique_token = md5(rand(1, 10) . microtime());

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
            'metadata' => [
              'order_id' => $request->order_id,
              'email' => $request->email
            ],
            'mode' => 'payment',
            'success_url'=> 'http://www.petfriendspet.com/pago/' .  $unique_token . '/confirmacion',
            'cancel_url'=> 'http://www.petfriendspet.com/pago/'  .  $unique_token . '/cancelado',
        ]);

        
        return $session;

      }

      /**
     * Store a newly order.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
      public function check_order_status(){
        // Set your secret key. Remember to switch to your live secret key in production!
        // See your keys here: https://dashboard.stripe.com/account/apikeys
        \Stripe\Stripe::setApiKey('sk_test_z54RRPaXuWxGmHckqh5Sv4Rb00wUfvEEAW');

        // You can find your endpoint's secret in your webhook settings
        $endpoint_secret = 'whsec_3oLVJmvsRM8NLTuEi5YHTjoiFtvYAcbO';

        $payload = @file_get_contents('php://input');
        $sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'];
        $event = null;

        Log::alert($payload);

        try {

          $event = \Stripe\Webhook::constructEvent(
            $payload, $sig_header, $endpoint_secret
          );

        } catch(\UnexpectedValueException $e) {

          // Invalid payload
          http_response_code(400);
          exit();
          
        } catch(\Stripe\Exception\SignatureVerificationException $e) {

          // Invalid signature
          http_response_code(400);
          exit();

        }

        // Handle the checkout.session.completed event
        if ($event->type == 'checkout.session.completed') {

          // Session data object
          $session = $event->data->object;

          // Fulfill the purchase...
          $metadata = $session->metadata;

          // Data for order creation
          $order_id = $metadata->order_id;
          $email = $metadata->email;

          // Get order data
          $order = Order::select('orders.id', 'unidades', 'precio_unidad', 'total', 'nombre')
                            ->join('productsorders', 'orders.id', '=', 'productsorders.order_id')
                            ->join('products', 'productsorders.product_id', '=', 'products.id')
                            ->where('orders.id', $order_id)
                            ->get();

          // Cambiamos el estado del pedido
          Order::where('id', $order_id)->update(['estado' => 'pendiente']);

          // Send confirm email 
          Mail::to($email)->send(new ConfirmOrder($order));
          Mail::to('testantonniops@gmail.com')->send(new ConfirmOrder($order));


        }

        http_response_code(200);

      }

    /**
     * Store a newly order.
     *
     * @param  array  Payment session object
     * @return \Illuminate\Http\Response
     */
    public function handle_checkout_session($session){

      http_response_code(200);

    }
}
