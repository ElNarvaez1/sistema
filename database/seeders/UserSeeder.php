<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [                
                'id' => 'Admin',
                'name' => 'Admin',
                'apellidoPaterno' => 'Admin',
                'apellidoMaterno' => 'Admin',
                'email' => 'admin@gmail.com',
                'username' => 'admin',
                'password' => bcrypt('123456789'),
                'telefono' => '0123456789',
                'idRol' => '1',
            ]
        )->assignRole('Admin');

        User::create(
            [                
                'id' => 'Gerente',
                'name' => 'Gerente',
                'apellidoPaterno' => 'Gerente',
                'apellidoMaterno' => 'Gerente',
                'email' => 'Gerente@gmail.com',
                'username' => 'Gerente',
                'password' => bcrypt('123456789'),
                'telefono' => '0123456789',
                'idRol' => '3',
            ]
        )->assignRole('Gerente');

        User::create(
            [                
                'id' => 'Empleado',
                'name' => 'Empleado',
                'apellidoPaterno' => 'Empleado',
                'apellidoMaterno' => 'Empleado',
                'email' => 'Empleado@gmail.com',
                'username' => 'Empleado',
                'password' => bcrypt('123456789'),
                'telefono' => '0123456789',
                'idRol' => '2',
            ]
        )->assignRole('Empleado');
        //factory(User::class, 9)->create();
        
    }
}
