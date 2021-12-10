<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Neumaticos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        //Rol
        Schema::create('Rol_Empleado',function(Blueprint $table){
            $table->string('idRol');
            $table->string('descripcion');
            $table->float('salario',6,2);

            $table->primary('idRol');
        });

        //Empleado
        Schema::create('Empleado', function (Blueprint $table) {
            $table->string('idEmpleado');
            $table->string('nombre');
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno');
            $table->string('usuario')->unique();
            $table->string("contrasenia");
            $table->string('correo')->unique();
            $table->integer('telefono');
            $table->longText('Foto')->nullable();
            $table->string('idRol')->references('idRol')->on('Rol_Empleado');

            $table->rememberToken();
            $table->timestamps();
            $table->primary('idEmpleado');
        });

        //Cambio
        Schema::create('Cambio',function(Blueprint $table){
            $table->string('idCambio');
            $table->string('idEmpleado');
            $table->date('fecha');
            $table->string('descripcion');
            $table->float('monto',6,2);

            $table->primary('idCambio');
        });

        //Cliente
        Schema::create('Cliente',function(Blueprint $table){
            $table->string('idCliente');
            $table->string('nombre');
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno');
            $table->integer('telefono')->nullable();

            $table->primary('idCliente');
        });

        //Venta
        Schema::create('Venta',function(Blueprint $table){
            $table->string('idVenta');
            $table->string('idCliente')->refences('idCliente')->on('Cliente');
            $table->string('idEmpleado')->references('idEmpleado')->on('Empleado');
            $table->date('fecha');
            $table->float('totalVenta',10,2);
            $table->float('descuento',5,2)->default(0);

            $table->primary('idVenta');
        });

        //---------------------------------------------------//
        //Marca_Bateria
        Schema::create('Marca_Bateria',function(Blueprint $table){
            $table->string('idMarca');
            $table->string('nombre');

            $table->primary('idMarca');
        });

        //Rin_Llanta
        Schema::create('Rin_Llanta',function(Blueprint $table){
            $table->string('idRin');
            $table->string('numero');

            $table->primary('idRin');
        });

        //Bateria
        Schema::create('Bateria',function(Blueprint $table){
            $table->string('idBateria');
            $table->string('idMarca')->references('idMarca')->on('Marca_Bateria');
            $table->string('tamanio');
            $table->string('modelo');
            $table->integer('voltaje');

            $table->primary('idBateria');
        });

        //Llanta
        Schema::create('Llanta',function(Blueprint $table){
            $table->string('idLlanta');
            $table->string('idRin')->references('idRin')->on('Rin_Llanta');
            $table->float('cargaMaxima',6,2);//?????????????????????????????????????????????????????????????
            $table->float('velocidadMaxima');//?????????????????????????????????????????????????????????????
            $table->string('medida');//?????????????????????????????????????????????????????????????
            $table->string('presion');//?????????????????????????????????????????????????????????????
        });

        //-----------------------------------------------------------//

        //Proveedor
        Schema::create('Proveedor',function(Blueprint $table){
            $table->string('idProveedor');
            $table->string('nombre');
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno');
            $table->string('nombreEmpresa');
            $table->text('direccion');
            $table->string('correo')->nullable();
            $table->integer('telefono');

            $table->primary('idProveedor');
        });

        //Producto
        Schema::create('Producto',function(Blueprint $table){
            $table->string('idProducto');
            $table->string('idProveedor')->referemces('idProveedor')->on('Proveedor');
            $table->string('nombre');
            $table->string('descripcion');
            $table->text('imagen');
            $table->float('precioCompra',6,2);
            $table->float('PrecioVenta',6,2);
            $table->float('existencia',2,0);

            $table->primary('idProducto');
        });

        //detalleVenta
        Schema::create('detalleVenta',function(Blueprint $table){
            $table->string('idProducto')->references('idProducto')->on('Producto');
            $table->string('idVenta')->references('idVenta')->on('Venta');
            $table->integer('cantidad');

            $table->primary(['idProducto','idVenta']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Empleado');
    }
}
