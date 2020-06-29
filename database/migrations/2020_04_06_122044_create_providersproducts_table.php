<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvidersproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplyproduct', function (Blueprint $table) {
            $table->id();
           
            $table->bigInteger('provider_id')->unsigned();
            $table->bigInteger('product_id')->unsigned();

            $table->integer('unidades_prod');  
            $table->float('precio_unitario', 6, 2);  

            $table->foreign('provider_id')->references('id')->on('providers')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supplyproduct');
    }
}
