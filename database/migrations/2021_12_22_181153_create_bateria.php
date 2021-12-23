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
<<<<<<< HEAD
            $table->string('idBateria');
=======
            $table->string('idBateria')->references('idProducto')->on('productos');
>>>>>>> 0a9e87a2103063d42ffd1237921cfbd7dd3c0939
            $table->string('idMarca')->references('idMarca')->on('marca_baterias');
            $table->string('tamanio');
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
