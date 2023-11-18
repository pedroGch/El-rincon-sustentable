<?php
/**
 * @var \App\Models\Producto[]|\Illuminate\Database\Eloquent\Collection $productos
 */

?>
@extends('layouts.main')

{{-- @section('title') Blog @endsection --}}

@section('title', 'Gestor de Productos')

@section('content')


    <section class="mx-auto max-w-screen-xl">
        <div class="mb-5 flex justify-center">
            <h2 class="text-principal my-4 mt-10 text-xl md:text-4xl font-semibold">Gestor de productos</h2>

            <div class="ps-10 mt-6 flex items-center">
                <a href="<?= url('/tienda/producto/nuevo') ?>">
                    <div
                        class="inline-block rounded bg-terciario px-6 pb-2 pt-2.5 text-xs lg:text-s font-bold uppercase leading-normal text-black shadow-inputBox transition duration-150 ease-in-out hover:bg-terciario hover:shadow-inputBoxHover focus:bg-terciario focus:shadow-inputBoxHover focus:outline-none focus:ring-0 active:bg-terciario">
                        <p>Crear Producto</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="lg:mx-6 mb-8 mt-2 flex justify-center flex-row flex-wrap">
            <table>
                <thead class="border-2">
                    <tr>
                        <th class="p-3">ID</th>
                        <th class="p-3">Título</th>
                        <th class="p-3">Categoría</th>
                        <th class="p-3">Etiquetas</th>
                        <th class="p-3">Acciones</th>
                    </tr>
                </thead>
                <tbody class="border-2">
                    @foreach ($productos as $producto)
                      @if ($producto->estado !== 'inactivo')
                        <tr class="border-2">
                            <td class="p-3 border-2">{{ $producto->id }}</td>
                            <td class="text-sm p-3 border-2">{{ $producto->nombre_prod }}</td>
                            <td class="text-sm p-3 border-2">{{ $producto->categoria->nombre_cat }}</td>
                            <td class="text-sm p-3 border-2">
                              @forelse ( $producto->etiquetas as $etiqueta)
                              <div class="p-1"><span class="bg-blue-500 text-white font-semibold rounded-full py-1 px-3 text-xs">{{$etiqueta->nombre}}</span></div>
                            @empty
                              <span>Este producto no posee etiquetas</span>
                            @endforelse
                            </td>
                            <td class="p-3 border-2">
                                <form action="{{ url('/tienda/' . $producto->id . '/editar') }}" method="GET">
                                    <button type="submit"
                                        class="w-full inline-block rounded bg-terciario px-6 pb-2 pt-2.5 text-xs font-bold uppercase leading-normal text-black shadow-inputBox transition duration-150 ease-in-out hover:bg-terciario hover:shadow-inputBoxHover focus:bg-terciario focus:shadow-inputBoxHover focus:outline-none focus:ring-0 active:bg-terciario">Editar</button>
                                </form>

                                <button type="button" onclick="borrarProducto({{ $producto->id }})"
                                    class="my-3 w-full inline-block rounded bg-danger px-6 pb-2 pt-2.5 text-xs font-bold uppercase leading-normal text-black shadow-inputBox transition duration-150 ease-in-out hover:bg-danger-600 hover:shadow-inputBoxHover  focus:bg-danger focus:shadow-inputBoxHover focus:outline-none focus:ring-0 active:bg-danger ">Eliminar</button>

                                <form action="{{ route('detalle.producto', ['id' => $producto->id]) }}" method="GET">
                                    <button type="submit"
                                        class="w-full inline-block rounded bg-terciario px-6 pb-2 pt-2.5 text-xs font-bold uppercase leading-normal text-black shadow-inputBox transition duration-150 ease-in-out hover:bg-terciario hover:shadow-inputBoxHover focus:bg-terciario focus:shadow-inputBoxHover focus:outline-none focus:ring-0 active:bg-terciario">Leer
                                        más</button>
                                </form>
                            </td>
                        </tr>
                      @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

    <script>
        function borrarProducto(id) {

            Swal.fire({

                title: '¿Estás seguro que querés eliminar el producto?',
                //text:"\"{{ $producto->nombre_prod }}\"",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#459646',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, borrar!',
                cancelButtonText: 'Mejor no'
            }).then((result) => {
                if (result.isConfirmed) {
                    //fetch(`${id}/eliminar`)
                    fetch(`${id}/eliminar`, {
                        method: 'get',
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        },
                    })
                    location.reload();
                }
            })


        }
    </script>
@endsection
