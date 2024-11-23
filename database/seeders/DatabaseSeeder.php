<?php

namespace Database\Seeders;

use App\Models\Empresa;
use App\Models\Estudiante;
use App\Models\Member;
use App\Models\Solicitud;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Primero permisos y roles
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        //Usuario administrador
        $this->call(UserSeeder::class);


        // User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ChurchSeeder::class);
        $this->call(PostSeeder::class);

        $this->call(DimensionSeeder::class);
        $this->call(IndicatorSeeder::class);
        $this->call(GroupSeeder::class);

        $this->call(MemberSeeder::class);

        Estudiante::factory(30)->create();
        Empresa::factory(30)->create();
        Solicitud::factory(10)->create();




    }
}
