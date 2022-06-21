<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Libros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->string('isbn')->primary();
            $table->string('titulo');
            $table->string('autor');
            $table->string('genero');
            $table->string('recomendacion_generacional');
            $table->integer('id_editorial')->unsigned();
            $table->foreign('id_editorial')->references('id')->on('editorials');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros');
    }
}
