<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Carrito;
use Illuminate\Support\Facades\Auth;
use MercadoPago\MercadoPagoConfig;
use MercadoPago\Client\Preference\PreferenceClient;

class MercadoPagoController extends Controller
{
public function obtenerCarrito()
{
  try {
    $productos = Carrito::where('usuario_id', Auth::user()->id)->first()
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

public function success()
{
  return view('tienda.pago.aprobado');
}

}
