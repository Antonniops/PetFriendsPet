<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productsorders', function (Blueprint $table) {
            $table->id();
 
            $table->bigInteger('order_id')->unsigned();  
            $table->bigInteger('product_id')->unsigned(); 
     
            $table->integer('unidades');
            $table->float('precio_unidad', 6, 2);
            $table->float('total', 6, 2);
            

            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productsorders');
    }
}
