<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function create(Request $request)
    {
        $orderBy = $request->get('order_by', 'nombre'); // Obtener el parámetro de ordenación, por defecto es 'nombre'
        $menus = Menu::orderBy($orderBy)->get(); // Ordenar los menús

        return view('create_menu', compact('menus', 'orderBy'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'categoria' => 'required|in:primero,segundo,postre',
        ]);

        // Verificar si el nombre ya existe en la base de datos
        if (Menu::where('nombre', $request->nombre)->exists()) {
            return redirect()->route('create')->withErrors(['nombre' => 'Ese plato ya está añadido.']);
        }

        Menu::create($request->all());

        return redirect()->route('create')->with('success', 'Menú creado exitosamente.');
    }

    public function edit(Menu $menu)
    {
        $menus = Menu::all(); // Obtener todos los menús de la base de datos
        return view('edit_menu', compact('menu', 'menus'));
    }

    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'categoria' => 'required|in:primero,segundo,postre',
        ]);

        // Verificar si el nombre ya existe en la base de datos, excluyendo el registro actual
        if (Menu::where('nombre', $request->nombre)->where('id', '!=', $menu->id)->exists()) {
            return redirect()->route('edit', $menu)->withErrors(['nombre' => 'Ese plato ya está añadido.']);
        }

        $menu->update($request->all());

        return redirect()->route('create')->with('success', 'Menú actualizado exitosamente.');
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('create')->with('success', 'Menú eliminado exitosamente.');
    }
}
