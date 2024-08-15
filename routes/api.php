<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

//Las rutas de la API para consultar las funciones en postman

//Publicar una solicitud
Route::post('/register',[AuthController::class,'register']);

// Ruta para el manejo de la autenticación
Route::post('/login', [AuthController::class, 'login']);

//proteger la ruta con middleware sanctum
// Ruta para cerrar sesión
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth:sanctum');


