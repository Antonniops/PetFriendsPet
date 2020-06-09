<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'productsorders';

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_id', 'product_id', 'unidades', 'precio_unidad', 'total'
    ];

    /**
     * Get the order of the product_order.
     */
    public function order()
    {
        return $this->belongsTo('App\Order');
    }

    /**
     * Get the product of the productorder.
     */
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
