<?php

use Illuminate\Support\Facades\Route;

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

// ROTAS DO CONTROLLER DAS EMERGENCIAS
Route::get('/', [App\Http\Controllers\ControladorEmergencia::class, 'index']);
Route::get('/listarEmergencia/{id}', [App\Http\Controllers\ControladorEmergencia::class, 'show']);

// ROTAS DO CONTROLLER DAS EMERGENCIAS
Route::get('/listarMensagens/{idEmergencia}', [App\Http\Controllers\ControladorMensagem::class, 'show'])->name("listarMensagens");
Route::get('/novaMensagem/{idEmergencia}', [App\Http\Controllers\ControladorMensagem::class, 'store']);


Auth::routes();