<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisteredSchoolingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registered_schooling', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('schooling_id');
            $table->unsignedBigInteger('registered_id');
            $table->timestamps();

            $table->foreign('schooling_id')->references('id')->on('schoolings');
            $table->foreign('registered_id')->references('id')->on('registereds');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registered_schooling');
    }
}
