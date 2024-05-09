<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MenuController;


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
Route::post('/create_menu', [MenuController::class, 'store'])->name('menu.store');
Route::get('http://vps-c71468c0.vps.ovh.net/restaurante_laravel/resources/views/menu.blade.php', [MenuController::class, 'create'])->name('menu.create');



Route::get('/', function () {
    return view('homepage');
});

Route::get('http://vps-c71468c0.vps.ovh.net/restaurante_laravel/resources/views/contact.blade.php', function () {
    return view('contact');
});

Route::get('/whitelist', function () {
    return view('whitelist');
});

Route::get('/reserve_cancel', function () {
    return view('reserve_cancel');
});

Route::get('http://vps-c71468c0.vps.ovh.net/restaurante_laravel/resources/views/reserve.blade.php', function () {
    return view('reserve');
});

Route::get('http://vps-c71468c0.vps.ovh.net/restaurante_laravel/resources/views/about.blade.php', function () {
    return view('about');
});

Route::get('http://vps-c71468c0.vps.ovh.net/restaurante_laravel/resources/views/take_away.php', function () {
    return view('take_away');
});





Route::get('/create_menu', function () {
    return view('create_menu');
})->name('create_menu');

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









