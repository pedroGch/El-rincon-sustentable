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
                    <form action="{{ url('/producto/' . $producto->id) }}" method="GET" class="mb-5">
                        <button type="submit"
                            class="mt-5 inline-block rounded bg-terciario px-6 pb-2 pt-2.5 text-s font-bold uppercase leading-normal text-black shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-terciario hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-terciario focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-terciario active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                            data-te-ripple-init data-te-ripple-color="light">
                            Comprar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
