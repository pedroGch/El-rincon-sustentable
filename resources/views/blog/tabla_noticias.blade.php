<?php
/**
 * @var \App\Models\Noticia[]|\Illuminate\Database\Eloquent\Collection $noticias
 */
?>
@extends('layouts.main')

{{-- @section('title') Blog @endsection --}}

@section('title', 'Gestor de Noticias')

@section('content')


    <section class="mx-auto max-w-screen-xl">
        <div class="mb-5 flex justify-center">
            <h2 class="text-principal my-4 mt-10 text-xl md:text-4xl font-semibold">Gestor de noticias</h2>

            <div class="ps-10 mt-6 flex items-center">
                <a href="<?= url('/blog/noticia/nueva') ?>">
                    <div
                        class="botonPersonalizado">
                        <p>Crear noticia</p>
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
                        <th class="p-3">Acciones</th>
                    </tr>
                </thead>
                <tbody class="border-2">
                    @foreach ($noticias as $noticia)
                        <tr class="border-2">
                            <td class="p-3 border-2">{{ $noticia->id }}</td>
                            <td class="text-sm p-3 border-2">{{ $noticia->titulo }}</td>
                            <td class="p-3 border-2">
                                <form action="{{ url('/blog/' . $noticia->id . '/editar') }}" method="GET">
                                    <button type="submit"
                                        class="w-full botonPersonalizado-text-xs">Editar</button>
                                </form>

                                <button type="button" onclick="borrarNoticia({{ $noticia->id }})"
                                    class="w-full botonPersonalizado-text-xs-rojo">Eliminar</button>

                                <form action="{{ url('/blog/' . $noticia->id . '/leer_mas') }}" method="GET">
                                    <button type="submit"
                                        class="w-full botonPersonalizado-text-xs">Leer
                                        más</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

    <script>
        function borrarNoticia(id) {

            Swal.fire({
                title: '¿Estás seguro que querés eliminar la noticia?',
                //text: "\"{{ $noticia->titulo }}\"",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#459646',
                cancelButtonColor: '#d33',
                confirmButtonText: '¡Sí, borrar!',
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
