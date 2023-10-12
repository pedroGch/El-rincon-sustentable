<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function processLogin(Request $request)
    {
      $credentials = $request->only(['email', 'password']);
      if (!Auth::attempt($credentials)){
        return redirect('/iniciar-sasion'); //redireccionar a la pantalla de logueo
      }

      $user = (Auth::user()->rol_fk == 1) ? '/admin/dashboard' : '/pelis/listado';
    
      return redirect('peliculas/listado')->with('status.message', 'sesión iniciada con éxito'. Auth::user->nombre());
    }

    // acá vamos a ir agregando los métodos que necesitemos para renderizar las otras vistas
}
