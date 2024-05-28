<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Reserva extends Model
{
    use HasFactory;
    use Searchable;

    protected $table = 'reservas';

    protected $fillable = [
        'nombre',
        'mail',
        'telf',
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
        'telf' => 'string',
        'num_adultos' => 'integer',
        'num_niños' => 'integer',
        'trona' => 'integer',
        'fecha' => 'date',
        'hora' => 'datetime:H:i', // Formato 'hora:minutos'
        'alergias' => 'string',
        'estado' => 'string',
        'codigo' => 'string'
    ];

     /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        $array = $this->toArray();

        // Customize array to be indexed
        return $array;
    }
}

