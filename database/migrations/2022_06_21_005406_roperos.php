<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Roperos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roperos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('color');
            $table->string('estado');
            $table->integer('talla')->unsigned();
            $table->foreign('talla')->references('id')->on('tallas');
            $table->integer('categoria')->unsigned();
            $table->foreign('categoria')->references('id')->on('categorias');
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('registered_users');
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
        Schema::dropIfExists('roperos');
    }
}
