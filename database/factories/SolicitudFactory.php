<?php

namespace Database\Factories;

use App\Models\Empresa;
use App\Models\Estudiante;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Solicitud>
 */
class SolicitudFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->word(),
            'descripcion'=> $this->faker->paragraph(),


            'estado_solicitud'=>$this->faker->randomElement(['Pendiente','En Proceso','Finalizada']),
            'id_estudiantes'=>Estudiante::all()->random()->id,
            'id_empresas'=>Empresa::all()->random()->id

        ];
    }
}
