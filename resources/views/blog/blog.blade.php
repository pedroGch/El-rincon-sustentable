<?PHP
?>

@extends('layouts.main')

{{-- @section('title') Blog @endsection --}}

@section('title', 'Inicio')

@section('content')


<section class="mx-auto max-w-screen-xl">
  <div class="flex justify-center">
    <h2 class="text-principal my-4 mt-10 text-4xl font-semibold">Blog</h2>
  </div>
  <div class="mx-6 flex flex-row flex-wrap">
    <?php
      foreach ($noticias as $noticia):
    ?>
      <article class="card flex flex-col w-full lg:w-1/2 p-4">
        <div class="card-header">
          <img src="{{ asset("img/{$noticia->imagen}") }}" alt="<?=$noticia->alt?>">
        </div>
        <div class="card-title my-1">
          <h3 class="title font-bold text-2xl text-principal">{{$noticia->titulo}}</h3>
          <span class="fecha text-xs text-gray-400">abril 29, 2023</span>
        </div>
        <div class="card-body">
          <p>{{$noticia->contenido}}</p>
        </div>
        <div class="card-footer">
          <form action="{{ url('/blog/' . $noticia->id . '/leer_mas') }}" method="GET">
            <button type="submit" class="my-2 text-secundario font-semibold p-1 border border-secundario border-thin rounded-lg">Leer más</button>
          </form>
        </div>
      </article>
    <?php
      endforeach
    ?>
  </div>

</section>
@endsection

