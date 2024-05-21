<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    // Método para mostrar la vista de gestión del menú
    public function index()
    {
        $primeros = Menu::where('categoria', 'primero')->get();
        $segundos = Menu::where('categoria', 'segundo')->get();
        $postres = Menu::where('categoria', 'postre')->get();

        return view('create_menu', compact('primeros', 'segundos', 'postres'));
    }

    // Método para añadir un nuevo menú
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'categoria' => 'required|in:primero,segundo,postre',
        ]);

        Menu::create($request->all());

        return redirect()->route('create_menu')->with('success', 'Plato añadido exitosamente');
    }

    // Método para actualizar un menú existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'categoria' => 'required|in:primero,segundo,postre',
        ]);

        $menu = Menu::find($id);
        $menu->update($request->all());

        return redirect()->route('create_menu')->with('success', 'Plato actualizado exitosamente');
    }

    // Método para eliminar un menú
    public function destroy($id)
    {
        $menu = Menu::find($id);
        $menu->delete();

        return redirect()->route('create_menu')->with('success', 'Plato eliminado exitosamente');
    }

    // Método para mostrar el menú público
    public function publicMenu()
    {
        $primeros = Menu::where('categoria', 'primero')->get();
        $segundos = Menu::where('categoria', 'segundo')->get();
        $postres = Menu::where('categoria', 'postre')->get();

        return view('menu', compact('primeros', 'segundos', 'postres'));
    }
}



