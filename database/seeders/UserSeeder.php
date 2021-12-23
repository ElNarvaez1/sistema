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
<<<<<<< HEAD
            [                
                'id' => 'Admin',
=======
            [
                'id' => 'Admin0',
>>>>>>> Narvaez
                'name' => 'Admin',
                'apellidoPaterno' => 'Admin',
                'apellidoMaterno' => 'Admin',
                'email' => 'admin@gmail.com',
                'apellidoMaterno' => 'admin@gmail.com',
                'telefono' => 1234,
                'rol' => 'admin',
                
                'username' => 'admin',
                'password' => bcrypt('123456789'),
                'telefono' => '0123456789'
            ]
        )->assignRole('Admin');
        //factory(User::class, 9)->create();
        
    }
}
