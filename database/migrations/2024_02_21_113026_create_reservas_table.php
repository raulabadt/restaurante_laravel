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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id(); // Columna de clave primaria autoincremental
            $table->string('nombre');// Columna para nombre y apellidos
            $table->string('mail'); 
            $table->string('telf'); 
            $table->integer('num_adultos');// Columna para número de adultos 
            $table->integer('num_niños'); // Columna para número de niños
            $table->integer('trona'); // Valor predeterminado false para 'trona'
            $table->date('fecha'); // Columna para fecha de la reserva
            $table->time('hora'); // Columna para hora de la reserva
            $table->string('alergias')->nullable(); // Permitir valores nulos para 'alergias'
            // Agrega otras columnas según sea necesario
            $table->string('estado')->default('reservado');
            $table->string('codigo')->nullable();
            $table->timestamps(); // Columnas para las marcas de tiempo created_at y updated_at
            
            
            // Restricción única para hora en la misma fecha
            $table->unique(['fecha', 'hora']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
