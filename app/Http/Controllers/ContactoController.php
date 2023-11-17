<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
  /**
   * Retorna la vista de la página de contacto
   * @return \Illuminate\View\View
   */
  public function index()
  {
    return view('contacto');
  }

  /**
   * Valida los datos del formulario de contacto
   * @param  Request $request
   * @return \Illuminate\Http\RedirectResponse
   */
  public function validar_contacto(Request $request)
  {

    $request->validate(Contacto::$rules, Contacto::$errorMessages);

    // $data = $request->only(['nombre','email','asunto','mensaje']);

    // Contacto::create($data);

    return redirect('/contacto');
  }
}
