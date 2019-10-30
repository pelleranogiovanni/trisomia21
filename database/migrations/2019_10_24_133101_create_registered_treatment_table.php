<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisteredTreatmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registered_treatment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('registered_id');
            $table->unsignedBigInteger('treatment_id');
            $table->timestamps();

            $table->foreign('registered_id')->references('id')->on('registereds');
            $table->foreign('treatment_id')->references('id')->on('treatments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registered_treatment');
    }
}
