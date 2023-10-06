<?php
/** @var \App\Models\Usuario $usuario */
?>

@extends('layouts.main')

@section('title', 'Perfil de Usuario')

@section('content')
    <div class="flex justify-center">
        <h2 class="text-principal my-4 mt-10 text-4xl font-semibold ">Perfil de Usuario</h2>
    </div>

    <section class="mx-auto max-w-screen-xl">
        <div class="flex flex-wrap">
            <div class="mt-10">
                <div class="mb-5">
                    <h3 class="text-2xl font-semibold">¡Bienvenid@ NOMBRE-USUARIO al tu Panel!</h3>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap">
            <div class="mb-5">
                <h3 class="py-3"">Tus datos personales:</h3>
                <p><b>Usuario:</b></p>
                <p><b>Nombre:</b></p>
                <p><b>Apellido:</b></p>
                <p><b>Email:</b></p>
                <p><b>Código Postal:</b></p>
            </div>
        </div>
        <div class="flex flex-wrap">
            <div class="mb-5">
                <h3 class="text-2xl font-semibold">Tu lista de deseados</h3>
            </div>


        </div>
        <div class="flex flex-wrap">
            <div class="mb-5">
                <h3 class="text-2xl font-semibold">Compras realizadas</h3>
            </div>

        </div>
    </section>
@endsection
