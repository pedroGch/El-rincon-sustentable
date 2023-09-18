<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('about');
    }

    // acá vamos a ir agregando los métodos que necesitemos para renderizar las otras vistas
}
