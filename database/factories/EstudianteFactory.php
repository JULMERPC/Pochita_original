<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estudiante>
 */
class EstudianteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'codigo_estudiante' => $this->faker->numberBetween(202312716, 302314789),
            'name' => $this->faker->name(),
            'apellido' => $this->faker->lastName(),
            'edad' => $this->faker->numberBetween(15, 30),
           'sexo' => $this->faker->randomElement(['M', 'F']),
            'email' => $this->faker->unique()->safeEmail(),
            'telefono' => $this->faker->phoneNumber(),
            
            'fecha_nacimiento' => $this->faker->date('Y-m-d'),


            'carrera' => $this->faker->randomElement(['Ingeniería en Sistemas', 'Ingeniería Civil', 'Ingeniería Ambiental']),
           'semestre' => $this->faker->numberBetween(1, 10),
            'promedio_general' => $this->faker->randomFloat(),
            'promedio_carrera' => $this->faker->randomFloat(),
            'promedio_semestre' => $this->faker->randomFloat(),
            'codigo_estudiante' => $this->faker->numberBetween(10000, 99900),
        ];
    }
}
