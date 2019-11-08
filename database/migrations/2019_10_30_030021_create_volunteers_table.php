<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('apellido');
            $table->string('nombre');
            $table->string('dni');
            $table->string('fechanacimiento');
            $table->string('telefono');
            $table->string('email');
            $table->unsignedBigInteger('localidad_id');
            $table->string('direccion');
            $table->string('ocupacion');
            $table->string('tiempodisponible');
            $table->string('actividad');
            $table->string('numerolegajo');
            $table->timestamps();

            $table->foreign('localidad_id')->references('id')->on('locations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('volunteers');
    }
}
