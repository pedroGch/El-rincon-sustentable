<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
  public function index()
  {
    // $productos = Producto::all();
    $productos = Producto::with('categoria')->get();

    return view('tienda', ["productos" => $productos]);
  }

  public function detalleProducto(int $id)
  {
    return view('detalle_producto', ["producto" => Producto::findOrFail($id)]);
  }
}
