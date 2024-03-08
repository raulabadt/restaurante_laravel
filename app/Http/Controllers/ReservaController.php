<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use Illuminate\Support\Facades\Mail;

class ReservaController extends Controller
{
    public function store(Request $request)
    {   
      
    //   // Validar los datos recibidos del formulario
    $request->validate([
        'name' => 'required|string',
        'mail' => 'required|string',
        'adultos' => 'required|integer',
        'niños' => 'required|integer',
        'trona' => 'required|integer',
        'date' => 'required|date',
        'time' => 'required|date_format:H:i', // Cambiado de 'date' a 'date_format'
        'alergias' => 'required|string'
    ]);
    $codigoAleatorio = mt_rand(0, 999999);
    $date = now()->format('Ymd');
    $codigo = "C-$date-$codigoAleatorio";
    // Crear una nueva reserva en la base de datos
    $reserva = Reserva::create([
        'nombre' => $request->name,// Corregido de $request->nombre
        'mail' => $request->mail, 
        'num_adultos' => $request->adultos, // Corregido de $request->num_adultos
        'num_niños' => $request->niños, // Corregido de $request->num_niños
        'trona' => $request->trona,
        'fecha' => $request->date, // Corregido de $request->fecha
        'hora' => $request->time, // Corregido de $request->hora
        'alergias' => $request->alergias,
        'estado' => 'reservado',
        'codigo' => $codigo,
    ]);

            // Generar un código numérico aleatorio


            // Asociar el código con la reserva
            $reserva->codigo = $codigo;
            $reserva->save();
    
            // Enviar el código al correo electrónico del usuario
            $email = $request->mail; // Asegúrate de tener un campo de correo electrónico en tu formulario
            Mail::raw('Tu código para la cancelación de reserva es: ' . $codigo, function ($message) use ($email) {
                $message->to($email)->subject('Código de reserva');
            });

    // return response()->json([
    //     'message' => 'Reserva creada correctamente',
    //     'script' => "<script>alert('¡Reserva creada correctamente!');</script>"
    // ], 200);

        // Retorna una respuesta de éxito
        return response()->json(['message' => 'Reserva creada correctamente'], 200);
    }

    public function cancelar(Request $request)
{
    // Validar el código de reserva ingresado
    $request->validate([
        'codigo' => 'required|string',
    ]);

    // Buscar la reserva en la base de datos por el código
    $reserva = Reserva::where('codigo', $request->codigo)->first();

    // Verificar si la reserva existe
    if ($reserva) {
        // Obtener la dirección de correo electrónico asociada a la reserva
        $email = $reserva->mail;

        // Cambiar el estado de la reserva a "cancelado"
        $reserva->estado = 'cancelado';
        $reserva->save();

        // Enviar correo electrónico de cancelación de reserva
        Mail::raw('Tu reserva ha sido cancelada.', function ($message) use ($email) {
            $message->to($email)->subject('Cancelación de Reserva');
        });

        // Retorna una respuesta de éxito
        return response()->json(['message' => 'Reserva cancelada correctamente'], 200);
    } else {
        // Retorna un mensaje de error si la reserva no existe
        return response()->json(['error' => 'El código de reserva no existe'], 404);
    }
}}