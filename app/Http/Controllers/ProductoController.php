<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Compra;
use App\Models\Etiqueta;
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
   * Crea un nuevo producto
   * @param Request $request
   * @return \Illuminate\View\View
   */
  public function altaDeProducto(Request $request)
  {
    //validamos los datos
    $request->validate(Producto::$rules, Producto::$errorMessages);
    $data = $request->only('nombre_prod', 'categoria_id', 'descripcion', 'stock', 'precio', 'alt', 'imagen_prod');

    //si viene una imagen en el request
    if ($request->hasFile('imagen_prod')) {
      //guardamos la imagen en la carpeta storage
      $request->validate(Producto::$ruleAlt, Producto::$errorMessages);
      $data['imagen_prod'] = $request->file('imagen_prod')->store('productos');
    }
    /** @var Movie */
    $producto = Producto::create($data);

    //agregamos la relacion de etiquetas, si es que vino en el request
    //de lo contrario mandamos un array vacio
    $producto->etiquetas()->attach($request->input('etiquetas') ?? []);
    $producto->compras()->attach($request->input('compras') ?? []);

    return redirect('/tienda/gestor_productos')
      ->with('status.message', 'El producto fue correctamente agregado');
  }


  /**
   * Edita un producto
   * @param int $id
   * @param Request $request
   * @return \Illuminate\Http\RedirectResponse
   */
  public function editarProducto(int $id, Request $request)
  {
    //buscamos el producto que queremos editar
    $producto = Producto::findOrFail($id);
    //validamos con las reglas los datos del request
    $request->validate(Producto::$rules, Producto::$errorMessages);
    $data = $request->only('nombre_prod', 'categoria_id', 'descripcion', 'stock', 'precio', 'alt', 'imagen_prod', 'etiquetas');

    //preguntamos si se subio una imagen
    if ($request->hasFile('imagen_prod')) {
      $request->validate(Producto::$ruleAlt, Producto::$errorMessages);
      $data['imagen_prod'] = $request->file('imagen_prod')->store('productos'); //guardamos la imagen
    } else{
      // si no se subio una imagen, guardamos la que ya tenia
      $data['imagen_prod'] = $producto->imagen_prod;
    }
    //etiquetas, el request trae un array de las que tienen que quedar
    $producto->etiquetas()->sync($data['etiquetas'] ?? []);

    //actualizamos los campos menos el de token
    $producto->update($data, $request->except(['_token']));

    return redirect('/tienda/gestor_productos')
      ->with('status.message', 'El producto fue correctamente editado');
  }


  /**
   * Elimina un producto
   * @param int $id
   * @return \Illuminate\Http\RedirectResponse
   */
  public function bajaDeProducto($id)
  {
    //buscamos el producto a eliminar
    $producto = Producto::findOrFail($id);
    //rompemos la relacion con las etiquetas
    $producto->etiquetas()->detach();
    //eliminamos el producto
    $producto->delete();
    //si tenia una magen cargada la borramos de la carpeta storage
    if ($producto->imagen_prod && Storage::has($producto->imagen_prod)){
      Storage::delete($producto->imagen_prod);
    }
    return redirect('/tienda/gestor_productos')
      ->with('status.message', 'El producto fue correctamente eliminado.');
  }


   /**
   * Muestra el gestor de productos
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function obtenerProductos()
  {
    $productos = Producto::with(['categoria', 'etiquetas'])->get();
    return view('tienda.tabla_productos', ["productos" => $productos]);
  }


  /**
   * Muestra el formulario para crear un producto
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function formularioCrearProducto()
  {
    return view('tienda.formulario_alta_producto', [
      'categorias' => Categoria::all(),
      'etiquetas' => Etiqueta::all()
    ]);
  }


  /**
   * Muestra el formulario para editar una noticia
   * @param int $id
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function formularioEditarProducto(int $id)
  {
    return view('tienda.formulario_editar_producto', [
      'producto' => Producto::findOrFail($id),
       'categorias' => Categoria::all(),
       'etiquetas' => Etiqueta::all()
      ]
    );
  }
}
