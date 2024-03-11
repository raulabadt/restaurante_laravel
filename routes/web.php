<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservaController;

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


Route::get('/', function () {
    return view('homepage');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/whitelist', function () {
    return view('whitelist');
});

Route::get('/reserve_cancel', function () {
    return view('reserve_cancel');
});

Route::get('/reserve', function () {
    return view('reserve');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/take_away', function () {
    return view('take_away');
});

Route::get('/menu', function () {
    return view('menu');
});

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

Route::get('/dashboard',function(){
    return view('dashboard');
});