<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCambios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cambios', function (Blueprint $table) {
            $table->string('idCambio');
<<<<<<< HEAD
            $table->string('idUser')->references('id')->on('users')->onDelete('cascade');
=======
            $table->string('idUser');
>>>>>>> Narvaez
            $table->date('fecha');
            $table->string('descripcion');
            $table->float('monto',6,2);

            $table->primary('idCambio');
<<<<<<< HEAD
            //$table->foreign('idUser')->references('id')->on('users')->onDelete('cascade');
=======
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
        Schema::dropIfExists('cambios');
    }
}
