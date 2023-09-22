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

  // acá vamos a ir agregando los métodos que necesitemos para renderizar las otras vistas
}
