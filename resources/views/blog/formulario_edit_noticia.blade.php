<?php
/**
 * @var \Illuminate\Support\ViewErrorBag $errors
 * @var Noticia $noticia
 */
?>
@extends('layouts.main')

{{-- @section('title') Blog @endsection --}}

@section('title', 'Editar Noticia' . $noticia->titulo)

@section('content')
    @if ($errors->has('title'))
        <p class="text-red-400">{{ $errors->first('titulo') }}</p>
    @endif
    <section class="mx-auto max-w-screen-xl">
        <div class="flex justify-center">
            <h2 class="text-principal my-4 mt-10 text-4xl font-semibold">Editar Noticia</h2>
        </div>
        <div class="flex-1 my-4 mx-6 px-6">
            <form action="{{ url('/blog/' . $noticia->id . '/editar') }}" method="POST" id="form-contacto" class="">
                @csrf
                <label for="titulo" class="block font-bold my-2"> Título </label>
                <input type="text" value="{{ old('titulo', $noticia->titulo) }}" name="titulo" id="titulo"
                    class="border border-gray-500 rounded p-2 w-full @error('titulo') border-red-500 @enderror"
                    @error('titulo')
        aria-invalid="true"
        aria-describedby="error-titulo"
      @enderror>
                @error('titulo')
                    <p class="text-red-400" id="error-titulo">ERROR! {{ $message }}</p>
                @enderror

                <label for="contenido" class="block font-bold my-2"> Contenido </label>
                <textarea name="contenido" id="contenido" cols="30" rows="10"
                    class="border border-gray-500 rounded p-2 w-full @error('contenido') border-red-500 @enderror"
                    @error('contenido')
        aria-invalid="true"
        aria-describedby="error-contenido"
      @enderror>
      {{ old('titulo', $noticia->contenido) }}
      </textarea>
                @error('contenido')
                    <p class="text-red-400" id="error-contenido">ERROR! {{ $message }}</p>
                @enderror

                <label for="imagen" class="block font-bold my-2"> Imagen </label>
                <input type="file" name="imagen" id="imagen"
                    class="border border-gray-500 rounded p-2 w-full @error('imagen') border-red-500 @enderror"
                    @error('imagen')
        aria-invalid="true"
        aria-describedby="error-imagen"
      @enderror>
                @error('imagen')
                    <p class="text-red-400" id="error-imagen">ERROR! {{ $message }}</p>
                @enderror

                <label for="alt" class="block font-bold my-2"> Descripción de la imagen</label>
                <input type="text" name="alt" id="alt"
                    class="border border-gray-500 rounded p-2 w-full @error('alt') border-red-500 @enderror"
                    @error('alt')
        aria-invalid="true"
        aria-describedby="error-alt"
      @enderror>
                @error('alt')
                    <p class="text-red-400" id="error-alt">ERROR! {{ $message }}</p>
                @enderror

                <input type="submit"
                    class="my-7 ps-9 pe-9 inline-block rounded bg-terciario px-6 pb-2 pt-2.5 text-s font-bold uppercase leading-normal text-black shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-terciario hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-terciario focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-terciario active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                    value="Enviar">
            </form>
            <a href="<?= url('/blog/gestor_noticias') ?>">
                <div
                    class="inline-block rounded bg-terciario px-6 pb-2 pt-2.5 text-s font-bold uppercase leading-normal text-black shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-terciario hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-terciario focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-terciario active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                    <p>Cancelar</p>
                </div>
            </a>
        </div>
    </section>
@endsection
