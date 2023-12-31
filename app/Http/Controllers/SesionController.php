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
      return redirect('/iniciar_sesion')->with('status.message', 'Email y/o contraseña incorrecta')
      ->with('status.type', 'red')
      ->with('status.svg', 'M17.293 6.293a1 1 0 0 0-1.414-1.414L12 10.586 7.707 6.293a1 1 0 0 0-1.414 1.414L10.586 12l-4.293 4.293a1 1 0 1 0 1.414 1.414L12 13.414l4.293 4.293a1 1 0 0 0 1.414-1.414L13.414 12l4.293-4.293z')
      ->withInput();
    }

    $url = (Auth::user()->rol == 'admin') ? '/panel_admin' : '/perfil_usuario';

    return redirect($url)->with('status.message', 'Hola ' . Auth::user()->name . ', iniciaste sesión con éxito')
      ->with('status.type', 'green');
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

    return view('iniciar_sesion')->with('status.message', 'Sesión cerrada correctamente')
      ->with('status.type', 'green');
  }

  /**
   * Retorna la vista de la página de creación de cuenta
   * @return \Illuminate\View\View
   */
  public function crear_cuenta_form()
  {
    return view('crear_cuenta');
  }

  /**
   * Crea una nueva cuenta de usuario
   * @param Request $request
   * @return \Illuminate\View\View
   */
  public function crear_cuenta_action(Request $request)
  {
    $request->validate(User::$rules, User::$errorMessages);
    try {
      $data = $request->only(['name', 'surname', 'email', 'password']);

      User::create($data);

      $credentials = $request->only(['email', 'password']);

      Auth::attempt($credentials);

      return redirect('/perfil_usuario')->with('status.message', 'Cuenta creada con éxito')
        ->with('status.type', 'green');
    } catch (\Exception $e) {
      return redirect('/crear_cuenta')->with('status.message', 'Error al crear la cuenta: ' . $e->getMessage())
        ->with('status.type', 'danger')
        ->with('status.svg', 'M17.293 6.293a1 1 0 0 0-1.414-1.414L12 10.586 7.707 6.293a1 1 0 0 0-1.414 1.414L10.586 12l-4.293 4.293a1 1 0 1 0 1.414 1.414L12 13.414l4.293 4.293a1 1 0 0 0 1.414-1.414L13.414 12l4.293-4.293z')
        ->withInput();
    }
  }

  /**
   * Retorna la vista de la página del perfil del usuario
   * @return \Illuminate\View\View
   */
  public function perfil_usuario()
  {
    $user = User::findOrFail(Auth::user()->id);
    $compras = Compra::where('usuario_id', Auth::user()->id)
    ->where('importe_compra', '>', 0)
    ->with(['productos'])->get();
    return view('perfil_usuario', [
      'user'=> Auth::user(),
      'user_db' => $user,
      'compras' => $compras,
    ]);
  }

  /**
   * Método que edita los datos del usuario
   * @param Request $request
   * @return \Illuminate\View\View
   */
  public function formularioEditarDatosUsuario(Request $request)
  {
    $user = User::findOrFail(Auth::user()->id);
    return view('editar_datos_usuario', [
      'user' => $user,
    ]);
  }


  /**
   * Método que edita los datos del usuario
   * @param Request $request
   * @return \Illuminate\View\View
   */
  public function editarDatosUsuario(Request $request)
  {
    $request->validate(User::$updateRules, User::$errorMessages);
    try {
      $data = $request->only(['name', 'surname', 'email']);
      $user = User::findOrFail(Auth::user()->id);
      $user->update($data);

      return redirect('/perfil_usuario')->with('status.message', 'Datos actualizados con éxito')
        ->with('status.type', 'green');
    } catch (\Exception $e) {
      return redirect('/perfil_usuario/editar')->with('status.message', 'Error al actualizar los datos: ' . $e->getMessage())
        ->with('status.type', 'danger')
        ->with('status.svg', 'M17.293 6.293a1 1 0 0 0-1.414-1.414L12 10.586 7.707 6.293a1 1 0 0 0-1.414 1.414L10.586 12l-4.293 4.293a1 1 0 1 0 1.414 1.414L12 13.414l4.293 4.293a1 1 0 0 0 1.414-1.414L13.414 12l4.293-4.293z')
        ->withInput();
    }
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
