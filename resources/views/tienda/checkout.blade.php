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
            <h2 class="text-center mt-5 mb-4">Checkout</h2>

            <div>
              @if(count($productos) > 0)
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th>Subtotal</th>
                                {{-- <th>Eliminar</th> --}}
                            </tr>
                        </thead>
                        <tbody>
              @endif
                            @forelse ($productos as $producto)
                                <tr>
                                    <td class="align-middle"><a href="{{ url('/producto/' . $producto->productos->id) }}"><img
                                                src="{{ asset('./storage/' . $producto->productos->imagen_prod) }}"
                                                alt="{{ $producto->productos->alt }}" class="img-fluid shadow-sm" width="100"></a>
                                    </td>
                                    <td class="align-middle">{{ $producto->productos->nombre_prod }}</td>
                                    <td class="align-middle">{{ $producto->productos->precio }}</td>
                                    <td class="align-middle" width="10%">
                                        <label for="cantidad_prod_{{ $producto->id }}" class="visually-hidden">Cantidad</label>
                                        <input type="number" name="cantidad_prod_{{ $producto->id }}[]" id="cantidad_prod_{{ $producto->id }}" value="{{ $producto->cantidad_prod }}" class="form-control border border-gray-500 rounded">
                                    </td>
                                    <td class="align-middle">${{ $subtotal }}</td>
                                    {{-- <td class="align-middle">
                                        <form action="" method="GET">
                                            <button type="submit"
                                                class="w-full inline-block rounded bg-terciario px-6 pb-2 pt-2.5 text-xs font-bold uppercase leading-normal text-black shadow-inputBox transition duration-150 ease-in-out hover:bg-terciario hover:shadow-inputBoxHover focus:bg-terciario focus:shadow-inputBoxHover focus:outline-none focus:ring-0 active:bg-terciario">Eliminar</button>
                                        </form>
                                    </td> --}}
                                </tr>
                            @empty
                                <div class="flex flex-column row align-items-center">
                                    <div class="col-6 flex justify-content-center">
                                        <h3 class="text-center">¡No hay productos en el carrito!</h3>
                                        <div class="d-flex justify-content-center"><img class="img-fluid d-block"
                                                src="{{ asset('./img/carrito-vacio.jpg ') }}"
                                                alt="ilustración de un carrito vacío y una mujer con cara triste"></div>
                                        <a href="<?= url('/tienda') ?>" class="btn btn-grey-white mx-auto mt-5 mb-5">Volver
                                            a la tienda</a>
                                    </div>
                            @endforelse
            </div>


            <tr>
                <td colspan="4" class="text-end">Total</td>
                <td>$ {{ $totalPrice }}</td>
                <td></td>
            </tr>
            </table>
            <div class="row flex justify-evenly mt-5 mb-5">
                <div class="col">
                    <input type="submit" value="Actualizar carrito" class="btn btn-grey-white w-100">
                </div>
                <div class="col">
                    <a href="<?= url('/tienda') ?>" class="btn btn-grey-white w-100">Seguir comprando</a>
                </div>
                <div class="col">
                    <a href="actions/empty_carrito_act.php" class="btn btn-danger w-100">Vaciar carrito</a>
                </div>
            </div>


            <!-- Acá va a ir el botón de Mercado Pago. -->
            <div id="checkout"></div>

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
