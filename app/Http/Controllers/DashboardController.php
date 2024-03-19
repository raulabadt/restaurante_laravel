<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva; // Asegúrate de importar tu modelo aquí

class DashboardController extends Controller
{
    public function index()
    {
        // Obtener los datos de tu base de datos
        $datos = Reserva::all();
        // Pasar los datos a la vista
        return view('cpanel', compact('datos'));
    }

   

  
}
