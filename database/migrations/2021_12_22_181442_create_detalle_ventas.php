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
            $table->string('idProducto');
            $table->string('idVenta');
            $table->integer('cantidad');

            $table->primary(['idProducto','idVenta']);
            $table->foreign('idProducto')->references('idProducto')->on('productos');
            $table->foreign('idVenta')->references('idVenta')->on('Ventas');
=======
            $table->string('idProducto')->references('idProducto')->on('productos');
            $table->string('idVenta')->references('idVenta')->on('Ventas');
            $table->integer('cantidad');

            $table->primary(['idProducto','idVenta']);
>>>>>>> Narvaez
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
