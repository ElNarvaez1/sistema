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
<<<<<<< HEAD
            [                
                'id' => 'Admin',
=======
            [
                'id' => 'Admin0',
>>>>>>> Narvaez
=======
            [
                'id' => 'Admin0',
=======
            [                
                'id' => 'Admin',
>>>>>>> 0a9e87a2103063d42ffd1237921cfbd7dd3c0939
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
