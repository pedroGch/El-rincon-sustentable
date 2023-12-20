<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/crear_cuenta', [\App\Http\Controllers\SesionController::class, 'crear_cuenta_form']);
Route::post('/crear_cuenta', [\App\Http\Controllers\SesionController::class, 'crear_cuenta_action']);
Route::post('/validar_usuario', [\App\Http\Controllers\SesionController::class, 'validar_usuario']);
Route::post('/cerrar_sesion', [\App\Http\Controllers\SesionController::class, 'cerrar_sesion']);

//RUTAS RELACIONADAS AL BLOG DE NOTICIAS
Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index']);
Route::get('/blog/{id}/leer_mas', [\App\Http\Controllers\BlogController::class, 'leerCompleto'])
  ->whereNumber('id');
Route::get('/blog/noticia/nueva', [\App\Http\Controllers\BlogController::class, 'formularioCrearNoticia'])
  ->middleware('only_admin_allow')
  ->middleware(['auth']);
Route::post('/blog/noticia/nueva', [\App\Http\Controllers\BlogController::class, 'crearNoticia'])
  ->middleware('only_admin_allow')
  ->middleware(['auth']);
Route::get('/blog/{id}/editar', [\App\Http\Controllers\BlogController::class, 'formularioEditarNoticia'])
  ->middleware('only_admin_allow')
  ->middleware(['auth']);
Route::post('/blog/{id}/editar', [\App\Http\Controllers\BlogController::class, 'editarNoticia'])
  ->middleware('only_admin_allow')
  ->middleware(['auth']);
Route::get('/blog/{id}/eliminar', [\App\Http\Controllers\BlogController::class, 'borrarNoticia'])
  ->middleware('only_admin_allow')
  ->whereNumber('id');

//RUTA RELACIONADA AL USUARIO
Route::get('/perfil_usuario', [\App\Http\Controllers\SesionController::class, 'perfil_usuario'])
  ->middleware(['auth'])
  ->middleware('only_user_allow')
  ->name('perfilUsuario');

//RUTAS RELACIONADAS AL PANEL DE ADMINISTRACIÓN
Route::get('/panel_admin', [\App\Http\Controllers\BlogController::class, 'dashboardAdmin'])
  ->middleware(['auth'])
  ->middleware('only_admin_allow');
Route::get('/blog/gestor_noticias', [\App\Http\Controllers\BlogController::class, 'obtenerNoticias'])
  ->middleware('only_admin_allow')
  ->middleware(['auth']);
Route::get('/tienda/gestor_productos', [\App\Http\Controllers\ProductoController::class, 'obtenerProductos'])
  ->middleware('only_admin_allow')
  ->middleware(['auth']);
Route::get('tabla_compras_usuarios', [\App\Http\Controllers\SesionController::class, 'listadoUsuarios'])
  ->middleware('only_admin_allow')
  ->middleware(['auth']);

// RUTAS RELACIONADAS A LA ADMINISTRACIÓN DE PRODUCTOS
Route::get('/tienda/producto/nuevo', [\App\Http\Controllers\ProductoController::class, 'formularioCrearProducto'])
  ->middleware('only_admin_allow')
  ->middleware(['auth']);
Route::post('/tienda/producto/nuevo', [\App\Http\Controllers\ProductoController::class, 'altaDeProducto'])
  ->middleware('only_admin_allow')
  ->middleware(['auth']);
Route::get('/tienda/{id}/editar', [\App\Http\Controllers\ProductoController::class, 'formularioEditarProducto'])
  ->middleware('only_admin_allow')
  ->middleware(['auth']);
Route::post('/tienda/{id}/editar', [\App\Http\Controllers\ProductoController::class, 'editarProducto'])
  ->middleware('only_admin_allow')
  ->middleware(['auth']);
Route::get('/tienda/{id}/eliminar', [\App\Http\Controllers\ProductoController::class, 'bajaDeProducto'])
  ->middleware('only_admin_allow')
  ->whereNumber('id');

// RUTAS RELACIONADAS AL PROCESO DE COMPRA
Route::get('/carrito', [\App\Http\Controllers\CarritoController::class, 'index'])
  ->middleware(['auth'])
  ->middleware('only_user_allow')
  ->name('tablaCarrito');
Route::post('/carrito/vaciar', [\App\Http\Controllers\CarritoController::class, 'vaciarCarrito'])
  ->middleware(['auth'])
  ->middleware('only_user_allow')
  ->name('vaciarCarrito');
Route::post('/carrito/actualizar/{id}', [\App\Http\Controllers\CarritoController::class, 'actualizarProductoCarrito'])
  ->middleware(['auth'])
  ->middleware('only_user_allow')
  ->name('actualizarProductoCarrito');
Route::post('/carrito/eliminar/{id}', [\App\Http\Controllers\CarritoController::class, 'eliminarProductoCarrito'])
  ->middleware(['auth'])
  ->middleware('only_user_allow')
  ->name('eliminarProductoCarrito');
Route::post('/carrito/{id}', [\App\Http\Controllers\CarritoController::class, 'agregarProductoCarrito'])
    ->middleware(['auth'])
    ->whereNumber('id')
    ->middleware('only_user_allow')
    ->name('agregarProductoCarrito');
Route::get('/checkout', [\App\Http\Controllers\MercadoPagoController::class, 'obtenerCarrito'])
  ->middleware(['auth'])
  ->middleware('only_user_allow')
  ->middleware('only_checkout_with_full_trolley')
  ->name('formCarrito');
Route::get('/pago/aprobado', [\App\Http\Controllers\MercadoPagoController::class, 'success'])
  ->middleware(['auth'])
  ->middleware('only_user_allow')
  ->name('pago.aprobado');
Route::get('/pago/rechazado', [\App\Http\Controllers\MercadoPagoController::class, 'pending'])
  ->middleware(['auth'])
  ->middleware('only_user_allow')
  ->name('pago.rechazado');
Route::get('/pago/pendiente', [\App\Http\Controllers\MercadoPagoController::class, 'failure'])
  ->middleware(['auth'])
  ->middleware('only_user_allow')
  ->name('pago.pendiente');



