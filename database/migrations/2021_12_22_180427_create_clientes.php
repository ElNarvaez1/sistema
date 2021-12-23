<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->string('idCliente');
            $table->string('nombre');
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno');
<<<<<<< HEAD
            $table->timestamp('fecha');
            $table->integer('telefono')->nullable();

            $table->primary('idCliente');
            $table->rememberToken();
            $table->softDeletes(); 
=======
            $table->integer('telefono')->nullable();

            $table->primary('idCliente');
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
        Schema::dropIfExists('clientes');
    }
}
