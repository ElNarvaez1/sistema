<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdcutos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->string('idProducto');
            $table->string('idProveedor')->references('idProveedor')->on('proveedores');
            $table->string('nombre');
            $table->string('descripcion');
            $table->text('imagen');
            $table->float('precioCompra',6,2);
            $table->float('PrecioVenta',6,2);
            $table->float('existencia',2,0);

            $table->primary('idProducto');
            $table->rememberToken();
            $table->timestamps();
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
        Schema::dropIfExists('productos');
    }
}
