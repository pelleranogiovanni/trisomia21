<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo', 50);
            $table->mediumtext('contenido');
            $table->string('enteOrganizador', 100);
            $table->date('fechaInicio');
            $table->date('fechaFin');
            $table->time('horario');
            $table->string('ubicacion');
            $table->string('imagenUrl');
            $table->unsignedBigInteger('user_create_id');
            $table->timestamps();

            $table->foreign('user_create_id')->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agendas');
    }
}
