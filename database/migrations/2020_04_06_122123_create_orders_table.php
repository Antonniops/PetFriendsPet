<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
 
            $table->bigInteger('user_id')->unsigned()->nullable();    
            $table->string('estado',32); 
            $table->dateTime('fecha_pedido', 0);
            
            $table->string('email',32);
            $table->string('codigo_postal',32);
            $table->string('calle',32);
            $table->string('numero',32);
            $table->string('municipio',32);
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
            $table->timestamps();
        });

        DB::statement("ALTER TABLE orders AUTO_INCREMENT = 1000;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
