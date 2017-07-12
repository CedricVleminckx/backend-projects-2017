<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
             $table->increments('id');
             $table->string('productName');
             $table->integer('productNumber');
             $table->string('price');
             $table->enum('size', ['Small', 'Medium', 'Large']);
             $table->enum('color', ['Brown', 'Black', 'Red', 'Yellow', 'Green', 'Blue', 'Grey', 'White', 'Pink']);
             $table->enum('gender', ['Women', 'Men']);
             $table->integer('stockQuantity');
             $table->integer('category_id')->unsigned();
             $table->foreign('category_id')->references('id')->on('category');
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
         Schema::dropIfExists('products');
     }
}
