<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleVentas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_ventas', function (Blueprint $table) {
<<<<<<< HEAD
            $table->string('idProducto')->references('idProducto')->on('productos');
            $table->string('idVenta')->references('idVenta')->on('Ventas');
            $table->integer('cantidad');

            $table->primary(['idProducto','idVenta']);
=======
            $table->string('idProducto');
            $table->string('idVenta');
            $table->integer('cantidad');

            $table->primary(['idProducto','idVenta']);
            $table->foreign('idProducto')->references('idProducto')->on('productos');
            $table->foreign('idVenta')->references('idVenta')->on('Ventas');
>>>>>>> 0a9e87a2103063d42ffd1237921cfbd7dd3c0939
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_ventas');
    }
}
