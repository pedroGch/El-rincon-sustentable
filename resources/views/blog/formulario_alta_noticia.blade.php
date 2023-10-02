<?php
/**
 *
*/
?>
@extends('layouts.main')

{{-- @section('title') Blog @endsection --}}

@section('title', 'Crear Noticia')

@section('content')
@if ($errors->has('title'))
  <p class="text-red-400">{{$errors->first('titulo')}}</p>
@endif
<section class="mx-auto max-w-screen-xl">
  <div class="flex justify-center">
    <h2 class="text-principal my-4 mt-10 text-4xl font-semibold">Crear Noticia</h2>
  </div>
  <div class="flex-1 my-4 mx-6 px-6">
    <form action="{{url('/blog/noticia/nueva')}}" method="POST" id="form-contacto" class="">
      @csrf
      <label for="titulo" class="block font-bold my-2"> Título </label>
      <input type="text" name="titulo" id="titulo" class="border border-gray-500 rounded p-2 w-full @error('titulo') border-red-500 @enderror"
      @error('titulo')
        aria-invalid="true"
        aria-describedby="error-titulo"
      @enderror
      >
      @error('titulo')
        <p class="text-red-400" id="error-titulo">ERROR! {{$message}}</p>
      @enderror

      <label for="contenido" class="block font-bold my-2"> Contenido </label>
      <textarea name="contenido" id="contenido" cols="30" rows="10" class="border border-gray-500 rounded p-2 w-full @error('contenido') border-red-500 @enderror"
      @error('contenido')
        aria-invalid="true"
        aria-describedby="error-contenido"
      @enderror
      >
      </textarea>
      @error('contenido')
        <p class="text-red-400" id="error-contenido">ERROR! {{$message}}</p>
      @enderror

      <label for="imagen" class="block font-bold my-2"> Imagen </label>
      <input type="file" name="imagen" id="imagen" class="border border-gray-500 rounded p-2 w-full @error('imagen') border-red-500 @enderror"
      @error('imagen')
        aria-invalid="true"
        aria-describedby="error-imagen"
      @enderror
      >
      @error('imagen')
        <p class="text-red-400" id="error-imagen">ERROR! {{$message}}</p>
      @enderror

      <label for="alt" class="block font-bold my-2"> Desripcíon de la imagen</label>
      <input type="text" name="alt" id="alt" class="border border-gray-500 rounded p-2 w-full @error('alt') border-red-500 @enderror"
      @error('alt')
        aria-invalid="true"
        aria-describedby="error-alt"
      @enderror
      >
      @error('alt')
        <p class="text-red-400" id="error-alt">ERROR! {{$message}}</p>
      @enderror

      <input type="submit" class=" my-4 py-3 mb-10 px-6  text-secundario font-semibold p-1 border border-secundario border-thin rounded-lg text-lg drop-shadow-xl" value="Enviar">
    </form>
  </div>
</section>
@endsection
