<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->string('idProveedor');
            $table->string('nombre');
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno');
            $table->string('nombreEmpresa');
            $table->text('direccion');
            $table->string('correo')->nullable();
            $table->integer('telefono');

            $table->primary('idProveedor');
<<<<<<< HEAD
=======
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
        Schema::dropIfExists('proveedores');
    }
}
