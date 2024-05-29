<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
       
      
         $reservas = Reserva::all();
      

        return view('cpanel', compact('reservas'));
    }

    public function search(Request $request)
    {
        $query = Reserva::query();

        if ($request->filled('nombre')) {
            $query->where('nombre', 'like', '%' . $request->nombre . '%');
        }
        if ($request->filled('mail')) {
            $query->where('mail', 'like', '%' . $request->mail . '%');
        }
        if ($request->filled('telf')) {
            $query->where('telf', 'like', '%' . $request->telf . '%');
        }
        if ($request->filled('num_adultos')) {
            $query->where('num_adultos', 'like', '%' . $request->num_adultos . '%');
        }
        if ($request->filled('num_niños')) {
            $query->where('num_niños', 'like', '%' . $request->num_niños . '%');
        }
        if ($request->filled('trona')) {
            $query->where('trona', 'like', '%' . $request->trona . '%');
        }
        if ($request->filled('fecha')) {
            $query->where('fecha', 'like', '%' . $request->fecha . '%');
        }
        if ($request->filled('hora')) {
            $query->where('hora', 'like', '%' . $request->hora . '%');
        }
        if ($request->filled('alergias')) {
            $query->where('alergias', 'like', '%' . $request->alergias . '%');
        }
        if ($request->filled('estado')) {
            $query->where('estado', 'like', '%' . $request->estado . '%');
        }
        if ($request->filled('codigo')) {
            $query->where('codigo', 'like', '%' . $request->codigo . '%');
        }
        // Añadir más condiciones según sea necesario

        $reservas = $query->get();

        return response()->json($reservas);
    }
}

