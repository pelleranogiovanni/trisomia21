<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePensionRegisteredTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pension_registered', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('censado_id');
            $table->unsignedBigInteger('pension_id');
            $table->timestamps();

            $table->foreign('censado_id')->references('id')->on('registereds');
            $table->foreign('pension_id')->references('id')->on('pensions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pension_registered');
    }
}
