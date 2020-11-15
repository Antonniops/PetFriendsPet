<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\ProductOrder;
use App\User;
use App\Product;
use App\Mail\ConfirmOrder;
use Illuminate\Support\Facades\Mail;
use Log;
use DB;

class OrderController extends Controller
{

    /**
     * Shows a list of orders.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Recibe todos los pedidos para mostrarlos
        $orders = Order::getOrders();

        return response()->json($orders, 201);

    }

    /**
     * Shows details of order.
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        $id = $request->input('id');

        //Recibe todos los pedidos para mostrarlos
        $order = Order::getOrder($id);

        return response()->json($order, 201);

    }


    /**
     * Store a newly order.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Datos de envío
        $datos_envio = $request->input('datosEnvio');

        // Control de datos de envío
        if(empty($datos_envio)){
            return response()->json(['Debes proporcionar los datos de envío'], 400);
        }

        // Instancia de Order nueva
        $order = new Order;
        $order->user_id = $request->input('id');
        $order->estado = $request->input('estado');
        $order->fecha_pedido = date('Y-m-d');
        $order->email = $datos_envio['email'];
        $order->codigo_postal = $datos_envio['codigo_postal'];
        $order->calle = $datos_envio['calle'];
        $order->numero = $datos_envio['numero'];
        $order->municipio =$datos_envio['municipio'];

        // La guardamos y obtenemos el id insertado
        $order->save();
        $order_id = $order->id;

        // Datos del carrito
        $carrito = $request->input('carrito');

        // Insercion de lineas de detalles del producto
        foreach ($carrito as $product) {
          
            ProductOrder::create([
                'order_id' => $order_id,
                'product_id' => $product['id'],
                'unidades' => $product['cantidad_producto'],
                'precio_unidad' => $product['precio'],
                'total' => $product['cantidad_producto'] * $product['precio']
            ]);

            // Incrementar contador de ventas del producto
            DB::table('products')->where('id', '=', $product['id'])->increment('ventas');
            
        }

        

        // Return response
        $response = [
            'msg' => 'Pedido realizado',
            'order_id' => $order_id
        ];

        return response()->json($response);

    }

    /**
     * Marks a order as completed.
     *
     * @return \Illuminate\Http\Response
     */
    public function complete_order(Request $request)
    {
        //Id del pedido
        $order_id = $request->input('order_id');

        //Se marca el pedido como completado en la bd
        $response = Order::complete_order($order_id);

        // Comprobamos si se ha podido completar el pedido
        if( ! $response){
            return response()->json(['msg' => "No se ha podido completar el pedido. Comprueba que esté pagado"], 401);
        }

        // Respuesta json
        return response()->json(['msg' => "Se ha completado el pedido correctamente"], 201);

    }


}
