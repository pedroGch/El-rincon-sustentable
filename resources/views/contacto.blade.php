<?PHP
?>


@extends('layouts.main')

{{-- @section('title') Página Principal @endsection --}}

@section('title', 'Contacto')

@section('content')
<h1>Contacto</h1>

<form action="#">

  <label for="nombre"> Nombre </label>
  <input type="text" name="nombre" id="nombre" required>

  <label for="email"> Email </label>
  <input type="email" name="email" id="email" required>

  <label for="asunto"> Asunto </label>
  <input type="text" name="asunto" id="asunto" required>

  <label for="mensaje"> Mensaje </label>
  <textarea name="mensaje" id="mensaje" cols="30" rows="10" required></textarea>

  <input type="submit" value="Enviar">


</form>





@endsection
