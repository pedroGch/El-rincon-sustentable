<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesionController extends Controller
{
  /**
   * Retorna la vista de la página de inicio de sesión
   * @return \Illuminate\View\View
   */
  public function iniciar_sesion()
  {
    return view('iniciar_sesion');
  }

  /**
   * Valida los datos del formulario de inicio de sesión y loguea al usuario
   * @param Request $request
   * @return \Illuminate\View\View
   */
  public function validar_usuario(Request $request)
  {
    $credentials = $request->only(['email', 'password']);
    if (!Auth::attempt($credentials)) {
      return redirect('/iniciar_sesion')->with('status.message', 'email y/o contraseña incorrecta')
        ->withInput();
    }

    $url = (Auth::user()->rol_fk == 1) ? '/panel_admin' : '/panel_admin';

    return redirect($url)->with('status.message', 'Hola ' . Auth::user()->name . ', iniciaste sesión con éxito');
  }

  /**
   * Cierra la sesión del usuario
   * @param Request $request
   * @return \Illuminate\View\View
   */
  public function cerrar_sesion(Request $request)
  {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return view('welcome')->with('status.message', 'Sesión cerrada correctamente');
  }

  /**
   * Retorna la vista de la página de creación de cuenta
   * @return \Illuminate\View\View
   */
  public function crear_cuenta()
  {
    return view('crear_cuenta');
  }

  /**
   * Retorna la vista de la página del dashboard del administrador
   * @return \Illuminate\View\View
   */
  public function dashboard_admin()
  {
    return view('dashboard_admin');
  }

  /**
   * Retorna la vista de la página del perfil del usuario
   * @return \Illuminate\View\View
   */
  public function perfil_usuario()
  {
    $user = User::findOrFail(Auth::user()->id);
    $compras = Compra::where('usuario_id', Auth::user()->id)->with(['productos'])->get();
    //dd($compras);
    return view('perfil_usuario', [
      'user'=> Auth::user(),
      'user_db' => $user,
      'compras' => $compras,
    ]);
  }


  /**
   * Muestra el panel de administración enviando el usuario logueado
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function dashboardAdmin()
  {
    $usuarios = User::where('id', '!=', Auth::user()->id)->get();

    return view('dashboard_admin', [
      'user' => Auth::user(),
      'usuarios' => $usuarios,
    ]);
  }


  /**
   * Muestra la vista de listado de usuarios y sus compras
   * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
   */
  public function listadoUsuarios()
  {
    $usuarios = User::with(['compras', 'compras.productos'])->where('id', '!=', Auth::user()->id)->get();

    return view('tabla_compras_usuarios', [
      'usuarios' => $usuarios,
    ]);
  }
}
