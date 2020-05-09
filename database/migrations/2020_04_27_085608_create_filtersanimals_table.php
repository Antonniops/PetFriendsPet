<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFiltersanimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filtersanimals', function (Blueprint $table) {
            $table->id();

            $table->string('animal_name', 20);  
            $table->string('filter_name', 20);  

            $table->string('valor', 30);
            $table->string('categoria', 20);


            $table->foreign('animal_name')->references('nombre')->on('animals')->onDelete('cascade');
            $table->foreign('filter_name')->references('nombre')->on('filters')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filtersanimals');
    }
}
