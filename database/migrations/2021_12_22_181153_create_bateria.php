<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBateria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bateria', function (Blueprint $table) {
            $table->string('idBateria')->references('idProducto')->on('productos');
            $table->string('idMarca')->references('idMarca')->on('marca_baterias');
            $table->integer('alto');
            $table->integer('ancho');
            $table->integer('largo');
            $table->integer('amperes');
            $table->float('peso',5,2);
            $table->string('modelo');
            $table->integer('voltaje');

            $table->primary('idBateria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bateria');
    }
}
