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
        'mail',
        'num_adultos',
        'num_niños',
        'trona',
        'fecha',
        'hora',
        'alergias',
        'estado',
        'codigo'
    ];

    protected $casts = [
        'nombre' => 'string',
        'mail' => 'string',
        'num_adultos' => 'integer',
        'num_niños' => 'integer',
        'trona' => 'integer',
        'fecha' => 'date',
        'hora' => 'datetime:H:i', // Formato 'hora:minutos'
        'alergias' => 'string',
        'estado' => 'string',
        'codigo' => 'integer'
    ];
}

