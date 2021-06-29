<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmountAndIntervalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amount_and_interval', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('medicine_users_id');
            $table->foreign('medicine_users_id')->references('id')->on('medicine_users');
            $table->float('amount', 6, 2);
            $table->integer('interval');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('amount_and_interval', function (Blueprint $table) {
            $table->dropForeign(['medicine_users_id']);  
        });
        Schema::dropIfExists('amount_and_interval'); 
        

    }
}
