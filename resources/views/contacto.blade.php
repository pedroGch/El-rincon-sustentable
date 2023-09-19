<?PHP
?>


@extends('layouts.main')

{{-- @section('title') Página Principal @endsection --}}

@section('title', 'Contacto')

@section('content')
<div class="container">

  <h1>Contacto</h1>


  <div class="row">

    <div class="columns-1">
      <img src="./../../../public/img/envelope.jpg " alt="">
    </div>

    <div class="columns-1">
      <form action="#" method="POST" id="form-contacto" class="">
        <label for="nombre" class="block font-bold mb-1"> Nombre </label>
        <input type="text" name="nombre" id="nombre" class="border border-gray-500 rounded p-2 w-full" required>
        <label for="email" class="block font-bold mb-1"> Email </label>
        <input type="email" name="email" id="email" class="border border-gray-500 rounded p-2 w-full" required>
        <label for="asunto" class="block font-bold mb-1"> Asunto </label>
        <input type="text" name="asunto" id="asunto" class="border border-gray-500 rounded p-2 w-full" required>
        <label for="mensaje" class="block font-bold mb-1"> Mensaje </label>
        <textarea name="mensaje" id="mensaje" cols="30" rows="10" class="border border-gray-500 rounded p-2 w-full" required></textarea>
        <input type="submit" value="Enviar">
      </form>
    </div>
  </div>
</div>





@endsection
