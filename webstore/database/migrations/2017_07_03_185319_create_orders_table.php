<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
             $table->increments('id');
             $table->boolean('status');
             $table->integer('users_id')->unsigned();
             $table->foreign('users_id')->references('id')->on('users');
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
         Schema::dropIfExists('orders');
     }
}
