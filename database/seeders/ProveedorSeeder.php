<?php

namespace Database\Seeders;

use App\Models\Proveedor;
use Illuminate\Database\Seeder;

class ProveedorSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $proveedor = new Proveedor();

        $proveedor->idProveedor = "proveedor1";
        $proveedor->nombre = "alan";
        $proveedor->apellidoPaterno = "gonzalez";
        $proveedor->apellidoMaterno = "gonzalez";
        $proveedor->nombreEmpresa = "toyotires";
        $proveedor->direccion = "Calle 5 de mayo #3";
        $proveedor->correo = "alan@toyotires.com";
        $proveedor->telefono = "9516457896";

        $proveedor->save();

        $proveedor2 = new Proveedor();

        $proveedor2->idProveedor = "provvedor2";
        $proveedor2->nombre = "daniela";
        $proveedor2->apellidoPaterno = "martinez";
        $proveedor2->apellidoMaterno = "lopez";
        $proveedor2->nombreEmpresa = "starfire";
        $proveedor2->direccion = "Calle Porfirio Diaz #50";
        $proveedor2->correo = "daniela@starfire.com";
        $proveedor2->telefono = "9512346523";

        $proveedor2->save();

        $proveedor3 = new Proveedor();

        $proveedor3->idProveedor = "proveedor3";
        $proveedor3->nombre = "salvador";
        $proveedor3->apellidoPaterno = "cruz";
        $proveedor3->apellidoMaterno = "luis";
        $proveedor3->nombreEmpresa = "gonher";
        $proveedor3->direccion = "Calle Valerius #986";
        $proveedor3->correo = "salvador@gonher.com";
        $proveedor3->telefono = "9514623569";

        $proveedor3->save();
    }
}