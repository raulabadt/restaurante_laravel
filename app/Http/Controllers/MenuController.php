<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $primeros = Menu::where('categoria', 'primero')->get();
        $segundos = Menu::where('categoria', 'segundo')->get();
        $postres = Menu::where('categoria', 'postre')->get();
        $precio_general = Menu::first()->precio_general ?? null;

        return view('create_menu', compact('primeros', 'segundos', 'postres', 'precio_general'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'categoria' => 'required|in:primero,segundo,postre',
        ]);

        Menu::create($request->only(['nombre', 'categoria']));

        return redirect()->route('create_menu')->with('success', 'Plato añadido exitosamente');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'categoria' => 'required|in:primero,segundo,postre',
            'precio_general' => 'nullable|numeric',
        ]);

        $menu = Menu::find($id);

        if (!$menu) {
            return redirect()->route('create_menu')->with('error', 'Plato no encontrado');
        }

        $menu->update($request->only(['nombre', 'categoria']));

        if ($request->has('precio_general')) {
            Menu::query()->update(['precio_general' => $request->precio_general]);
        }

        return redirect()->route('create_menu')->with('success', 'Plato actualizado y precio general actualizado exitosamente');
    }

    public function destroy($id)
    {
        $menu = Menu::find($id);

        if (!$menu) {
            return redirect()->route('create_menu')->with('error', 'Plato no encontrado');
        }

        $menu->delete();

        return redirect()->route('create_menu')->with('success', 'Plato eliminado exitosamente');
    }

    public function publicMenu()
    {
        $primeros = Menu::where('categoria', 'primero')->get();
        $segundos = Menu::where('categoria', 'segundo')->get();
        $postres = Menu::where('categoria', 'postre')->get();
        $precio_general = Menu::first()->precio_general ?? null;

        return view('menu', compact('primeros', 'segundos', 'postres', 'precio_general'));
    }
}
