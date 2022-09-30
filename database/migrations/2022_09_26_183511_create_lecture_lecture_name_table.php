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
        Schema::create('lecture_lecture_name', function (Blueprint $table) {
            $table->primary(['lecture_id','lecture_name_id']);
                      $table->bigInteger('lecture_id')->unsigned();
                      $table->bigInteger('lecture_name_id')->unsigned();
                      $table->timestamps();
                      $table->foreign('lecture_id')
                          ->references('id')
                          ->on('lectures');
                          $table->foreign('lecture_name_id')
                          ->references('id')
                          ->on('lecture_names');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lecture_lecture_name');
    }
};
