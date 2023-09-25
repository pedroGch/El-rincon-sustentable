<?php

namespace App\Http\Controllers;
use App\Models\Noticia;
use Illuminate\Http\Request;

class BlogController extends Controller
{
  public function index()
  {
    //vamos a usar el modelo de noticia para traer todas las noticias
    //de la tabla, y poder listarlas en pantalla
    //si queremos traer todos los registro de una tabla
    //podemos usar el metodo all
    //ese metodo retorna un array con todos los registros de la tabla
    //convertidos a clases del modelo
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
        ->with('status.message', 'El Articulo <b>' . e($noticia->titulo) . '</b> fue eliminada con éxito.');

  }

  public function editarNoticia(int $id)
  {
    return null;
  }

  public function crearNoticia(Request $request)
  {
    return null;
  }


  // acá vamos a ir agregando los métodos que necesitemos para renderizar las otras vistas
}
