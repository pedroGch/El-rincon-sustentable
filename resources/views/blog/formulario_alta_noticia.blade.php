<?php
/**
 * @var \Illuminate\Support\ViewErrorBag $errors
 */
?>
@extends('layouts.main')

@section('title', 'Crear Noticia')

@section('content')
@if ($errors->any())
  <div class="mt-5 mb-3 inline-flex w-full items-center rounded-lg bg-danger-100 px-6 py-5 text-base text-danger-700" role="alert">
    <span class="mr-2">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" />
      </svg>
    </span>
    <div>
        <p>Hay errores en los datos ingresados. Por favor, revisalos y corregílos para poder cargar correctamente la noticia.</p>
    </div>
  </div>
@endif
<section class="mx-auto max-w-screen-xl">
  <div class="flex justify-center">
      <h2 class="text-principal my-4 mt-10 text-4xl font-semibold">Crear Noticia</h2>
  </div>
  <div class="flex-1 my-4 lg:mx-6 lg:px-6">
    <form action="{{ url('/blog/noticia/nueva') }}" method="POST" id="form-alta" enctype="multipart/form-data">
    @csrf
    <label for="titulo" class="block font-bold my-2"> Título </label>
    <input type="text" name="titulo" id="titulo" class="border border-gray-500 rounded p-2 w-full @error('titulo') border-red-700 @enderror"
      value="{{ old('titulo') }}"
      @error('titulo')
      aria-invalid="true"
      aria-describedby="error-titulo"
      @enderror>
      @error('titulo')
        <div class="mt-1 flex">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#b0233a" class="h-5 w-5">
            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" />
          </svg>
          <p class="text-danger-700" id="error-titulo">{{ $message }}</p>
        </div>
      @enderror
      <label for="contenido" class="block font-bold my-2"> Contenido </label>
      <textarea name="contenido" id="contenido" cols="30" rows="10" class="border border-gray-500 rounded p-2 w-full @error('contenido') border-red-700 @enderror"
        @error('contenido')
        aria-invalid="true"
        aria-describedby="error-contenido"
        @enderror> {{ old('contenido') }}
      </textarea>
        @error('contenido')
            <div class="mt-1 flex">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#b0233a" class="h-5 w-5">
                    <path fill-rule="evenodd"
                        d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z"
                        clip-rule="evenodd" />
                </svg>
                <p class="text-danger-700" id="error-contenido"> {{ $message }}</p>
            </div>
        @enderror
      <label for="imagen" class="block font-bold my-2"> Imagen </label>
      <input type="file" name="imagen" id="imagen" class="border border-gray-500 rounded p-2 w-full @error('imagen') border-red-700 @enderror"
        @error('imagen')
        aria-invalid="true"
        aria-describedby="error-imagen"
        @enderror>
        @error('imagen')
          <div class="mt-1 flex">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#b0233a" class="h-5 w-5">
              <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" />
            </svg>
            <p class="text-danger-700" id="error-imagen"> {{ $message }}</p>
          </div>
        @enderror
      <label for="alt" class="block font-bold my-2"> Descripción de la imagen</label>
      <input type="text" name="alt" id="alt" class="border border-gray-500 rounded p-2 w-full @error('alt') border-red-700 @enderror"
        value="{{ old('alt') }}"
        @error('alt')
        aria-invalid="true"
        aria-describedby="error-alt"
        @enderror>
        @error('alt')
        <div class="mt-1 flex">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#b0233a" class="h-5 w-5">
            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" />
          </svg>
          <p class="text-danger-700" id="error-alt"> {{ $message }}</p>
        </div>
        @enderror
      <input type="submit" class="my-7 ps-9 pe-9 w-6/12 botonPersonalizado"   value="Enviar">
    </form>
    <a href="<?= url('/blog/gestor_noticias') ?>">
      <div class="mb-8 w-6/12 botonPersonalizado">
        <p class="text-center">Cancelar</p>
      </div>
    </a>
  </div>
</section>
@endsection
