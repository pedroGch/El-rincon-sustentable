<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Carrito;
use App\Models\Compra;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use MercadoPago\MercadoPagoConfig;
use MercadoPago\Client\Preference\PreferenceClient;

class MercadoPagoController extends Controller
{

/**
 * Método que retorna la vista del checkout y crea la preferencia de pago de Mercado Pago
 * @return \Illuminate\View
 */
public function obtenerCarrito()
{
  try {
    $productos = Carrito::where('usuario_id', Auth::user()->id)
    ->with('productos')
    ->get();

  $totalPrice = 0;

  //Preparación de preferencia de pago
  $items = [];
  foreach ($productos as $productoCarrito) {
    $items[] = [
      'title' => $productoCarrito->nombre_prod,
      'quantity' => $productoCarrito->cantidad_prod,
      'currency_id' => 'ARS',
      'unit_price' => $productoCarrito->productos->precio,
    ];
    $subtotal = $productoCarrito->cantidad_prod * $productoCarrito->productos->precio;
    $productoCarrito->subtotal = $subtotal;
    $totalPrice += $subtotal;
  }
  //Configuración SDK Mercado Pago
  MercadoPagoConfig::setAccessToken(env('MP_ACCESS_TOKEN'));

  //Creación de preferencia de pago
  $client = new PreferenceClient();
  $preference = $client->create([
    'items' => $items,
    //redireccionamiento al terminar el flujo de cobro
    'back_urls' => [
      'success' => route('pago.aprobado'),
      'failure' => route('pago.rechazado'),
      'pending' => route('pago.pendiente'),
    ],
    'auto_return' => 'approved',
  ]);

  return view('tienda.checkout', [
    'productos' => $productos,
    'totalPrice' => $totalPrice,
    'subtotal' => $subtotal ?? '',
    'preference' => $preference,
    'mpPublicKey' => env('MP_PUBLIC_KEY'),
  ]);
  } catch (\Exception $e) {
    dd($e);
  }
}

/**
 * Método que procesa el pago exitoso
 * @return \Illuminate\View
 */
public function success()
{
  $productos = Carrito::where('usuario_id', Auth::user()->id)
  ->get();

  $totalPrice = 0;
  $productosIds = [];

  foreach ($productos as $producto) {
    $subtotal = $producto->cantidad_prod * $producto->productos->precio;
    $producto->subtotal = $subtotal;
    $totalPrice += $subtotal;

    $productosIds[] = $producto->productos->id;
  }

  $compra = Compra::create([
    'usuario_id' => Auth::user()->id,
    'fecha_compra' => now(),
    'importe_compra' => $totalPrice,
  ]);

  $compra->productos()->attach($productosIds);

  $metodosCarrito = new CarritoController();
  $metodosCarrito->vaciarCarrito();

  return view('tienda.payment_success');
}

/**
 * Método que procesa el pago pendiente
 * @return \Illuminate\View
 */
public function pending()
{
    return view('tienda.payment_pending');
}


/**
 * Método que procesa el pago rechazado
 * @return \Illuminate\View
 */
public function failure()
{
  return view('tienda.payment_failure');
}

}
