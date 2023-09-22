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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index']);
Route::get('/nosotros', [\App\Http\Controllers\AboutController::class, 'index']);
Route::get('/contacto', [\App\Http\Controllers\ContactoController::class, 'index']);
Route::get('/tienda', [\App\Http\Controllers\ProductoController::class, 'index']);
Route::get('/producto/{id}', [\App\Http\Controllers\ProductoController::class, 'detalleProducto']);
Route::get('/blog/{id}/leer_mas', [\App\Http\Controllers\BlogController::class, 'leerCompleto']);
