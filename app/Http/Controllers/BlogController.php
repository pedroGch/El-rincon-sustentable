<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
  /**
   * Muestra la lista de noticias
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function index()
  {
    //$noticias = Noticia::all();
    $noticias = Noticia::paginate(2);
    return view('blog.blog', ["noticias" => $noticias]);
  }

  /**
   * Muestra el detalle de una noticia
   * @param int $id
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function leerCompleto(int $id)
  {
    return view('blog.detalle', [
      'noticia' => Noticia::findOrFail($id),
      'noticias' => Noticia::all(),
    ]);
  }

  /**
   * Muestra el gestor de noticias
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function obtenerNoticias()
  {
    $noticias = Noticia::all();
    return view('blog.tabla_noticias', ["noticias" => $noticias]);
  }

  /**
   * Borra una noticia
   * @param int $id
   * @return \Illuminate\Http\RedirectResponse
   */
  public function borrarNoticia(int $id)
  {
    $noticia = Noticia::findOrFail($id);
    $noticia->delete();
    //si tenia una magen cargada la borramos de la carpeta storage
    if ($noticia->imagen && Storage::has($noticia->imagen)){
      Storage::delete($noticia->imagen);
    }
    return redirect('/blog/gestor_noticias')->with('status.message', 'La noticia ' . e($noticia->titulo) . ' fue eliminada con éxito.');
  }

  /**
   * Muestra el formulario para crear una noticia
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function formularioCrearNoticia()
  {
    return view('blog.formulario_alta_noticia');
  }

  /**
   * Crea una noticia
   * @param Request $request
   * @return \Illuminate\Http\RedirectResponse
   */
  public function crearNoticia(Request $request)
  {
    //$data = $request->except(['_token']);
    $request->validate(Noticia::$rules, Noticia::$errorMessages);
    $data = $request->only(['titulo', 'imagen', 'alt', 'contenido']);
    if ($request->hasFile('imagen')) {
      $data['imagen'] = $request->file('imagen')->store('noticias');
    }
    Noticia::create($data);
    return redirect('/blog/gestor_noticias')
      ->with('status.message', 'La noticia fue correctamente agregada');
  }

  /**
   * Muestra el formulario para editar una noticia
   * @param int $id
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function formularioEditarNoticia(int $id)
  {
    return view('blog.formulario_edit_noticia', ['noticia' => Noticia::findOrFail($id)]);
  }


  /**
   * Edita una noticia
   * @param int $id
   * @param Request $request
   * @return \Illuminate\Http\RedirectResponse
   */
  public function editarNoticia(int $id, Request $request)
  {
    //buscamos la noticia que queremos editar
    $noticia = Noticia::findOrFail($id);
    //validamos con las reglas los datos del request
    $request->validate(Noticia::$rules, Noticia::$errorMessages);
    $data = $request->only(['titulo', 'imagen', 'alt', 'contenido']);
    //preguntamos si se subio una imagen
    if ($request->hasFile('imagen')) {
      $data['imagen'] = $request->file('imagen')->store('noticias'); //guardamos la imagen
    } else{
      // si no se subio una imagen, guardamos la que ya tenia
      $data['imagen'] = $noticia->imagen;
    }
    //actualizamos los campos menos el de token
    $noticia->update($data, $request->except(['_token']));
    // $noticia->update($request->except(['_token']));
    return redirect('/blog/gestor_noticias')
      ->with('status.message', 'La noticia fue correctamente editada');
  }


  /**
   * Muestra el panel de administración enviando las noticias
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function dashboardAdmin()
  {
    return view('dashboard_admin', [
      'noticias' => Noticia::all(),
      'productos' => Producto::all(),
    ]);
  }
}
