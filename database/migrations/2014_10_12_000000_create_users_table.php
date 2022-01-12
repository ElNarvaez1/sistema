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
            $table->string('idRol')->references('role_id')->on('model_has_roles');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
            
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
