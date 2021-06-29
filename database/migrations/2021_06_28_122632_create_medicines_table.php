<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('amount', 6, 2);
            $table->string('unit_name');
            $table->foreign('unit_name')->references('name')->on('units');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {        
    Schema::table('medicines', function (Blueprint $table){
        $table->dropForeign(['unit_name']);
 
    });

        Schema::dropIfExists('medicines');
    }
}
