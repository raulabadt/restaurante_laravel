<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SearchController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::post('/enviar-reserva', [ReservaController::class, 'store'])->name('enviar.reserva');
Route::post('/cancelar-reserva', [ReservaController::class, 'cancelar'])->name('cancelar.reserva');
Route::post('/whitelist', [ReservaController::class, 'listaEspera'])->name('listaEspera.whitelist');
Route::get('/cpanel', [DashboardController::class, 'index'])->name('cpanel.index');

// Ruta para mostrar la vista de gestión del menú
//Route::get('/create_menu', [MenuController::class, 'index'])->name('create_menu');
// Rutas para las operaciones CRUD
//Route::post('/menus', [MenuController::class, 'store'])->name('add_menu');
//Route::put('/menus/{id}', [MenuController::class, 'update'])->name('update_menu');
//Route::delete('/menus/{id}', [MenuController::class, 'destroy'])->name('delete_menu');
// Ruta para mostrar el menú público
//Route::get('/menu', [MenuController::class, 'publicMenu'])->name('menu');

Route::get('/create_menu', function () {
    return view('create_menu');
});

Route::get('/cpanel', [SearchController::class, 'index']);
Route::get('/search', [SearchController::class, 'search']);

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/whitelist', function () {
    return view('whitelist');
});

Route::get('/reserve_cancel', function () {
    return view('reserve_cancel');
});

Route::get('/reserve', function () {
    return view('reserve');
})->name('reserve');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/take_away', function () {
    return view('take_away');
})->name('take_away');

Route::get('/reserve_correcta', function () {
    return view('reserve_correcta');
})->name('reserve_correcta');

Route::get('/reserve_cancel_correcta', function(){
    return view('reserve_cancel_correcta');
})->name('reserve_cancel_correcta');

Route::get('/cod_no_existe',function(){
    return view('cod_no_existe');
})->name('cod_no_existe');

Route::get('/cupo_completo',function(){
    return view('cupo_completo');
})->name('cupo_completo');
