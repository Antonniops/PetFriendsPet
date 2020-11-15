<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Order extends Model
{

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'estado', 'fecha_pedido', 'email', 'codigo_postal', 'municipio', 'calle', 'numero'
    ];

    /**
     * Get the user of the order.
     */
    public function user()
    {
        return $this->belongsTo('App\User')->withDefault();
    }

    /**
     * Get the orders for a client.
     */
    public function product_orders()
    {
        return $this->hasMany('App\ProductOrder');
    }

    /**
     * Shows a list of orders.
     *
     * @return array
     */
    public static function getOrders(){

        $orders = DB::table('orders')
                            ->select(DB::raw('orders.id, estado, fecha_pedido, email, codigo_postal, calle, numero, municipio, sum(productsorders.total) as total'))
                            ->join('productsorders', 'orders.id', '=', 'productsorders.order_id')
                            ->orderBy('fecha_pedido', 'desc')
                            ->groupBy('orders.id')
                            ->get();

        return $orders;
    }


    /**
     * Shows a specific order.
     * @param  integer Product id
     * @return array
     */
    public static function getOrder($id){

        $order = DB::table('productsorders')
                            ->select('products.nombre', 'products.imagen', 'productsorders.unidades', 'productsorders.precio_unidad', 'productsorders.total')
                            ->join('products', 'productsorders.product_id', '=', 'products.id')
                            ->where('productsorders.order_id', '=', $id)
                            ->get();

        return $order;
    }

    /**
     * Marks a order as completed.
     * @param  integer Order id
     * @return \Illuminate\Http\Response
     */
    public static function complete_order($order_id){

        // Comprobamos que haya una id valida
        if(!$order_id){
            return false;
        }

        // Encontramos el pedidod solicitado
        $order = Order::find($order_id);

        // Comprobar estado del pedido
        if($order->estado == "pendiente_pago"){
            return false;
        }

        // Marcamos como completado
        $order->estado = "completado";
        $order->save();
        
        // Respuesta json
        return true;

    }
}
