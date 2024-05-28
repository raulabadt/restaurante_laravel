<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');
        if ($query) {
            $reservas = Reserva::search($query)->get();
        } else {
            $reservas = Reserva::all();
        }

        return view('cpanel', compact('reservas'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $reservas = Reserva::search($query)->get();

        return response()->json($reservas);
    }
}

