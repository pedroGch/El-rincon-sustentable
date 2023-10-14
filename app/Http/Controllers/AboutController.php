<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
  /**
   * Retorna la vista de la página de nosotros
   * @return \Illuminate\View\View
   */
  public function index()
  {
    return view('nosotros');
  }

  // acá vamos a ir agregando los métodos que necesitemos para renderizar las otras vistas
}
