<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesionController extends Controller
{
  public function iniciar_sesion()
  {
    return view('iniciar_sesion');
  }

  public function validar_usuario(Request $request)
  {
    $credentials = $request->only(['email', 'password']);
    if (!Auth::attempt($credentials)){
      return redirect('/iniciar_sesion')->with('status.message','email y/o contraseña incorrecta')
      ->withInput();
    }

    $url = (Auth::user()->rol_fk == 1) ? '/panel_admin' : '/panel_admin';

    return redirect($url)->with('status.message', 'Hola '.Auth::user()->name.', iniciaste sesión con éxito' );
  }

  public function cerrar_sesion(Request $request)
  {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return view('welcome')->with('status.message','Sesión cerrada correctamente');
  }

  public function crear_cuenta()
  {
    return view('crear_cuenta');
  }

  public function dashboard_admin()
  {
    return view('dashboard_admin');
  }

  public function perfil_usuario()
  {
    return view('perfil_usuario');
  }
}
