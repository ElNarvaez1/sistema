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
            $table->string('idCliente')->refences('idCliente')->on('Clientes');
            $table->string('idEmpleado')->references('idEmpleado')->on('Empleados');
            $table->date('fecha');
            $table->float('totalVenta',10,2);
            $table->float('descuento',5,2)->default(0);

            $table->primary('idVenta');
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
