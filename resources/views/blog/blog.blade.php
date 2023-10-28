<?php
use Illuminate\Pagination\LengthAwarePaginator;

/**
 * @var \App\Models\Noticia[] | \Illuminate\Database\Eloquent\Collection|LengthAwarePaginator $noticias
 */
?>

@extends('layouts.main')

{{-- @section('title') Blog @endsection --}}

@section('title', 'Inicio')

@section('content')


    <section class="mx-auto max-w-screen-xl">
        <div class="flex justify-center">
            <h2 class="text-principal my-4 mt-10 text-4xl font-semibold">Blog</h2>
        </div>
        <div class="mx-6 flex flex-row flex-wrap mb-6">
            <?php
            foreach ($noticias as $noticia):
            ?>
            <article class="card flex flex-col w-full my-3 lg:w-1/2 lg:p-4">
                <div class="card-header">
                    @if ($noticia->imagen !== null)
                        <img src="{{ asset('./storage/' . $noticia->imagen) }}" alt="{{ $noticia->alt }}">
                    @else
                        <p>Esta noticia no tiene imagen</p>
                    @endif
                </div>
                <div class="card-title my-2">
                    <h3 class="title font-bold text-lg lg:text-2xl text-principal">{{ $noticia->titulo }}</h3>
                    <span class="fecha text-xs text-gray-400">abril 29, 2023</span>
                </div>
                <div class="card-body">
                    <p class="hidden lg:block" >{{ $noticia->descripcion_reducida() }}</p>
                    <p class="sm:hidden" >{{ $noticia->descripcion_reducida(15) }}</p>
                </div>
                <div class="card-footer">
                    <form action="{{ url('/blog/' . $noticia->id . '/leer_mas') }}" method="GET">
                        <button type="submit"
                            class="mt-5 mb-3 inline-block rounded bg-terciario px-6 pb-2 pt-2.5 text-s font-bold uppercase leading-normal text-black shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-terciario hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-terciario focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-terciario active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">Leer
                            más</button>
                    </form>
                </div>
            </article>
            <?php
            endforeach
            ?>
        </div>
        <div class="mb-5">
          {{ $noticias->links() }}
        </div>
    </section>
@endsection
