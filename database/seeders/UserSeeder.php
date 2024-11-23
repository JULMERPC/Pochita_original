<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(): void
    // {
    //     $user=User::create([
    //         'name'=>'Angel Rosendo Condori Coaquira',
    //         'email'=>'angel.condori@gmail.com',
    //         'password'=>bcrypt('12345678')
    //     ]);
    //     $user->assignRole('Administrador');

    //     User::factory(10)->create();



    // }
    public function run(): void
    {
        $user = User::updateOrCreate(
            ['email' => 'julmerpumacondori@gmail.com'], // Condición para evitar duplicados
            [
                'name' => 'julmer puma condori',
                'password' => bcrypt('123456'),
            ]
        );

        $user->assignRole('Administrador'); // Asigna el rol al usuario

        // Crear 10 usuarios adicionales usando una factory
        User::factory()->count(5)->create();
    }
}
