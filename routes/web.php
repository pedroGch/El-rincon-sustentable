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
Route::get('/nosotros', [\App\Http\Controllers\AboutController::class, 'index']);
Route::get('/contacto', [\App\Http\Controllers\ContactoController::class, 'index']);
Route::get('/tienda', [\App\Http\Controllers\ProductoController::class, 'index']);
Route::get('/producto/{id}', [\App\Http\Controllers\ProductoController::class, 'detalleProducto'])->whereNumber('id');
Route::get('/iniciar_sesion', [\App\Http\Controllers\SesionController::class, 'iniciar_sesion']);
Route::get('/crear_cuenta', [\App\Http\Controllers\SesionController::class, 'crear_cuenta']);
Route::post('/validar_usuario', [\App\Http\Controllers\SesionController::class, 'validar_usuario']);

//RUTAS RELACIONADAS AL BLOG DE NOTICIAS
Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index']);
Route::get('/blog/{id}/leer_mas', [\App\Http\Controllers\BlogController::class, 'leerCompleto']);
Route::get('/blog/gestor_noticias', [\App\Http\Controllers\BlogController::class, 'obtenerNoticias']);
Route::get('/blog/noticia/nueva', [\App\Http\Controllers\BlogController::class, 'formularioCrearNoticia']);
Route::post('/blog/noticia/nueva', [\App\Http\Controllers\BlogController::class, 'crearNoticia']);
Route::get('/blog/{id}/editar', [\App\Http\Controllers\BlogController::class, 'formularioEditarNoticia']);
Route::post('/blog/{id}/editar', [\App\Http\Controllers\BlogController::class, 'editarNoticia']);

//RUTAS RELACIONADAS AL PANEL DE ADMINISTRACIÓN
Route::get('/panel_admin', [\App\Http\Controllers\SesionController::class, 'dashboard_admin']);
Route::get('/panel_admin', [\App\Http\Controllers\BlogController::class, 'accederDesdePanelAdmin']);
Route::get('/perfil_usuario', [\App\Http\Controllers\SesionController::class, 'perfil_usuario']);

//Route::get('/blog/{id}/eliminar', [\App\Http\Controllers\BlogController::class, 'borrarNoticia'])->whereNumber('id');
Route::get('/blog/{id}/eliminar', [\App\Http\Controllers\BlogController::class, 'borrarNoticia'])->whereNumber('id');
