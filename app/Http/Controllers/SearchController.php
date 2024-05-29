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
    
        $fields = [
            'nombre', 'mail', 'telf', 'num_adultos', 'num_niños', 
            'trona', 'fecha', 'hora', 'alergias', 'estado', 'codigo'
        ];
    
        foreach ($fields as $field) {
            if ($request->filled($field)) {
                $query->where($field, 'like', '%' . $request->$field . '%');
            }
        }
    
        $reservas = $query->get();
    
        return response()->json($reservas);
    }
}

