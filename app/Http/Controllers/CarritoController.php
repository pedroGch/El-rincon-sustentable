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
    $producto->subtotal = $subtotal;
    $totalPrice += $subtotal;
  }

  return view('tienda.carrito', [
    'productos' => $productos,
    'totalPrice' => $totalPrice,
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
    $usuarioId = Auth::user()->id;

    // Buscamos si el producto ya está en el carrito del usuario
    $productoEnCarrito = Carrito::where('usuario_id', $usuarioId)
    ->where('producto_id', $producto->id)
    ->first();

    if ($productoEnCarrito) {
      // Si el producto ya está en el carrito, actualiza la cantidad sumando la nueva cantidad
      $nuevaCantidad = $productoEnCarrito->cantidad_prod + $request->cantidad_prod;
      $productoEnCarrito->update(['cantidad_prod' => $nuevaCantidad]);

      return redirect()->route('tablaCarrito')
        ->with('status.message', 'El producto se agregó al carrito');
    } else {
      // Si el producto no está en el carrito, crea un nuevo registro
      Carrito::create([
          'usuario_id' => $usuarioId,
          'producto_id' => $producto->id,
          'cantidad_prod' => $request->cantidad_prod,
      ]);
    }

    return redirect()->route('tablaCarrito')
      ->with('status.message', 'El producto se agregó al carrito');

  }


  /**
   * Método que actualiza la cantidad de productos en el carrito
   * @param $id
   * @param Request $request
   * @return \Illuminate\Http\RedirectResponse
   */
  public function actualizarProductoCarrito(Request $request, int $id)
  {
    $producto = Producto::findOrFail($id);
    $usuarioId = Auth::user()->id;

    // Buscamos si el producto ya está en el carrito del usuario
    $productoEnCarrito = Carrito::where('usuario_id', $usuarioId)
    ->where('producto_id', $producto->id)
    ->first();

    if ($productoEnCarrito) {
      // Si el producto ya está en el carrito, actualiza la cantidad sumando la nueva cantidad
      $nuevaCantidad = $request->cantidad_prod;
      $productoEnCarrito->update(['cantidad_prod' => $nuevaCantidad]);

      return redirect()->route('tablaCarrito')
        ->with('status.message', 'El producto se actualizó en el carrito');
    }

    return redirect()->route('tablaCarrito');
  }


  /**
   * Método que elimina un producto del carrito
   * @param $id
   * @return \Illuminate\Http\RedirectResponse
   */
  public function eliminarProductoCarrito(int $id)
  {
    $producto = Producto::findOrFail($id);
    $usuarioId = Auth::user()->id;

    // Buscamos si el producto ya está en el carrito del usuario
    $productoEnCarrito = Carrito::where('usuario_id', $usuarioId)
    ->where('producto_id', $producto->id)
    ->first();

    if ($productoEnCarrito) {
      $productoEnCarrito->delete();

      return redirect()->route('tablaCarrito')
        ->with('status.message', 'El producto se eliminó del carrito');
    }

    return redirect()->route('tablaCarrito');
  }
}
