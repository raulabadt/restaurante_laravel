<?php

// MenuController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function create()
    {
        return view('create_menu');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'categoria' => 'required|in:primero,segundo,postre',
        ]);

        Menu::create($request->all());

        return redirect()->route('reserve_correcta')->with('success', 'Menu creado exitosamente.');
    }
}
