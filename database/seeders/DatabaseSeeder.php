<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ClienteSeeder::class);


        //$Rol1 = new Rol_Empleado();
        //$Rol1->descripcion = "Supervisor";
        //$Rol1->salario = 2000;

        //$Rol2 = new Rol_Empleado();
        //$Rol2->descripcion = "Empleado";
        //$Rol2->salario = 1200;

        //$Rol1->save();
        //$Rol2->save();
    }
}
