<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Recibes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recibes', function (Blueprint $table) {
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('registered_users');
            $table->integer('id_producto')->unsigned();
            $table->foreign('id_producto')->references('id')->on('despensas');
            $table->date('fecha');
            $table->integer('stock');
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
        Schema::dropIfExists('recibes');
    }
}
