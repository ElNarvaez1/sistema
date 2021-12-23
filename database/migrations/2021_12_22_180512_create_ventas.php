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
            $table->id();
            $table->unsignedBigInteger('id_cliente')->nullable();
            $table->string('nombre')->nullable(false); 
            $table->text('articulo');
            $table->integer('cantidad');
            $table->integer('impuesto')->default(18);
            $table->timestamp('fecha');
            $table->integer('descuento');
            $table->integer('total_venta');

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
