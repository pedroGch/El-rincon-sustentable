<?php
/**
 * @var \Illuminate\Support\ViewErrorBag $errors
 * @var Producto $producto
 * @var \App\Models\Categoria[]|\Illuminate\Database\Eloquent\Collection $categorias
 * @var \App\Models\Etiqueta[]|\Illuminate\Database\Eloquent\Collection $etiquetas
 */
?>
@extends('layouts.main')

{{-- @section('title') Blog @endsection --}}

@section('title', 'Editar producto' . $producto->nombre_prod)

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
                <p>Hay errores en los datos ingresados. Por favor, revisalos y corregílos para poder editar correctamente el producto.</p>
            </div>
        </div>
    @endif
    <section class="mx-auto max-w-screen-xl">
        <div class="flex justify-center">
            <h2 class="text-principal my-4 mt-10 text-4xl font-semibold">Editar producto</h2>
        </div>
        <div class="flex-1 my-4 lg:mx-6 lg:px-6">


            <form action="{{ url('/tienda/'. $producto->id .'/editar') }}" method="POST" id="form-edit-prod" class=""
            enctype="multipart/form-data">
            @csrf
            <label for="nombre_prod" class="block font-bold my-2"> Nombre producto </label>
            <input type="text" name="nombre_prod" id="nombre_prod"
                class="border border-gray-500 rounded p-2 w-full @error('nombre_prod') border-red-700 @enderror"
                value="{{ old('nombre_prod', $producto->nombre_prod) }}"
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
                @enderror> {{ old('descripcion', $producto->descripcion ) }}
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
                      value="{{ $categoria->id }}"
                      {{ old('categoria_id', $producto->categoria_id) == $categoria->id ? 'selected' : '' }}
                    >
                      {{ $categoria->nombre_cat }}
                    </option>
                  @endforeach
                </select>
              </div>

              <div>
                <label for="stock" class="block font-bold my-2"> Stock</label>
                <input type="text" name="stock" id="stock"
                  class="border border-gray-500 rounded p-2 @error('stock') border-red-700 @enderror"
                  value="{{ old('stock', $producto->stock) }}"
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
                  value="{{ old('precio', $producto->precio) }}"
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
                value="{{ old('alt', $producto->alt) }}"
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
                    class="relative float-left -ml-[1.5rem] mr-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ml-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ml-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent dark:border-neutral-600 dark:checked:border-primary dark:checked:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                    type="checkbox"
                    value="{{ $etiqueta->etiqueta_id }}"
                    name="etiquetas[]"
                    @checked(in_array($etiqueta->etiqueta_id, old('etiquetas', $producto->etiquetas->pluck('etiqueta_id')->all() )))>
                  <label class="form-check-label" for="flexCheckDefault">
                    {{ $etiqueta->nombre }}
                  </label>
                </div>
                @endforeach
              </div>
            </fieldset>

            <input type="submit"
                class="my-7 ps-9 pe-9 inline-block rounded bg-terciario px-6 pb-2 pt-2.5 text-s font-bold uppercase leading-normal text-black shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-terciario hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-terciario focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-terciario active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                value="Enviar">
        </form>

            <a href="<?= url('/tienda/gestor_productos') ?>">
                <div
                    class="inline-block rounded bg-terciario px-6 pb-2 pt-2.5 text-s font-bold uppercase leading-normal text-black shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-terciario hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-terciario focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-terciario active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                    <p>Cancelar</p>
                </div>
            </a>
        </div>
    </section>
@endsection
