<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->integer('codigo_estudiante');
            $table->string('name',100);
            $table->string('apellido');
            $table->integer('edad');
            $table->string('sexo', 10);
            $table->string('email')->nullable();
            $table->string('telefono', 20);
            $table->date('fecha_nacimiento');
            $table->string('carrera',50)->nullable();
            $table->string('semestre', 10);
            $table->string('promedio_general');
            $table->string('promedio_carrera');
            $table->string('promedio_semestre');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
