<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\General_price;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        return Menu::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'categoria' => 'required|in:primero,segundo,postre',
        ]);

        $menu = Menu::create($validated);

        return response()->json($menu, 201);
    }

    public function show(Menu $menu)
    {
        return $menu;
    }

    public function update(Request $request, Menu $menu)
    {
        $validated = $request->validate([
            'nombre' => 'sometimes|required|string|max:255',
            'categoria' => 'sometimes|required|in:primero,segundo,postre',
        ]);

        $menu->update($validated);

        return response()->json($menu, 200);
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();

        return response()->json(null, 204);
    }

    public function setGeneralPrice(Request $request)
    {
        $validated = $request->validate([
            'generalPrice' => 'required|numeric',
        ]);

        General_price::updateOrCreate(
            ['key' => 'general_price'],
            ['value' => $validated['generalPrice']]
        );
        dd($request);
        return response()->json(['message' => 'Precio general actualizado'], 200);
    }

    public function getGeneralPrice()
    {
        $setting = General_price::where('key', 'general_price')->first();
        $generalPrice = $setting ? $setting->value : null;

        return response()->json(['generalPrice' => $generalPrice], 200);
    }
}  
