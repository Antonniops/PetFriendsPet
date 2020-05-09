<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 255);
            $table->longText('descripcion');

            $table->float('precio', 6, 2);
            $table->float('precio_oferta', 6, 2)->nullable();

            $table->string('imagen', 255);
            $table->string('marca', 32);
            $table->string('categoria', 64);

            $table->string('ud_peso', 4);
            $table->integer('peso_unidad');
            $table->float('precio_kilogramo', 6, 2);
   
            $table->string('tipo_animal', 32);
            $table->boolean('destacado');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
