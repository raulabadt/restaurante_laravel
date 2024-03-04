<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;

class ReservaController extends Controller
{
    public function store(Request $request)
    {   
      
    //   // Validar los datos recibidos del formulario
    $request->validate([
        'name' => 'required|string',
        'adultos' => 'required|integer',
        'niños' => 'required|integer',
        'trona' => 'required|in:yes,no',
        'date' => 'required|date',
        'time' => 'required|date_format:H:i', // Cambiado de 'date' a 'date_format'
        'alergias' => 'required|string'
    ]);
 
    // Crear una nueva reserva en la base de datos
    $reserva = Reserva::create([
        'nombre' => $request->name, // Corregido de $request->nombre
        'num_adultos' => $request->adultos, // Corregido de $request->num_adultos
        'num_niños' => $request->niños, // Corregido de $request->num_niños
        'trona' => $request->trona === 'yes' ? true : false,
        'fecha' => $request->date, // Corregido de $request->fecha
        'hora' => $request->time, // Corregido de $request->hora
        'alergias' => $request->alergias,
        'estado' => 'reservado',
    ]);

    // return response()->json([
    //     'message' => 'Reserva creada correctamente',
    //     'script' => "<script>alert('¡Reserva creada correctamente!');</script>"
    // ], 200);

        // Retorna una respuesta de éxito
        return response()->json(['message' => 'Reserva creada correctamente'], 200);
    }
}
