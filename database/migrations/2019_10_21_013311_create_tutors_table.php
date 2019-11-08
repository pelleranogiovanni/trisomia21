<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('apellido');
            $table->string('nombre');
            $table->string('dni');
            $table->string('sexo');
            $table->date('fechanacimiento');
            $table->unsignedBigInteger('localidad_id');

            $table->string('direccion');
            $table->string('telefono');
            $table->string('email');
            $table->string('estadocivil');
            $table->string('ocupacion');
            $table->string('relacionconcensado');
            $table->unsignedBigInteger('obrasocial_id');
            $table->string('observacion');

            $table->timestamps();


            $table->foreign('localidad_id')->references('id')->on('locations');
            $table->foreign('obrasocial_id')->references('id')->on('healthinsurances');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutors');
    }
}
