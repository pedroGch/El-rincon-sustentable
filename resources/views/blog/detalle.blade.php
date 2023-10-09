<?php
/**
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
        <article class=" mx-6 grid grid-cols-2 w-full p-4">
            <div class="card-header">
                @if ($noticia->imagen !== null)
                    <img src="{{ url('./storage/' . $noticia->imagen) }}" alt="{{ $noticia->alt }}">
                @else
                    <p>Esta noticia no tiene imagen</p>
                @endif

                <span class="fecha text-xs my-1 text-gray-400">abril 29, 2023</span>
            </div>
            <div class="card-body">
                <p>{{ $noticia->contenido }}</p>
            </div>
        </article>
    </section>
@endsection
