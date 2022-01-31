<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $cliente = new cliente();

        $cliente->idCliente = "cliente1";
        $cliente->nombre = "juan";
        $cliente->apellidoPaterno = "perez";
        $cliente->apellidoMaterno = "cruz";
        $cliente->fecha = "2022-01-28";
        $cliente->telefono = "9514254678";

        $cliente->save();
        
        $cliente2 = new cliente();

        $cliente2->idCliente = "cliente2";
        $cliente2->nombre = "jesus";
        $cliente2->apellidoPaterno = "martinez";
        $cliente2->apellidoMaterno = "jimenez";
        $cliente2->fecha = "2021-01-28";
        $cliente2->telefono = "9514254679";

        $cliente2->save();

        $cliente3 = new cliente();

        $cliente3->idCliente = "cliente3";
        $cliente3->nombre = "karen";
        $cliente3->apellidoPaterno = "santiago";
        $cliente3->apellidoMaterno = "lopez";
        $cliente3->fecha = "2021-01-28";
        $cliente3->telefono = "9514254677";

        $cliente3->save();
    }
}