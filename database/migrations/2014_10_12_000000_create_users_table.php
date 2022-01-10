<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 *Creacion de la tabla "Users"
 *
 * @author Narvaez Ruiz Alexis
 */
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            //Atributos Base
            $table->string('id');
            $table->string('name');
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno');
            $table->string('email')->unique();
            $table->string('username');
            //$table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('telefono');
            $table->string('idRol')->references('id')->on('Rol_Empleados');
            $table->rememberToken();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
