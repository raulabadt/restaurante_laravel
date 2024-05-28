<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id(); 
            $table->string('nombre');
            $table->string('mail'); 
            $table->string('telf'); 
            $table->integer('num_adultos'); 
            $table->integer('num_niños'); 
            $table->integer('trona'); 
            $table->date('fecha'); 
            $table->time('hora'); 
            $table->string('alergias')->nullable(); 
           
            $table->string('estado')->default('reservado');
            $table->string('codigo')->nullable();
            $table->timestamps(); 
            
            
            
            $table->unique(['fecha', 'hora']);
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
