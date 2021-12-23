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
<<<<<<< HEAD
            $table->string('idProveedor')->referemces('idProveedor')->on('proveedores');
=======
            $table->string('idProveedor')->references('idProveedor')->on('proveedores');
>>>>>>> 0a9e87a2103063d42ffd1237921cfbd7dd3c0939
            $table->string('nombre');
            $table->string('descripcion');
            $table->text('imagen');
            $table->float('precioCompra',6,2);
            $table->float('PrecioVenta',6,2);
            $table->float('existencia',2,0);

            $table->primary('idProducto');
<<<<<<< HEAD
=======
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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
        Schema::dropIfExists('productos');
    }
}
