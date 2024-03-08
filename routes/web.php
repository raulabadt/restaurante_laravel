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


Route::get('/', function () {
    return view('homepage');
});

Route::get('/contact', function () {
    return view('contact');
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




