<?php
/**
 * @var \App\Models\User[]|\Illuminate\Database\Eloquent\Collection $usuarios
 */

?>
@extends('layouts.main')

{{-- @section('title') Blog @endsection --}}

@section('title', 'Usuarios y Compras')

@section('content')


    <section class="mx-auto max-w-screen-xl">
        <div class="mb-5 flex justify-center">
            <h2 class="text-principal my-4 mt-10 text-xl md:text-4xl font-semibold">Usuarios y Compras</h2>
        </div>
        <div class="lg:mx-6 mb-8 mt-2 flex justify-center flex-row flex-wrap">
            <table>
                <thead class="border-2">
                    <tr>
                        <th class="p-3">ID</th>
                        <th class="p-3">Nombre</th>
                        <th class="p-3">Apellido</th>
                        <th class="p-3">Email</th>
                        <th class="p-3">Compras</th>
                    </tr>
                </thead>
                <tbody class="border-2">
                    @foreach ($usuarios as $usuario)
                        <tr class="border-2">
                            <td class="p-3 border-2">{{ $usuario->id }}</td>
                            <td class="text-sm p-3 border-2">{{ $usuario->name }}</td>
                            <td class="text-sm p-3 border-2">{{ $usuario->surname }}</td>
                            <td class="text-sm p-3 border-2">{{ $usuario->email }}</td>
                            <td class="text-sm p-3 border-2">
                              @forelse ($usuario->compras as $compra)
                              <div class="mb-5">
                                  <p><b>Fecha de compra:</b> {{ $compra->fecha_compra }}</p>
                                  <p><b>Productos:</b></p>
                                  <ul class="ms-4">

                                  @foreach ($compra->productos as $producto)
                                      <li>* {{ $producto->nombre_prod }} - {{ $producto->precio_formateado($producto->precio)  }}</li>
                                  @endforeach
                                </ul>
                                <p><b>Importe total:</b> ${{ $compra->importe_compra }}</p>
                                @empty
                                  <p>Aún no ha realizado compras.</p>
                                @endforelse
                                </td>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>


@endsection
