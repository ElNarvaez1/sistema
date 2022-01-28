<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->string('idVenta');
            $table->string('idCliente')->refences('idCliente')->on('clientes');
            $table->string('idUser')->references('id')->on('users');
            $table->string('idProducto')->references('idProducto')->on('productos');
            $table->timestamp('fecha');
            $table->float('totalVenta',10,2);
            $table->float('descuento',5,2)->default(0);
            $table->boolean('estado_devolucion')->default(0);
            $table->primary('idVenta');
            $table->rememberToken();
            $table->softDeletes(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
