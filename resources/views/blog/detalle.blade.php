<?php
/**
 * @var \App\Models\Noticia[] | \Illuminate\Database\Eloquent\Collection $noticias
 * @var \App\Models\Noticia $noticia
 */
?>

@extends('layouts.main')

{{-- @section('title') Blog @endsection --}}

@section('title', 'Inicio')

@section('content')


    <section class="mx-auto max-w-screen-xl">
        <div class="flex justify-center">
            <h2 class="text-principal my-4 mt-10 text-4xl font-semibold">{{ $noticia->titulo }}</h2>
        </div>
        <article class="mx-6 grid grid-cols-2 w-full p-4">
            <div class="card-header m-4">
                @if ($noticia->imagen !== null)
                    <img src="{{ asset('./storage/' . $noticia->imagen) }}" alt="{{ $noticia->alt }}">
                @else
                    <p>Esta noticia no tiene imagen</p>
                @endif

                <span class=" fecha text-s my-1 text-gray-400">abril 29, 2023</span>
            </div>
            <div class="card-body m-4">
                <p>{!! nl2br($noticia->contenido) !!}</p>
            </div>
        </article>
    </section>
    <section>
        <h2 class="text-principal my-4 mt-10 text-4xl font-semibold">Seguir leyendo</h2>
        <div class="flex mb-8">
            @foreach ($noticias as $cadaNoticia)
                <div class="card m-5">
                    <a href="{{ url('/blog/' . $cadaNoticia->id . '/leer_mas') }}">
                      <div>
                          @if ($cadaNoticia->imagen !== null)
                              <img src="{{ asset('./storage/' . $cadaNoticia->imagen) }}" alt="{{ $cadaNoticia->alt }}" class="object-cover	w-90 h-50">
                          @else
                              <p>Esta noticia no tiene imagen</p>
                          @endif
                      </div>
                    </a>
                    <div class="card-title my-1">
                      <h3 class="title font-bold text-principal">{{ $cadaNoticia->titulo }}</h3>
                      <span class="fecha text-xs text-gray-400">abril 29, 2023</span>
                  </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
