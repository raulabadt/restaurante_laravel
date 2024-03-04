<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $table = 'reservas';

    protected $fillable = [
        'nombre',
        'num_adultos',
        'num_niños',
        'trona',
        'fecha',
        'hora',
        'alergias',
        'estado'
    ];

    protected $casts = [
        'nombre' => 'string',
        'num_adultos' => 'integer',
        'num_niños' => 'integer',
        'trona' => 'boolean',
        'fecha' => 'date',
        'hora' => 'datetime:H:i', // Formato 'hora:minutos'
        'alergias' => 'string',
        'estado' => 'string'
    ];
}

