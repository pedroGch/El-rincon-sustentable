@extends('layouts.main')

@section('title', 'Compra pendiente')

@section('content')

<section class="mx-auto max-w-screen-xl">
  <div class="row container mx-auto mt-4">
    <h2 class="text-principal my-4 mt-10 text-4xl font-semibold text-center">Compra pendiente</h2>
    <div>
    <p class="mt-10 text-lg font-semibold text-center">El pago aún se encuentra pendiente.</p>
    <p class="mt-10 text-lg font-semibold text-center">El despacho de los productos se realizará cuando el proceso se complete. ¡Muchas gracias!</p>
    </div>
    <div class="row flex justify-evenly mt-10 mb-5">
      <div class="col">
        <a href="<?= url('/tienda') ?>" class="mt-5 mb-10 botonPersonalizado">Volver a la tienda</a>
      </div>
      <div class="col">
        <a href="<?= url('/perfil_usuario') ?>" class="mt-5 mb-10 botonPersonalizado">Ir a mi perfil</a>
      </div>
      <div class="col">
        <a href="<?= url('/checkout') ?>" class="mt-5 mb-10 botonPersonalizado">Reintentar</a>
      </div>
    </div>
  </div>
</section>

@endsection
