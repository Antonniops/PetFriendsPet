<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
