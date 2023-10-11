<?php
/**
 * @var \App\Models\Usuario $usuario
 * @var \App\Models\Noticia[] | \Illuminate\Database\Eloquent\Collection $noticias
*/

?>

@extends('layouts.main')

@section('title', 'Panel de Administración')

@section('content')
    <div class="flex justify-center">
        <h2 class="text-principal my-4 mt-10 text-4xl font-semibold ">Panel de Administración</h2>
    </div>

    <section class="mx-auto max-w-screen-xl">
        <div class="flex flex-wrap justify-center">
            <div class="mt-10">
                <div class="mb-5 flex">
                    <h3 class="text-2xl font-semibold">¡Bienvenid@ NOMBRE-ADMINISTRADOR al Panel de Administración!
                    </h3>
                </div>
            </div>
            <div class="mb-8 text-center">
                <p class=""> <strong>Acá podrás administrar todas las noticias del Blog. </strong></p>
                <p>Tendrás la posibilidad de cargar nuevas noticias, al igual que editar o borrar las ya existentes.</p>
            </div>
        </div>
        <div class="flex flex-wrap justify-center">
            <div class="mb-5">
                <a href="<?= url('/blog/gestor_noticias') ?>">
                    <div
                        class="mb-5 w-full inline-block rounded bg-terciario px-6 pb-2 pt-2.5 text-s font-bold uppercase leading-normal text-black shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-terciario hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-terciario focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-terciario active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                        data-te-ripple-init data-te-ripple-color="light">
                        <p>Administrar Noticias</p>
                    </div>
                </a>
            </div>


        </div>
        <div class="mb-8 flex flex-wrap justify-center">
            <div>
                <p class="">Actualmente tenés {{ $noticias->count() }} noticias cargadas en el Blog.</p>
            </div>

        </div>
    </section>
@endsection
