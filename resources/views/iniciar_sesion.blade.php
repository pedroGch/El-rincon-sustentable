@extends('layouts.main')

{{-- @section('title') Página Principal @endsection --}}

@section('title', 'inicio de sesión')

@section('content')
    <div class="flex justify-center">
        <h2 class="text-principal my-4 mt-10 text-4xl font-semibold ">Iniciar Sesión</h2>
    </div>

    <section class="mx-auto max-w-screen-xl">
      <form action="{{ url('/validar_usuario') }}" method="POST">
        <input type="text" name="user_name">
        <input type="password" name="password">
        <input type="submit" value="Ingresar">
      </form>
    </section>
@endsection
