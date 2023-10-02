<?php

namespace App\Http\Controllers;
use App\Models\Noticia;
use Illuminate\Http\Request;

class BlogController extends Controller
{
  public function index()
  {
    $noticias = Noticia::all();
    return view('blog.blog', ["noticias" => $noticias]);
  }

  public function leerCompleto(int $id)
  {
    return view('blog.detalle', ['noticia' => Noticia::findOrFail($id)]);
  }

  public function obtenerNoticias()
  {
    $noticias = Noticia::all();
    return view('blog.tabla_noticias', ["noticias" => $noticias]);
  }

  public function borrarNoticia(int $id)
  {
    $noticia = Noticia::findOrFail($id);
    $noticia->delete();
    return redirect('/blog/gestor_noticias')
        ->with('status.message', 'El Articulo ' . e($noticia->titulo) . ' fue eliminada con éxito.');

  }

  public function editarNoticia(int $id)
  {
    return null;
  }

  public function formularioCrearNoticia()
  {
    return view('blog.formulario_alta_noticia');
  }

  public function crearNoticia(Request $request)
  {
    //$data = $request->except(['_token']);
    $request->validate(Noticia::$rules,Noticia::$errorMessages);

    $data = $request->only(['titulo','imagen','alt','contenido']);
    Noticia::create($data);
    return redirect('/blog/gestor_noticias')
      ->with('status.message', 'La noticia fue correctamente agregada');
  }


  // acá vamos a ir agregando los métodos que necesitemos para renderizar las otras vistas
}
