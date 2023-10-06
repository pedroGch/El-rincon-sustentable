<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;

class SesionController extends Controller
{
  public function iniciar_sesion()
  {
    return view('iniciar_sesion');
  }

  public function validar_usuario(Request $request)
  {
    $usuarios = Usuario::all();
    dd($usuarios);
    return view('welcome');
  }

  public function cerrar_sesion()
  {
    return view('welcome');
  }

  public function crear_cuenta()
  {
    return view('crear_cuenta');
  }

  public function dashboard_admin()
  {
    return view('dashboard_admin');
  }
}
