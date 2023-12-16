<?php
/** @var \App\Models\Producto $producto */
?>

@extends('layouts.main')

{{-- @section('title') Página Principal @endsection --}}

@section('title', 'Producto/{id}')

@section('content')
    <div class="flex justify-center">
        <h2 class="text-principal my-4 mt-10 text-4xl font-semibold ">Detalle del producto</h2>
    </div>

    <section class="mx-auto max-w-screen-xl">
        <div class="flex flex-wrap">
            <div class="lg:flex-1">
                <div
                    class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                    <div class="relative overflow-hidden bg-cover bg-no-repeat" data-te-ripple-init
                        data-te-ripple-color="light">
                        @if ($producto->imagen_prod !== null)
                          <img src="{{ asset('./storage/' . $producto->imagen_prod) }}" alt="{{ $producto->alt }}">
                        @else
                          <p>Este producto no tiene imagen</p>
                        @endif
                        <a href="#!">
                            <div
                                class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="lg:flex-1">
                <div class="p-6">
                    <h3 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                        {{ $producto->nombre_prod }}
                    </h3>
                    <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                        {!! nl2br($producto->descripcion) !!}
                    </p>
                    <ul class="w-full">
                        <li
                            class="w-full border-b-2 border-neutral-100 border-opacity-100 px-4 py-3 dark:border-opacity-50">
                            Categoria: {{ $producto->categoria->nombre_cat }}
                        </li>
                        <li
                            class="w-full border-b-2 border-neutral-100 border-opacity-100 px-4 py-3 dark:border-opacity-50">
                            Etiquetas:
                            @forelse ( $producto->etiquetas as $etiqueta)
                              <span class="bg-blue-500 text-white font-semibold rounded-full py-1 px-3 text-xs">{{$etiqueta->nombre}}</span>
                            @empty
                              <span>Este producto no posee etiquetas</span>
                            @endforelse
                        </li>
                        <li
                            class="w-full border-b-2 border-neutral-100 border-opacity-100 px-4 py-3 dark:border-opacity-50">
                            Stock: {{ $producto->stock }}
                        </li>
                        <li
                            class="w-full border-b-2 border-neutral-100 border-opacity-100 px-4 py-3 dark:border-opacity-50">
                            {{ $producto->precio_formateado($producto->precio) }}
                        </li>
                    </ul>
                    @if(auth()->check())
                    <form action="{{ route('agregarProductoCarrito', ['id' => $producto->id]) }}" method="POST" class="mb-5">
                      @csrf
                      <label for="cantidad_prod" class="visually-hidden">Cantidad</label>
                      <input type="number" name="cantidad_prod" id="cantidad_prod" value="1" class="form-control border border-gray-500 rounded p-2 w-full @error('cantidad_prod') border-red-700 @enderror"
                                        @error('cantidad_prod')
                                        aria-invalid="true"
                                        aria-describedby="error-cantidad_prod"
                                        @enderror>
                                        @error('cantidad_prod')
                                        <div class="mt-1 flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#b0233a" class="h-5 w-5">
                                                <path fill-rule="evenodd"
                                                    d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <p class="text-danger-700" id="error-cantidad_prod"> {{ $message }}</p>
                                        </div>
                @enderror
                      <button type="submit"
                          class="mt-5 inline-block rounded bg-terciario px-6 pb-2 pt-2.5 text-s font-bold uppercase leading-normal text-black shadow-inputBox transition duration-150 ease-in-out hover:bg-terciario hover:shadow-inputBoxHover focus:bg-terciario focus:shadow-inputBoxHover focus:outline-none focus:ring-0 active:bg-terciario"
                          data-te-ripple-init data-te-ripple-color="light">
                          Agregar al carrito
                      </button>
                    </form>
                    @else
                      <p class="mt-5 p-3 border-yellow-300 border bg-yellow-100 ">Para agregar productos al carrito debés <a href="<?= url('/iniciar_sesion') ?>"><span class="font-bold underline">iniciar sesión</span></a></p>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
