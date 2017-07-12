<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCostumerOrdersProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('costumerordersproducts', function (Blueprint $table) {
             $table->integer('quantity');
             $table->string('sizeOrderd');
             $table->integer('orders_id')->unsigned();
             $table->foreign('orders_id')->references('id')->on('orders');
             $table->integer('products_id')->unsigned();
             $table->foreign('products_id')->references('id')->on('products');
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
         Schema::dropIfExists('costumerOrdersProducts');
     }
}
