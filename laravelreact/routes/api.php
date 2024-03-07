<?php

use App\Http\Controllers\PersonaController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/listar',[PersonaController::class, 'index']);

Route::post('/crear',[PersonaController::class, 'store']);

Route::get('/user/{id}',[PersonaController::class, 'show']);

Route::put('/actualizar/{id}',[PersonaController::class, 'update']);

Route::delete('/eliminar/{id}',[PersonaController::class, 'destroy']);
