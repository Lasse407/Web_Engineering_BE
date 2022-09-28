<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecture_room', function (Blueprint $table) {
            $table->primary(['lecture_id','room_id']);
                      $table->bigInteger('lecture_id')->unsigned();
                      $table->bigInteger('room_id')->unsigned();
                      $table->timestamps();
                      $table->foreign('lecture_id')
                          ->references('id')
                          ->on('lectures');
                          $table->foreign('room_id')
                          ->references('id')
                          ->on('rooms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lecture_room');
    }
};
