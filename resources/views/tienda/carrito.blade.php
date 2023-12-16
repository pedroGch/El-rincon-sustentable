<?php
use App\Models\Carrito;
use Illuminate\Database\Eloquent\Collection;


/**
 * @var \App\Models\Carrito[]|\Illuminate\Database\Eloquent\Collection $productos
 * @var int|float $totalPrice
 */

 //dd($productos);

?>
@extends('layouts.main')

@section('title', 'Carrito')

@section('content')


    <section class="mx-auto max-w-screen-xl">
        <div class="row container mx-auto mt-4">
            <h2 class="text-principal my-4 mt-10 text-4xl font-semibold text-center">Carrito</h2>

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
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($productos as $producto)
                                <tr class="border">
                                  <td class="align-middle">
                                    <a href="{{ url('/producto/' . $producto->productos->id) }}">
                                      <div class="flex justify-center">
                                        <img src="{{ asset('./storage/' . $producto->productos->imagen_prod) }}" alt="{{ $producto->productos->alt }}" class="img-fluid shadow-sm" width="100">
                                      </div>
                                    </a>
                                  </td>
                                  <td class="align-middle text-center">{{ $producto->productos->nombre_prod }}</td>
                                  <td class="align-middle text-center">${{ $producto->productos->precio }}</td>
                                  <td class="align-middle text-center" width="10%">
                                    <form action="{{ route('actualizarProductoCarrito', ['id' => $producto->productos->id]) }}" method="POST">
                                    @csrf
                                      <div class="flex">
                                        <label for="cantidad_prod" class="sr-only">Cantidad</label>
                                        <input type="number" name="cantidad_prod" id="cantidad_prod" value="{{ $producto->cantidad_prod }}" class="form-control border border-gray-500 rounded p-2 w-full @error('cantidad_prod') border-red-700 @enderror"
                                        @error('cantidad_prod')
                                        aria-invalid="true"
                                        aria-describedby="error-cantidad_prod"
                                        @enderror>
                                        <button type="submit" class="ps-2 pt-1">
                                          <a href="#">
                                            <img src="{{ asset('img/refresh_icon.png') }}" alt="actualizar cantidad">
                                          </a>
                                        </button>
                                      </div>
                                    </form>

                                  </td>
                                  <td class="align-middle text-center">${{ $producto->subtotal }}</td>
                                  <td class="align-middle">
                                    <form action="{{ route('eliminarProductoCarrito', ['id' => $producto->productos->id]) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="flex justify-center">
                                      <img src="{{ asset('img/delete-icon.png') }}" alt="eliminar producto">
                                    </button>
                                  </form>
                                  </td>
                                </tr>
                            @endforeach

                            <tr class="pt-3">
                              <td  class="text-end pt-8"colspan="5">Total</td>
                              <td  class="pt-8">$ {{ $totalPrice }}</td>
                              <td></td>
                          </tr>
                          </table>
                          @error('cantidad_prod')
                                        <div class="mt-1 flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#b0233a" class="h-5 w-5">
                                                <path fill-rule="evenodd"
                                                    d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <p class="text-danger-700" id="error-cantidad_prod"> {{ $message }}</p>
                                        </div>
                                        @enderror
            </div>



            <div class="row flex justify-evenly mt-5 mb-5">

                <div class="col mb-5 inline-block rounded bg-terciario px-6 pb-2 pt-2.5 text-s font-bold uppercase leading-normal text-black shadow-inputBox transition duration-150 ease-in-out hover:bg-terciario hover:shadow-inputBoxHover focus:bg-terciario focus:shadow-inputBoxHover focus:outline-none focus:ring-0 active:bg-terciario">
                    <a href="<?= url('/tienda') ?>" class="btn btn-grey-white w-100">Seguir comprando</a>
                </div>
                <form action="{{ route('vaciarCarrito') }}" method="POST">
                @csrf
                  <button type="submit" class="col mb-5 inline-block rounded bg-terciario px-6 pb-2 pt-2.5 text-s font-bold uppercase leading-normal text-black shadow-inputBox transition duration-150 ease-in-out hover:bg-terciario hover:shadow-inputBoxHover focus:bg-terciario focus:shadow-inputBoxHover focus:outline-none focus:ring-0 active:bg-terciario">Vaciar carrito
                  </button>
                </form>
                @if(!$errors->has('cantidad_prod'))
                <button class="col mb-5 inline-block rounded bg-terciario px-6 pb-2 pt-2.5 text-s font-bold uppercase leading-normal text-black shadow-inputBox transition duration-150 ease-in-out hover:bg-terciario hover:shadow-inputBoxHover focus:bg-terciario focus:shadow-inputBoxHover focus:outline-none focus:ring-0 active:bg-terciario">

                    <a href="{{ route('formCarrito') }}" class="btn btn-primary w-100">Proceder al pago</a>
                </button>
                @endif
            </div>
            @else
            <div>
              <div>
                <h3 class="text-center">¡No hay productos en el carrito!</h3>
              </div>
              <div class="col-6">
                <div class="flex justify-center">
                  <img class="img-fluid d-block" src="{{ asset('./img/carrito-vacio.jpg ') }}" alt="ilustración de un carrito vacío y una mujer con cara triste">
                </div>
              </div>
            </div>
            <div class="flex justify-center">
              <a href="<?= url('/tienda') ?>" class="mt-5 mb-10 inline-block rounded bg-terciario px-6 pb-2 pt-2.5 text-s font-bold uppercase leading-normal text-black shadow-inputBox transition duration-150 ease-in-out hover:bg-terciario hover:shadow-inputBoxHover focus:bg-terciario focus:shadow-inputBoxHover focus:outline-none focus:ring-0 active:bg-terciario">Volver a la tienda</a>
            </div>
            @endif



    </section>



@endsection
