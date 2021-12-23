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
            $table->string('idProducto');
           // $table->bigInteger('idVenta');
            $table->integer('cantidad');
            
            $table->primary(['idProducto','idVenta']);
            $table->foreign('idProducto')->references('idProducto')->on('productos');
            $table->foreignId('idVenta')->references('id')->on('Ventas');
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
