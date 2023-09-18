<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
  public function index()
  {
    return view('blog.blog');
  }

  // acá vamos a ir agregando los métodos que necesitemos para renderizar las otras vistas
}
