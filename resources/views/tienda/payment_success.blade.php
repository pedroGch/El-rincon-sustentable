@extends('layouts.main')

@section('title', 'Compra finalizada')

@section('content')

<section class="mx-auto max-w-screen-xl">
  <div class="row container mx-auto mt-4">
    <h2 class="text-principal my-4 mt-10 text-4xl font-semibold text-center">Compra finalizada</h2>
    <div>
    <p class="mt-10 text-lg font-semibold text-center">El pago fue procesado correctamente. ¡Muchas gracias por tu compra!</p>
    </div>
    <div class="row flex justify-evenly mt-10 mb-5">
      <div class="col">
        <a href="<?= url('/tienda') ?>" class="mt-5 mb-10 botonPersonalizado">Volver a la tienda</a>
      </div>
      <div class="col">
        <a href="<?= url('/perfil_usuario') ?>" class="mt-5 mb-10 botonPersonalizado">Ir a mi perfil</a>
      </div>
    </div>
  </div>
</section>

@endsection
