<?php
/** @var \App\Models\Producto $producto */
?>

@extends('layouts.main')

{{-- @section('title') Página Principal @endsection --}}

@section('title', 'Panel de Administración')

@section('content')
    <div class="flex justify-center">
        <h2 class="text-principal my-4 mt-10 text-4xl font-semibold ">Panel de Administración</h2>
    </div>

    <section class="mx-auto max-w-screen-xl">
        {{-- <div class="flex flex-wrap">
            <div class="flex-1">

          </div>
            <div class="flex-1">

              </div>
        </div> --}}
        <div class="flex flex-wrap">
            <div class="mt-10">
                <div class="mb-5">
                    <h3 class="text-2xl font-semibold">¡Bienvenid@ NOMBRE-ADMINISTRADOR al Panel de Administración!
                    </h3>
                </div>
            </div>
            <div class="mb-5">
                <p class=""> <strong>Acá podrás administrar todas las noticias del Blog. </strong>Tendrás la posibilidad de cargar nuevas noticias, al igual que editar o borrar las ya existentes.</p>
            </div>
        </div>
        <div class="flex flex-wrap">
            <div class="mb-5">
                <a href="<?= url('/blog/gestor_noticias') ?>">
                    <div class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                        <p>Administrar Noticias</p>
                    </div>
                </a>
            </div>


        </div>
        <div class="flex flex-wrap">
            <div class="">
                <p class="">Actualmente tenés CANTIDAD-NOTICIAS noticias cargadas en el Blog.</p>
            </div>

        </div>
    </section>
@endsection
