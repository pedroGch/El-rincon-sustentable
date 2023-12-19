<?php
/**
 * @var \Illuminate\Support\ViewErrorBag $errors
 * @var \App\Models\Categoria[]|\Illuminate\Database\Eloquent\Collection $categorias
 * @var \App\Models\Etiqueta[]|\Illuminate\Database\Eloquent\Collection $etiquetas
 */
?>
@extends('layouts.main')

{{-- @section('title') Blog @endsection --}}

@section('title', 'Crear Noticia')

@section('content')
    @if ($errors->any())
        <div class="mt-5 mb-3 inline-flex w-full items-center rounded-lg bg-danger-100 px-6 py-5 text-base text-danger-700"
            role="alert">
            <span class="mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                    <path fill-rule="evenodd"
                        d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z"
                        clip-rule="evenodd" />
                </svg>
            </span>
            <div>
                <p>Hay errores en los datos ingresados. Por favor, revisalos y corregílos para poder cargar correctamente el producto.</p>
            </div>
        </div>
    @endif
    <section class="mx-auto max-w-screen-xl">
        <div class="flex justify-center">
            <h2 class="text-principal my-4 mt-10 text-4xl font-semibold">Crear producto</h2>
        </div>
        <div class="flex-1 my-4 lg:mx-6 lg:px-6">
            <form action="{{ url('/tienda/producto/nuevo') }}" method="POST" id="form-alta-prod" class=""
                enctype="multipart/form-data">
                @csrf
                <label for="nombre_prod" class="block font-bold my-2"> Nombre producto </label>
                <input type="text" name="nombre_prod" id="nombre_prod"
                    class="border border-gray-500 rounded p-2 w-full @error('nombre_prod') border-red-700 @enderror"
                    value="{{ old('nombre_prod') }}"
                    @error('nombre_prod')
                    aria-invalid="true"
                    aria-describedby="error-nombre_prod"
                    @enderror>
                @error('nombre_prod')
                    <div class="mt-1 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#b0233a" class="h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z"
                                clip-rule="evenodd" />
                        </svg>
                        <p class="text-danger-700" id="error-nombre_prod"> {{ $message }}</p>
                    </div>
                @enderror

                <label for="descripcion" class="block font-bold my-2"> Descripción de producto</label>
                <textarea name="descripcion" id="descripcion" cols="30" rows="10"
                    class="border border-gray-500 rounded p-2 w-full @error('descripcion') border-red-700 @enderror"
                    @error('descripcion')
                    aria-invalid="true"
                    aria-describedby="error-descripcion"
                    @enderror> {{ old('descripcion') }}
      </textarea>
                @error('descripcion')
                    <div class="mt-1 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#b0233a" class="h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z"
                                clip-rule="evenodd" />
                        </svg>
                        <p class="text-danger-700" id="error-descripcion"> {{ $message }}</p>
                    </div>
                @enderror

                <div class="flex justify-between">

                  <div>
                    <label for="imagen_prod" class="block font-bold my-2"> Imagen producto </label>
                    <input type="file" name="imagen_prod" id="imagen_prod"
                        class="border border-gray-500 rounded p-2 @error('imagen_prod') border-red-700 @enderror"
                        @error('imagen_prod')
                        aria-invalid="true"
                        aria-describedby="error-imagen_prod"
                        @enderror>
                    @error('imagen_prod')
                        <div class="mt-1 flex">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#b0233a" class="h-5 w-5">
                                <path fill-rule="evenodd"
                                    d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z"
                                    clip-rule="evenodd" />
                            </svg>
                            <p class="text-danger-700" id="error-imagen_prod"> {{ $message }}</p>
                        </div>
                    @enderror
                  </div>

                  <div class="me-4">
                    <label for="categoria_id" class="form-label block font-bold my-2"> Categoría</label>
                    <select name="categoria_id" id="categoria_id" class="form-control border border-gray-500 rounded" data-te-select-init>
                      @foreach($categorias as $categoria)
                        <option
                          value="{{ $categoria->id }}"> {{ $categoria->nombre_cat }}
                        </option>
                      @endforeach
                    </select>
                  </div>

                  <div>
                    <label for="stock" class="block font-bold my-2"> Stock</label>
                    <input type="text" name="stock" id="stock"
                      class="border border-gray-500 rounded p-2 @error('stock') border-red-700 @enderror"
                      value="{{ old('stock') }}"
                      @error('stock')
                      aria-invalid="true"
                      aria-describedby="error-stock"
                      @enderror>
                      @error('stock')
                      <div class="mt-1 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#b0233a" class="h-5 w-5">
                          <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" />
                        </svg>
                        <p class="text-danger-700" id="error-stock"> {{ $message }}</p>
                    </div>
                    @enderror
                  </div>

                  <div class="ms-4">
                    <label for="precio" class="block font-bold my-2"> Precio</label>
                    <input type="text" name="precio" id="precio"
                      class="border border-gray-500 rounded p-2 @error('precio') border-red-700 @enderror"
                      value="{{ old('precio') }}"
                      @error('precio')
                      aria-invalid="true"
                      aria-describedby="error-precio"
                      @enderror>
                      @error('precio')
                      <div class="mt-1 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#b0233a" class="h-5 w-5">
                          <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clip-rule="evenodd" />
                        </svg>
                        <p class="text-danger-700" id="error-precio"> {{ $message }}</p>
                    </div>
                    @enderror
                  </div>
                </div>

                <label for="alt" class="mt-3 block font-bold my-2"> Descripción de la imagen</label>
                <input type="text" name="alt" id="alt"
                    class="border border-gray-500 rounded p-2 w-full @error('alt') border-red-700 @enderror"
                    value="{{ old('alt') }}"
                    @error('alt')
                    aria-invalid="true"
                    aria-describedby="error-alt"
                    @enderror>
                @error('alt')
                    <div class="mt-1 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#b0233a" class="h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z"
                                clip-rule="evenodd" />
                        </svg>
                        <p class="text-danger-700" id="error-alt"> {{ $message }}</p>
                    </div>
                @enderror

                <fieldset class="mt-4">
                  <legend class="font-bold"> Etiquetas</legend>
                  <div class="mt-3 flex justify-around">
                    @foreach($etiquetas as $etiqueta)
                    <div class="form-check">
                      <input
                        class="checkboxPersonalizado"
                        type="checkbox"
                        value="{{ $etiqueta->etiqueta_id }}"
                        name="etiquetas[]"
                        @checked(collect(old('etiquetas', []))->contains($etiqueta->etiqueta_id))>
                      <label class="form-check-label" for="flexCheckDefault">
                        {{ $etiqueta->nombre }}
                      </label>
                    </div>
                    @endforeach
                  </div>
                </fieldset>

                <input type="submit"
                    class="w-6/12 botonPersonalizado"
                    value="Enviar">
            </form>
            <a href="<?= url('/tienda/gestor_productos') ?>">
                <div
                    class="w-6/12 botonPersonalizado">
                    <p class="text-center">Cancelar</p>
                </div>
            </a>
        </div>
    </section>
@endsection
