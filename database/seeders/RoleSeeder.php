<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(){
        $role=Role::create(['name'=>'Administrador']);
        $role->permissions()->attach([1,2,3,4,5,6,7,8,9,10,11,12,13,14]);

        // $role=Role::create(['name'=>'Usuario']);
        // $role->syncPermissions(['Listar clientes','Crear clientes','Editar clientes','Eliminar clientes']);

        $role=Role::create(['name'=>'Maestro']);
        $role->permissions()->attach([1,6,7,8,9,10,11,12,13,14]);

    }

}
