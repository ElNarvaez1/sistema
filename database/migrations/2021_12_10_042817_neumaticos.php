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
        Schema::create('Rol_Empleados',function(Blueprint $table){
            $table->id();
            $table->string('descripcion');
            $table->float('salario',6,2);
        });

        //Empleado
        Schema::create('Empleados', function (Blueprint $table) {
            $table->string('idEmpleado');
            $table->string('nombre');
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno');
            $table->string('usuario')->unique();
            $table->string("contrasenia");
            $table->string('correo')->unique();
            $table->integer('telefono');
            $table->longText('Foto')->nullable();
            $table->string('idRol')->references('id')->on('Rol_Empleados');

            $table->rememberToken();
            $table->timestamps();
            $table->primary('idEmpleado');
        });

        //Cambio
        Schema::create('Cambios',function(Blueprint $table){
            $table->string('idCambio');
            $table->string('idEmpleado');
            $table->date('fecha');
            $table->string('descripcion');
            $table->float('monto',6,2);

            $table->primary('idCambio');
        });

        //Cliente
        Schema::create('Clientes',function(Blueprint $table){
            $table->string('idCliente');
            $table->string('nombre');
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno');
            $table->integer('telefono')->nullable();

            $table->primary('idCliente');
        });

        //Venta
        Schema::create('Ventas',function(Blueprint $table){
            $table->string('idVenta');
            $table->string('idCliente')->refences('idCliente')->on('Clientes');
            $table->string('idEmpleado')->references('idEmpleado')->on('Empleados');
            $table->date('fecha');
            $table->float('totalVenta',10,2);
            $table->float('descuento',5,2)->default(0);

            $table->primary('idVenta');
        });

        //---------------------------------------------------//
        //Marca_Bateria
        Schema::create('Marca_Baterias',function(Blueprint $table){
            $table->string('idMarca');
            $table->string('nombre');

            $table->primary('idMarca');
        });

        //Rin_Llanta
        Schema::create('Rin_Llantas',function(Blueprint $table){
            $table->string('idRin');
            $table->string('numero');

            $table->primary('idRin');
        });

        //Bateria
        Schema::create('Baterias',function(Blueprint $table){
            $table->string('idBateria');
            $table->string('idMarca')->references('idMarca')->on('Marca_Baterias');
            $table->string('tamanio');
            $table->string('modelo');
            $table->integer('voltaje');

            $table->primary('idBateria');
        });

        //Llanta
        Schema::create('Llantas',function(Blueprint $table){
            $table->string('idLlanta');
            $table->string('idRin')->references('idRin')->on('Rin_Llantas');
            $table->float('cargaMaxima',6,2);//?????????????????????????????????????????????????????????????
            $table->float('velocidadMaxima');//?????????????????????????????????????????????????????????????
            $table->string('medida');//?????????????????????????????????????????????????????????????
            $table->string('presion');//?????????????????????????????????????????????????????????????
        });

        //-----------------------------------------------------------//

        //Proveedor
        Schema::create('Proveedores',function(Blueprint $table){
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
        Schema::create('Productos',function(Blueprint $table){
            $table->string('idProducto');
            $table->string('idProveedor')->referemces('idProveedor')->on('Proveedores');
            $table->string('nombre');
            $table->string('descripcion');
            $table->text('imagen');
            $table->float('precioCompra',6,2);
            $table->float('PrecioVenta',6,2);
            $table->float('existencia',2,0);

            $table->primary('idProducto');
        });

        //detalleVenta
        Schema::create('detalleVentas',function(Blueprint $table){
            $table->string('idProducto')->references('idProducto')->on('Productos');
            $table->string('idVenta')->references('idVenta')->on('Ventas');
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
        Schema::dropIfExists('Rol_Empleados');
        Schema::dropIfExists('Empleados');
        Schema::dropIfExists('Cambios');
        Schema::dropIfExists('Clientes');
        Schema::dropIfExists('Ventas');
        Schema::dropIfExists('Marca_Baterias');
        Schema::dropIfExists('Rin_Llantas');
        Schema::dropIfExists('Baterias');
        Schema::dropIfExists('Llantas');
        Schema::dropIfExists('Proveedores');
        Schema::dropIfExists('Productos');
        Schema::dropIfExists('detalleVentas');
    }
}
