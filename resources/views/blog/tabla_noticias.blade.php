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
        <div class="flex justify-center">
            <h2 class="text-principal my-4 mt-10 text-4xl font-semibold">Gestor de noticias</h2>
        </div>

        <div class="flex justify-center mb-5">
            <a href="<?= url('/blog/noticia/nueva') ?>">
                <div
                    class="inline-block rounded bg-terciario px-6 pb-2 pt-2.5 text-s font-bold uppercase leading-normal text-black shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-terciario hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-terciario focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-terciario active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                    <p>Crear noticia</p>
                </div>
            </a>
        </div>
        <div class="mx-6 flex flex-row flex-wrap">
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>titulo</th>
                        <th>acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($noticias as $noticia)
                        <tr>
                            <td>{{ $noticia->id }}</td>
                            <td>{{ $noticia->titulo }}</td>
                            <td>
                                <form action="{{ url('/blog/' . $noticia->id . '/editar') }}" method="GET">
                                    <button type="submit"
                                        class="my-2 text-secundario font-semibold p-1 border border-secundario border-thin rounded-lg">editar</button>
                                </form>

                                <button type="button" onclick="borrarNoticia({{ $noticia->id }})"
                                    class="my-2 text-secundario font-semibold p-1 border border-secundario border-thin rounded-lg">eliminar</button>

                                <form action="{{ url('/blog/' . $noticia->id . '/leer_mas') }}" method="GET">
                                    <button type="submit"
                                        class="my-2 text-secundario font-semibold p-1 border border-secundario border-thin rounded-lg">Leer
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
                title: '¿Estas seguro que queres eliminar la noticia?.',
                text: "nombre de la noticia",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, ¡borrar!.',
                cancelButtonText: 'Mejor no.'
            }).then((result) => {
                if (result.isConfirmed) {
                    //fetch(`${id}/eliminar`)
                    fetch(`${id}/eliminar`, {
                        method: 'get',
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        },
                    })
                }
            })


        }
    </script>
@endsection
