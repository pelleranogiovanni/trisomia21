<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePathologieRegisteredTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pathologie_registered', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('registered_id');
            $table->unsignedBigInteger('pathologie_id');
            $table->timestamps();

            $table->foreign('registered_id')->references('id')->on('registereds');
            $table->foreign('pathologie_id')->references('id')->on('pathologies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pathologie_registered');
    }
}
