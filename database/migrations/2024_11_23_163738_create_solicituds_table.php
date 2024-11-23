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
        Schema::create('solicituds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('descripcion');

            $table->string('estado_solicitud', 10)->default('Pendiente');
            $table->unsignedBigInteger('id_estudiantes');
            $table->unsignedBigInteger('id_empresas');


            $table->foreign('id_estudiantes')->references('id')->on('estudiantes')->onDelete('cascade');
            $table->foreign('id_empresas')->references('id')->on('empresas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicituds');
    }
};
