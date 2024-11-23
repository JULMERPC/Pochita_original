<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     public function run(){
        //Dashboard
        Permission::create([
            'name'=>'Ver dashboard'
        ]);
        //Clientes
        Permission::create([
            'name'=>'Listar grupo'
        ]);
        Permission::create([
            'name'=>'Crear grupo'
        ]);
        Permission::create([
            'name'=>'Editar grupo'
        ]);
        Permission::create([
            'name'=>'Eliminar grupo'
        ]);
        //MIEMBROS
        Permission::create([
            'name'=>'Listar miembros'
        ]);
        Permission::create([
            'name'=>'Crear miembros'
        ]);
        Permission::create([
            'name'=>'Editar miembros'
        ]);
        Permission::create([
            'name'=>'Eliminar miembros'
        ]);

        //REGISTRO
        Permission::create([
            'name'=>'buscar grupo'
        ]);
        Permission::create([
            'name'=>'registrar asistencia'
        ]);
        Permission::create([
            'name'=>'registrar comunion'
        ]);
        Permission::create([
            'name'=>'registrar relacion'
        ]);
        Permission::create([
            'name'=>'registrar mision'
        ]);
    }

    }

