<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
  /**
   * Retorna la vista de la página de la tienda
   * @return \Illuminate\View\View
   */
  public function index()
  {
    // $productos = Producto::all();
    $productos = Producto::with('categoria', 'etiquetas')->get();

    return view('tienda', ["productos" => $productos]);
  }

  /**
   * Retorna la vista de la página del detalle de un producto
   * @return \Illuminate\View\View
   */
  public function detalleProducto(int $id)
  {
    return view('detalle_producto', ["producto" => Producto::findOrFail($id)]);
  }

  /**
   * Retorna la vista de la página del detalle de un producto
   * @return \Illuminate\View\View
   */
  public function altaDeProducto(Request $request)
  {
    $data = 'algo que todavia no se que es';

    $producto = Producto::create($data);
    //aca decimos que agregamos la relacion de etiquitas, si es que vino en el request
    //de lo contrario mandamos un array vacio
    $producto->etiquetas()->attach($request->input('etiquetas') ?? []);

    return view('detalle_producto', ["producto" => $producto]);
  }
}
