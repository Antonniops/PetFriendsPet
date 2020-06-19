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
            $table->date('fecha_cita');
 
            $table->bigInteger('user_id')->unsigned();  
            $table->bigInteger('hairdresser_id')->unsigned()->nullable();  
            $table->string('email', 255);

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('hairdresser_id')->references('id')->on('hairdressers')->onDelete('cascade');    
        });

        DB::statement("ALTER TABLE appointments AUTO_INCREMENT = 100;");
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
