@extends('layouts.main')

{{-- @section('title') Blog @endsection --}}

@section('title', 'Crear Noticia')

@section('content')

<section class="mx-auto max-w-screen-xl">
  <div class="flex justify-center">
    <h2 class="text-principal my-4 mt-10 text-4xl font-semibold">Crear Noticia</h2>
  </div>
  <div class="flex-1 my-4 mx-6 px-6">
    <form action="{{url('/blog/noticia/nueva')}}" method="POST" id="form-contacto" class="">
      @csrf
      <label for="nombre" class="block font-bold my-2"> título </label>
      <input type="text" name="nombre" id="nombre" class="border border-gray-500 rounded p-2 w-full">

      <label for="mensaje" class="block font-bold my-2"> Mensaje </label>
      <textarea name="mensaje" id="mensaje" cols="30" rows="10" class="border border-gray-500 rounded p-2 w-full" ></textarea>

      <label for="imagen" class="block font-bold my-2"> Mensaje </label>
      <input type="file" name="imagen" id="imagen" class="border border-gray-500 rounded p-2 w-full">

      <input type="submit" class=" my-4 py-3 mb-10 px-6  text-secundario font-semibold p-1 border border-secundario border-thin rounded-lg text-lg drop-shadow-xl" value="Enviar">
    </form>
  </div>
</section>
@endsection
