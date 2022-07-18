<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgenteController;
use App\Http\Controllers\SupervisorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



/*   Rutas del agente */

Route::get('/Agente', function () {
    return view('Agente.principal');
});

Route::get('/Agente/Calendar', function () {
    return view('Agente.calendario');
});

/*  rutas del supervisor  */

Route::get('/Supervisor', function () {
    return view('Supervisor.principal');
});

Route::get('/Supervisor/Agente', function () {
    return view('Supervisor.totalAgente');
});

Route::get('/Supervisor/Actualizar', function () {
    return view('Supervisor.actualizar');
});

Route::get('/Supervisor/Calendario-Agente', function () {
    return view('Supervisor.calenAgente');
});

Route::get('/Supervisor/Horario-Agente', function () {
    return view('Supervisor.HorarioAgente');
});

Route::get('/Supervisor/Asignar-horario', function () {
    return view('Supervisor.asignar');
});

/*  rutas de finanzasr  */

Route::get('/Finanzas', function () {
    return view('Finanzas.principal');
});

Route::get('/Finanzas/Agente', function () {
    return view('Finanzas.horaAgente');
});

Route::get('/Finanzas/Total-Agente', function () {
    return view('Finanzas.totalAgente');
});





