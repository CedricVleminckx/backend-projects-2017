<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('events', function (Blueprint $table) {
          $table->increments('id');
          $table->string('eventName');
          $table->text('content');
          $table->string('location');
          $table->string('price');
          $table->string('type');
          $table->date('when');
          $table->boolean('who');
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
      Schema::dropIfExists('events');
    }
}
