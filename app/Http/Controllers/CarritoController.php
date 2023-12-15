<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Carrito;
use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller
{

/**
 * Método que retorna la vista del carrito
 * @return \Illuminate\View
 */
public function index()
{
  $productos = Carrito::where('usuario_id', Auth::user()->id)
  ->with('productos')
  ->get();

  // Inicialización como un array vacío si $productos es null
  $productos = $productos ?? [];

  $totalPrice = 0;

  foreach ($productos as $producto) {
    $subtotal = $producto->cantidad_prod * $producto->productos->precio;
    $totalPrice += $subtotal;
  }

  return view('tienda.carrito', [
    'productos' => $productos,
    'totalPrice' => $totalPrice,
    'subtotal' => $subtotal ?? '',
  ]);
}

/**
 * Método que agrega un producto al carrito
 * @param $id
 * @param Request $request
 * @return \Illuminate\Http\RedirectResponse
 */
  public function agregarProductoCarrito(Request $request, int $id)
  {
    $producto = Producto::findOrFail($id);

    Carrito::create([
      'usuario_id' => Auth::user()->id,
      'producto_id' => $producto->id,
      'cantidad_prod' => $request->cantidad_prod,
    ]);

    return redirect()->route('tablaCarrito');

  }

}
