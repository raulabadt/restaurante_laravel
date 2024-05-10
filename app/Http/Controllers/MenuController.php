<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function store(Request $request)
    {
        $menu = new Menu();

        // Guardar los primeros platos
        $menu->primeros = $request->input('primeros');

        // Guardar los segundos platos
        $menu->segundos = $request->input('segundos');

        // Guardar los postres
        $menu->postres = $request->input('postres');

        // Guardar el menú en la base de datos
        $menu->save();

        

        // Redirigir a alguna ruta o devolver una respuesta
        return redirect()->route('create_menu')->with('message', '¡Platos añadidos exitosamente!');
       
    }

    public function create()
    {
        // $menus = Menu::all();
       
       
        // return view('menu', compact('menus'));
    }

    
}
    

    

