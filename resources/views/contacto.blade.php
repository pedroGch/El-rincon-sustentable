<?PHP
?>


@extends('layouts.main')

{{-- @section('title') Página Principal @endsection --}}

@section('title', 'Contacto')

@section('content')
<div class="container">
  <div class="flex justify-center">
    <h2 class="text-principal my-4 mt-10 text-4xl font-semibold">Contacto</h2>
  </div>

  <div class="row flex my-4 justify-between ">

    <div class="flex-1 my-4">
      <img src="../public/img/envelope.jpg" alt="ilustración de un sobre postal color verde" class="block m-auto">
    </div>

    <div class="flex-1 my-4">
      <form action="#" method="POST" id="form-contacto" class="">
        <label for="nombre" class="block font-bold my-2"> Nombre </label>
        <input type="text" name="nombre" id="nombre" class="border border-gray-500 rounded p-2 w-full" required>
        <label for="email" class="block font-bold my-2"> Email </label>
        <input type="email" name="email" id="email" class="border border-gray-500 rounded p-2 w-full" required>
        <label for="asunto" class="block font-bold my-2"> Asunto </label>
        <input type="text" name="asunto" id="asunto" class="border border-gray-500 rounded p-2 w-full" required>
        <label for="mensaje" class="block font-bold my-2"> Mensaje </label>
        <textarea name="mensaje" id="mensaje" cols="30" rows="10" class="border border-gray-500 rounded p-2 w-full" required></textarea>
        <input type="submit" class=" my-4 py-3 mb-10 px-6 bg-principal rounded text-white font-semibold text-lg drop-shadow-xl" value="Enviar">
      </form>
    </div>
  </div>
</div>





@endsection
