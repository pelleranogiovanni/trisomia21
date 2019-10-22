<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->string('slug', 191)->unique();
            $table->mediumText('contenido');
            $table->string('extracto');
            $table->enum('estado', ['PUBLISHED', 'DRAFT'])->default('DRAFT');
            $table->integer('likes');
            $table->integer('dislikes');
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('imagen_id')->nullable();
            $table->unsignedBigInteger('user_create_id');
            $table->unsignedBigInteger('user_modified_id')->default(0);
            $table->timestamps();

            $table->foreign('imagen_id')
            ->references('id')
            ->on('imagens')
            ->onDelete('cascade');

            $table->foreign('user_create_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

            $table->foreign('user_modified_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
