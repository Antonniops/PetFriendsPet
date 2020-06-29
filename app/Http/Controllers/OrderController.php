<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\ProductOrder;
use App\User;
use App\Mail\ConfirmOrder;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * Store a newly order.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Creacion del pedido
        Order::create([
            'user_id' => $request->input('id'),
            'estado' => $request->input('estado'),
            'fecha_pedido' => date('Y-m-d'),
            'email' => $request->input('datosEnvio.email'),
            'codigo_postal' => $request->input('datosEnvio.codigo_postal'),
            'calle' => $request->input('datosEnvio.calle'),
            'numero' => $request->input('datosEnvio.numero'),
            'municipio' => $request->input('datosEnvio.municipio')
        ]);

        //Datos para los detalles del pedidio
        $order_id = Order::select('id')->latest('id')->first();
        $carrito = $request->input('carrito');

        //Insercion de lineas de detalle del producto
        foreach ($carrito as $product) {
            # code...
            ProductOrder::create([
                'order_id' => $order_id['id'],
                'product_id' => $product['id'],
                'unidades' => $product['cantidad_producto'],
                'precio_unidad' => $product['precio'],
                'total' => $product['cantidad_producto'] * $product['precio']
            ]);
        }

        $order = Order::select('orders.id', 'unidades', 'precio_unidad', 'total', 'nombre')
                            ->join('productsorders', 'orders.id', '=', 'productsorders.order_id')
                            ->join('products', 'productsorders.product_id', '=', 'products.id')
                            ->where('orders.id', $order_id['id'])
                            ->get();


        Mail::to($request->input('datosEnvio.email'))->send(new ConfirmOrder($order));
        Mail::to('testantonniops@gmail.com')->send(new ConfirmOrder($order));


        return response()->json(['Pago realizado']);



    }
}
