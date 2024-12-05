<?php
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\MensagemController;
use App\Http\Controllers\API\EmergenciaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Autenticação
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/gerarSenhaADM', [AuthController::class, 'gerarSenhaADM']);

//Mensagens
Route::post('/novaMensagem', [MensagemController::class, 'store']);
Route::post('/verMensagens', [MensagemController::class, 'show']);

//Emergencias
Route::post('/novaEmergencia', [EmergenciaController::class, 'store']);