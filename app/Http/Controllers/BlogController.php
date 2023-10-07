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

  public function formularioEditarNoticia(int $id)
  {
    return view('blog.formulario_edit_noticia',['noticia' => Noticia::findOrFail($id)]);
  }

  public function editarNoticia(int $id, Request $request)
  {

    //buscamos la noticia que queremos editar
    $noticia = Noticia::findOrFail($id);

    //validamos con las reglas los datos del request
    $request->validate(Noticia::$rules,Noticia::$errorMessages);

    //preguntamos si se subio una imagen
    if($request->hasFile('imagen')){
      //guardamos la imagen en la carpeta public
      $request->file('imagen')->store('noticias');
    }
    //actualizamos los campos menos el de token
    $noticia->update($request->except(['_token']));
    return redirect('/blog/gestor_noticias')
      ->with('status.message', 'La noticia fue correctamente editada');
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
