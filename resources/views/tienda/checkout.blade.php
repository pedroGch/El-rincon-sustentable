<?php
use App\Models\Carrito;
use Illuminate\Database\Eloquent\Collection;
use MercadoPago\Resources\Preference;

/**
 * @var \App\Models\Carrito[]|\Illuminate\Database\Eloquent\Collection $productos
 * @var Preference $preference
 * @var string $mpPublicKey
 * @var int|float $totalPrice
 */

?>
@extends('layouts.main')

@section('title', 'Carrito')

@section('content')

<section class="mx-auto max-w-screen-xl">
  <div class="row container mx-auto mt-4">
    <h2 class="text-principal my-4 mt-10 text-4xl font-semibold text-center">Checkout</h2>
    <h3 class="my-8 text-lg">Resumen de tu compra:</h3>
    @if(count($productos) > 0)
    <div>
      <table class="table">
        <thead>
          <tr>
            <th>Imagen</th>
              <th>Nombre</th>
              <th>Precio</th>
              <th>Subtotal</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($productos as $producto)
          <tr class="border">
            <td class="align-middle" width="25%">
              <a href="{{ url('/producto/' . $producto->productos->id) }}">
                <div class="flex justify-center">
                  <img src="{{ asset('./storage/' . $producto->productos->imagen_prod) }}" alt="{{ $producto->productos->alt }}" class="img-fluid shadow-sm" width="100">
                </div>
              </a>
            </td>
            <td class="align-middle text-center" width="25%">{{ $producto->productos->nombre_prod }} ({{ $producto->cantidad_prod }} unidades)</td>
            <td class="align-middle text-center" width="25%">${{ $producto->productos->precio }}</td>
            <td class="align-middle text-center">${{ $producto->subtotal }}</td>
          </tr>
        @endforeach
          <tr>
            <td colspan="5" class="pt-6 align-middle text-center text-lg font-semibold" width="25%">Total $ {{ $totalPrice }}</td>
          </tr>
      </table>
    </div>
    <!-- Botón de Mercado Pago. -->
    <div id="checkout">
    </div>
    <div class="flex justify-center">
      <a href="<?= url('/carrito') ?>" class="mt-5 w-full text-center mb-10 botonPersonalizado">Volver</a>
    </div>
  </div>
  @endif
</section>


{{-- SDK MercadoPago.js --}}
<script src="https://sdk.mercadopago.com/js/v2"></script>
<script>
  // Se instancia el objeto de MercadoPago con la clave pública
  const mp = new MercadoPago('<?= $mpPublicKey ?>');

  // Se inicializa el botón de MercadoPago
  mp.bricks().create('wallet', 'checkout', {
    initialization: {
    preferenceId: '<?= $preference->id ?>',
    }
  });
</script>

@endsection
