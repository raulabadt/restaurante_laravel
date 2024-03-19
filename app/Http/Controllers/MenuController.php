<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        return view('create_menu');
    }

    public function actualizarMenu(Request $request)
    {
        $primeros = $request->input('primeros', []);
        $segundos = $request->input('segundos', []);
        $postres = $request->input('postres', []);

        return view('create_menu', compact('primeros', 'segundos', 'postres'));
        
    }
}
