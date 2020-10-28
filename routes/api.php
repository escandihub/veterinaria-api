<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\ProductoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['prefix' => 'admin'], function () {
    Route::apiResource('horarios', HorarioController::class);
    Route::apiResource('productos', ProductoController::class);
    Route::apiResource('categorias', CategoriaController::class);
    Route::apiResource('servicios', ServicioController::class);
});
