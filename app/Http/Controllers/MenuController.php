<?php

// app/Http/Controllers/MenuController.php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        return Menu::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'category' => 'required|string|max:255',
        ]);

        $menu = Menu::create($request->all());

        return response()->json($menu, 201);
    }

    public function show($id)
    {
        return Menu::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'sometimes|string|max:255',
            'description' => 'nullable|string',
            'price' => 'sometimes|numeric',
            'category' => 'sometimes|string|max:255',
        ]);

        $menu = Menu::findOrFail($id);
        $menu->update($request->all());

        return response()->json($menu, 200);
    }

    public function destroy($id)
    {
        Menu::findOrFail($id)->delete();

        return response()->json(null, 204);
    }

    // Define the create method
    public function create()
    {
        return view('create_menu');
    }
}




    

    

