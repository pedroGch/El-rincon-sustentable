<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use MercadoPago\MercadoPagoConfig;
use MercadoPago\Client\Preference\PreferenceClient;

class MercadoPagoController extends Controller
{
public function obtenerCarrito()
{
  // $carrito = session()->get('carrito');
  // $productos = [];
  // $total = 0;
  // if ($carrito) {
  //   foreach ($carrito as $id => $detalles) {
  //     $producto = Producto::findOrFail($id);
  //     $producto->cantidad = $detalles['cantidad'];
  //     $producto->total = $producto->precio * $detalles['cantidad'];
  //     $total += $producto->total;
  //     $productos[] = $producto;
  //   }
  $productos = Producto::whereIn('id', [1, 2, 3])->get();
  $totalPrice = 0;

  //Preparación de preferencia de pago
  $items = [];
  foreach ($productos as $producto) {
    $items[] = [
      'title' => $producto->nombre_prod,
      'quantity' => 1,
      'currency_id' => 'ARS',
      'unit_price' => $producto->precio,
    ];
    $totalPrice += $producto->precio * 1;
  }
  //Configuración SDK Mercado Pago
  MercadoPagoConfig::setAccessToken(env('MP_ACCESS_TOKEN'));

  //Creación de preferencia de pago
  $client = new PreferenceClient();
  $preference = $client->create([
    'items' => $items,
    // 'back_urls' => [
    //   'success' => route('pago.aprobado'),
    //   'failure' => route('pago.rechazado'),
    //   'pending' => route('pago.pendiente'),
    // ],
    // 'auto_return' => 'approved',
  ]);

  return view('tienda.carrito', [
    'productos' => $productos,
    'totalPrice' => $totalPrice,
    'preference' => $preference,
    'mpPublicKey' => env('MP_PUBLIC_KEY'),
  ]);

}
}
