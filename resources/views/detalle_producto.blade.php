<?php
  /** @var \App\Models\Producto $producto */
?>

@extends('layouts.main')

{{-- @section('title') Página Principal @endsection --}}

@section('title', 'Producto/{id}')

@section('content')
    <div class="flex justify-center">
        <h2 class="text-principal my-4 mt-10 text-4xl font-semibold ">Detalles del producto</h2>
    </div>

    <section class="mx-auto max-w-screen-xl">
        <div class="flex flex-wrap">
            <div class="flex-1">
              <div class=" block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                  <div class="relative overflow-hidden bg-cover bg-no-repeat" data-te-ripple-init
                      data-te-ripple-color="light">
                      <img class="rounded-t-lg  m-auto" src="{{ asset("img/productos/{$producto->imagen_prod}") }}" alt="<?=$producto->alt?>" />
                      <a href="#!">
                          <div
                              class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                          </div>
                      </a>
                  </div>
            </div>
          </div>
            <div class="flex-1">
                  <div class="p-6">
                      <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                          {{$producto->nombre_prod}}
                      </h5>
                      <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                        {{$producto->descripcion}}
                      </p>
                      <ul class="w-full">
                        <li
                          class="w-full border-b-2 border-neutral-100 border-opacity-100 px-4 py-3 dark:border-opacity-50">
                          Categoria: {{$producto->categoria}}
                        </li>
                        <li
                          class="w-full border-b-2 border-neutral-100 border-opacity-100 px-4 py-3 dark:border-opacity-50">
                          Stock: {{$producto->stock}}
                        </li>
                        <li
                          class="w-full border-b-2 border-neutral-100 border-opacity-100 px-4 py-3 dark:border-opacity-50">
                          ${{$producto->precio}}
                        </li>
                      </ul>
                      <form action="{{ url('/producto/' . $producto->id ) }}" method="GET">
                        <button type="submit"
                            class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                            data-te-ripple-init data-te-ripple-color="light">
                            Comprar
                        </button>
                      </form>
                  </div>
              </div>
        </div>
    </section>
@endsection
