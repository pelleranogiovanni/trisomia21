<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisteredTutorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registered_tutor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('censado_id');
            $table->unsignedBigInteger('tutor_id');
            $table->timestamps();

            $table->foreign('censado_id')->references('id')->on('registereds');
            $table->foreign('tutor_id')->references('id')->on('tutors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registered_tutor');
    }
}
