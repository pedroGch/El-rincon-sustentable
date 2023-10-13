<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
  public function index()
  {
    return view('contacto');
  }

  public function validar_contacto(Request $request)
  {

    $request->validate(Contacto::$rules, Contacto::$errorMessages);

    // $data = $request->only(['nombre','email','asunto','mensaje']);

    // Contacto::create($data);

    return redirect('/contacto');
  }
}
