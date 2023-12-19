<?php
use Illuminate\Pagination\LengthAwarePaginator;

/**
 * @var \App\Models\Producto[] | \Illuminate\Database\Eloquent\Collection|LengthAwarePaginator $producto
 */
?>

@extends('layouts.main')

@section('title', 'Tienda')

@section('content')
    <div class="flex justify-center">
        <h2 class="text-principal my-4 mt-10 text-4xl font-semibold ">Tienda</h2>
    </div>

    <section class="mx-auto max-w-screen-xl">
        <div class="flex flex-row flex-wrap">
            @foreach ($productos as $producto)
              @if ($producto->estado !== 'inactivo')
                <div class="flex flex-col w-full lg:w-1/4 md:w-1/2 p-4">
                    <div
                        class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                        <div class="relative overflow-hidden bg-cover bg-no-repeat mx-auto" data-te-ripple-init
                            data-te-ripple-color="light">
                            <hr>
                            <p class="ms-2 text-principal uppercase"> {{ $producto->categoria->nombre_cat }}</p>
                            <hr>
                            <div class="h-72  mx-auto">
                              @if ($producto->imagen_prod !== null)
                                <img src="{{ asset('../storage/' . $producto->imagen_prod) }}" alt="{{ $producto->alt }}">
                              @else
                                <p>Este producto no tiene imagen</p>
                              @endif
                                <a href="{{ url('/producto/' . $producto->id) }}"></a>
                            </div>
                            <div
                                class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                            </div>

                        </div>
                        <div class="p-6">
                            <h3 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                                {{ $producto->nombre_prod }}
                            </h3>
                            <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                                {{ $producto->descripcion_reducida() }}
                            </p>
                            <p
                                class="w-full border-b-2 border-neutral-100 border-opacity-100 px-4 py-3 dark:border-opacity-50">
                                <strong> {{ $producto->precio_formateado($producto->precio) }}</strong>
                            </p>
                            <form action="{{ route('detalle.producto', ['id' => $producto->id]) }}" method="GET">
                                <button type="submit"
                                    class="w-full botonPersonalizado"
                                    data-te-ripple-init data-te-ripple-color="light">
                                    ver más
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
              @endif
            @endforeach
        </div>
        <div class="mb-5">

          {{ $productos->links() }}

        </div>
    </section>
@endsection


