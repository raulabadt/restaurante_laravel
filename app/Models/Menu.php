<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'menu';

    protected $fillable = [
        'primeros',
        'segundos',
        'postres'
      
    ];

    protected $casts = [
        'primeros' => 'array',
        'segundos' => 'array',
        'postres' => 'array'
        
    ];
}
