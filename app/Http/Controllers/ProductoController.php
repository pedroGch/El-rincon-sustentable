<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
  /**
   * Retorna la vista de la página de la tienda
   * @return \Illuminate\View\View
   */
  public function index()
  {
    // $productos = Producto::all();
    //$productos = Producto::with('categoria', 'etiquetas')->get();
    $productos = Producto::with('categoria', 'etiquetas')->paginate(4);

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

  public function bajaDeProducto($id)
  {
    //buscamos el producto a eliminar
    $producto = Producto::findoOrFail($id);
    //rompemos la relacion
    $producto->deteach();
    //eliminamos el producto
    $producto->delete();
    //si tenia una magen cargada la borramos de la carpeta storage
    if ($producto->img && Storage::has($producto->img)){
      Storage::delete($producto->img);
    }
    //retornamos a una vista
    return view('detalle_producto');
  }

   /**
   * Muestra el gestor de productos
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function obtenerProductos()
  {
    $productos = Producto::all();
    return view('tienda.tabla_productos', ["productos" => $productos]);
  }

/**
   * Muestra el formulario para crear un producto
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function formularioCrearProducto()
  {
    $categorias = Categoria::all();
    return view('tienda.formulario_alta_producto', ["categorias" => $categorias]);
  }

}
