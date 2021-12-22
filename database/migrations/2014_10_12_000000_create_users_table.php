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
            $table->string('username');
            $table->string('email')->unique();
            //$table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();


            //Atributos extras
            $table->string('apellidoMaterno');
            $table->primary('id');
            $table->integer('telefono');
            $table->longText('Foto')->nullable();
            $table->string('rol'); //No le puse rol por esa madre se crea hasta despues
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