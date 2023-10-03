<?php
/**
 * @var \App\Models\Noticia[]|\Illuminate\Database\Eloquent\Collection $noticias
*/
?>
@extends('layouts.main')

{{-- @section('title') Blog @endsection --}}

@section('title', 'gestor de noticias')

@section('content')


<section class="mx-auto max-w-screen-xl">
  <div class="flex justify-center">
    <h2 class="text-principal my-4 mt-10 text-4xl font-semibold">Gestor de noticias</h2>
  </div>
  <div class="flex justify-center">
    <a href="<?= url('/blog/noticia/nueva') ?>">Crear noticia</a>
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
            <td>{{$noticia->id}}</td>
            <td>{{$noticia->titulo}}</td>
            <td>
              <form action="{{ url('/blog/' . $noticia->id . '/editar') }}" method="POST">
                <button type="submit" class="my-2 text-secundario font-semibold p-1 border border-secundario border-thin rounded-lg">editar</button>
              </form>

                <button type="button" onclick="borrarNoticia({{$noticia->id}})" class="my-2 text-secundario font-semibold p-1 border border-secundario border-thin rounded-lg">eliminar</button>

              <form action="{{ url('/blog/' . $noticia->id . '/leer_mas') }}" method="GET">
                <button type="submit" class="my-2 text-secundario font-semibold p-1 border border-secundario border-thin rounded-lg">Leer más</button>
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
    title: '¿Estas seguro que queres elminar la noticia?.',
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
        fetch(`${id}/eliminar`,{method: 'POST', body: {id:id}})
      }
    })


  }
</script>
@endsection
