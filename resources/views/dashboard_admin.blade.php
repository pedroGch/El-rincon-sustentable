<?php
/**
 * @var \App\Models\Usuario $usuario
 * @var \App\Models\Usuario[] | \Illuminate\Database\Eloquent\Collection $usuarios
 * @var \App\Models\Noticia[] | \Illuminate\Database\Eloquent\Collection $noticias
 * @var \App\Models\Producto[] | \Illuminate\Database\Eloquent\Collection $productos
 * @var \App\Models\User $adminUsers
 */
?>

@extends('layouts.main')

@section('title', 'Panel de Administración')

@section('content')
    <div class="flex justify-center">
        <h2 class="text-center text-principal my-4 mt-10 text-4xl font-semibold ">Panel de Administración</h2>
    </div>

    <section class="mb-5 mx-auto max-w-screen-xl">
        <div class="flex flex-col justify-center">
            <div class="mt-10">
                <div class="mb-5 flex justify-center">
                    <h3 class="text-center text-xl font-semibold">¡Bienvenid@ <?= Auth::user()->name ?> al Panel de Administración!
                    </h3>
                </div>
            </div>
            <div class="mb-8 text-center">
                <p class=""> <strong>Acá podrás administrar todas las noticias del blog y los productos de la tienda. </strong></p>
                <p>Tendrás la posibilidad de cargar nuevos, al igual que editar o borrar los ya existentes.</p>
            </div>
        </div>
        <div class="flex">
          <div class="flex-1">
            <div class="flex flex-wrap justify-center">
                <div class="mb-5">
                    <a href="<?= url('/blog/gestor_noticias') ?>">
                        <div class="w-full botonPersonalizado"
                            data-te-ripple-init data-te-ripple-color="light">
                            <p>Administrar Noticias</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="mb-8 flex flex-wrap justify-center">
                <div>
                    <p class="text-center">Actualmente tenés {{ $noticias->count() }} noticias cargadas en el Blog.</p>
                </div>
            </div>
          </div>
          <div class="flex-1">
            <div class="flex flex-wrap justify-center">
                <div class="mb-5">
                    <a href="<?= url('/tienda/gestor_productos') ?>">
                        <div class="w-full botonPersonalizado"
                            data-te-ripple-init data-te-ripple-color="light">
                            <p>Administrar Productos</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="mb-8 flex flex-wrap justify-center">
                <div>
                    <p class="text-center">Actualmente tenés {{ $productosActivos->count() }} productos activos en la tienda.</p>
                </div>
            </div>
          </div>
        </div>
        <div>
            <div class="flex flex-wrap justify-center">
                <div class="mb-5">
                    <a href="<?= url('tabla_compras_usuarios') ?>">
                        <div class="w-full botonPersonalizado"
                            data-te-ripple-init data-te-ripple-color="light">
                            <p>Ver usuarios y compras</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="mb-8 flex flex-wrap justify-center">
                <div>
                    <p class="text-center">Actualmente tenés {{ $usuariosTotales->count() - $adminUsers->count() }} usuarios registrados en el sitio.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
