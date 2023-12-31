<?php
/**
 * @var \App\Models\User $user_db
 */
?>

@extends('layouts.main')

@section('title', 'Perfil de Usuario')

@section('content')
<div class="flex justify-center">
  <h2 class="text-principal my-4 mt-10 text-4xl font-semibold ">Perfil de usuario</h2>
</div>
<section class="mx-auto max-w-screen-xl">
  <div class="flex flex-col flex-wrap">
    <div class="mt-10">
      <div class="mb-5">
        <h3 class="text-2xl font-semibold text-center">¡Bienvenid@ <?= Auth::user()->name ?> al tu panel!</h3>
      </div>
    </div>
  </div>
  <div class="flex flex-wrap">
    <div class="mb-5"><div class="flex">

        <h3 class="text-principal pb-3 text-2xl font-semibold">Tus datos personales:</h3>
        <button type="submit" class="ps-2 pt-1 pb-3">
          <a href="{{ url('/perfil_usuario/editar') }}">
            <img src="{{ asset('img/edit_icon.png') }}" alt="editar datos">
          </a>
        </button>
    </div>
      <p><b>Nombre:</b> <?= Auth::user()->name ?></p>
      <p><b>Apellido:</b> <?= $user_db->surname ?> </p>
      <p><b>Email:</b> <?= Auth::user()->email ?></p>
    </div>
  </div>
  <div class="mb-8">
    <div class="mb-5">
      <h3 class="text-principal text-2xl font-semibold">Compras realizadas</h3>
    </div>
    @forelse ($compras as $compra)
    <div class="mb-5 border p-2">
      <p><b>Fecha de compra:</b> {{ $compra->fecha_compra }}</p>
      <p><b>Productos:</b></p>
      <ul>
      @foreach ($compra->productos as $producto)
        <li class="ps-3">* {{ $producto->nombre_prod }}</li>
      @endforeach
      </ul>
      <p><b>Importe total:</b> $ {{ $compra->importe_compra }}</p>
    </div>
    @empty
      <p>No hay compras realizadas</p>
    @endforelse
  </div>
</section>
@endsection
