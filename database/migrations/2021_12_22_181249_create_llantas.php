<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLlantas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('llantas', function (Blueprint $table) {
            $table->string('idLlanta')->references('idProducto')->on('Producto');
            $table->string('idRin')->references('idRin')->on('rin');
            $table->float('cargaMaxima',8,2);
            $table->float('velocidadMaxima');
            $table->string('medida');
            $table->string('presion');

            $table->primary('idLlanta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('llantas');
    }
}
