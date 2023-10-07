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
        <input type="submit" class=" my-4 inline-block rounded bg-terciario px-6 pb-2 pt-2.5 text-s font-bold uppercase leading-normal text-black shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-terciario hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-terciario focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-terciario active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]" value="Enviar">
      </form>
    </div>
  </div>
</div>





@endsection
