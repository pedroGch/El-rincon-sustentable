<?php
  /**
   * @var \App\Models\Producto[] | \Illuminate\Database\Eloquent\Collection $producto
  */

?>

@extends('layouts.main')

{{-- @section('title') Página Principal @endsection --}}

@section('title', 'Tienda')

@section('content')
    <div class="flex justify-center">
        <h2 class="text-principal my-4 mt-10 text-4xl font-semibold ">Tienda</h2>
    </div>

    <section class="mx-auto max-w-screen-xl">
        <div class="flex flex-row flex-wrap">
          @foreach ($productos as $producto)
            <div class="flex flex-col w-full lg:w-1/4 md:w-1/2 p-4">
              <div class="block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                  <div class="relative overflow-hidden bg-cover bg-no-repeat mx-auto" data-te-ripple-init
                      data-te-ripple-color="light">
                      <div class="h-72  mx-auto">
                      <img class="rounded-t-lg mx-auto" src="{{ asset("img/productos/{$producto->imagen_prod}") }}" alt="<?=$producto->alt?>" />
                      <a href="#!"></div>
                          <div
                              class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-[hsla(0,0%,98%,0.15)] bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100">
                          </div>
                      </a>
                  </div>
                  <div class="p-6">
                      <h5 class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                          {{$producto->nombre_prod}}
                      </h5>
                      <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                        {{$producto->descripcion_reducida()}}
                      </p>
                      <form action="{{ url('/producto/' . $producto->id ) }}" method="GET">
                        <button type="submit"
                            class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                            data-te-ripple-init data-te-ripple-color="light">
                            ver más
                        </button>
                      </form>
                  </div>
              </div>
            </div>
          @endforeach
        </div>
    </section>
@endsection

<script>
    // Initialization for ES Users
    import {
        Ripple,
        initTE,
    } from "tw-elements";

    initTE({
        Ripple
    });
</script>
