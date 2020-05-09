<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha_cita', 0);
            $table->string('tamanio_animal',32); 
 
            $table->bigInteger('user_id')->unsigned();  
            $table->bigInteger('hairdresser_id')->unsigned();  

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('hairdresser_id')->references('id')->on('hairdressers')->onDelete('cascade');    
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
        Schema::dropIfExists('appointments');
    }
}
