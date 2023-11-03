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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])
  ->name('inicio');
Route::get('/nosotros', [\App\Http\Controllers\AboutController::class, 'index'])
  ->name('nosotros');
Route::get('/contacto', [\App\Http\Controllers\ContactoController::class, 'index'])
  ->name('contacto');
Route::get('/tienda', [\App\Http\Controllers\ProductoController::class, 'index'])
  ->name('tienda');
Route::get('/producto/{id}', [\App\Http\Controllers\ProductoController::class, 'detalleProducto'])
  ->whereNumber('id')
  ->name('detalle.producto');
Route::post('/contacto', [\App\Http\Controllers\ContactoController::class, 'validar_contacto']);

//RUTAS RELACIONADAS AL INICIO DE SESION
Route::get('/iniciar_sesion', [\App\Http\Controllers\SesionController::class, 'iniciar_sesion']);
Route::get('/crear_cuenta', [\App\Http\Controllers\SesionController::class, 'crear_cuenta']);
Route::post('/validar_usuario', [\App\Http\Controllers\SesionController::class, 'validar_usuario']);
Route::post('/cerrar_sesion', [\App\Http\Controllers\SesionController::class, 'cerrar_sesion']);

//RUTAS RELACIONADAS AL BLOG DE NOTICIAS
Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index']);
Route::get('/blog/{id}/leer_mas', [\App\Http\Controllers\BlogController::class, 'leerCompleto']);
Route::get('/blog/gestor_noticias', [\App\Http\Controllers\BlogController::class, 'obtenerNoticias'])->middleware(['auth']);
Route::get('/blog/noticia/nueva', [\App\Http\Controllers\BlogController::class, 'formularioCrearNoticia'])->middleware(['auth']);
Route::post('/blog/noticia/nueva', [\App\Http\Controllers\BlogController::class, 'crearNoticia'])->middleware(['auth']);
Route::get('/blog/{id}/editar', [\App\Http\Controllers\BlogController::class, 'formularioEditarNoticia'])->middleware(['auth']);
Route::post('/blog/{id}/editar', [\App\Http\Controllers\BlogController::class, 'editarNoticia'])->middleware(['auth']);

//RUTAS RELACIONADAS AL PANEL DE ADMINISTRACIÓN
Route::get('/panel_admin', [\App\Http\Controllers\BlogController::class, 'dashboardAdmin'])->middleware(['auth']);
Route::get('/perfil_usuario', [\App\Http\Controllers\SesionController::class, 'perfil_usuario'])->middleware(['auth']);
Route::get('/blog/{id}/eliminar', [\App\Http\Controllers\BlogController::class, 'borrarNoticia'])->whereNumber('id');

// RUTAS RELACIONADAS A LA ADMINISTRACIÓN DE PRODUCTOS
Route::get('/tienda/gestor_productos', [\App\Http\Controllers\ProductoController::class, 'obtenerProductos'])->middleware(['auth']);
Route::get('/tienda/producto/nuevo', [\App\Http\Controllers\ProductoController::class, 'formularioCrearProducto'])->middleware(['auth']);
Route::post('/tienda/producto/nuevo', [\App\Http\Controllers\ProductoController::class, 'altaDeProducto'])->middleware(['auth']);
Route::get('/tienda/{id}/editar', [\App\Http\Controllers\ProductoController::class, 'formularioEditarProducto'])->middleware(['auth']);
Route::post('/tienda/{id}/editar', [\App\Http\Controllers\ProductoController::class, 'editarProducto'])->middleware(['auth']);
Route::get('/tienda/{id}/eliminar', [\App\Http\Controllers\ProductoController::class, 'bajaDeProducto'])->whereNumber('id');
