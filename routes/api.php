<?php

use Illuminate\Http\Request;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::apiResource('menus', MenuController::class);
Route::post('menus/general_price', [MenuController::class, 'setGeneralPrice']);
Route::get('menus/general_price', [MenuController::class, 'getGeneralPrice']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});




