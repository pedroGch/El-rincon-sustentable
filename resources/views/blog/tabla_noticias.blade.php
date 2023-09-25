@extends('layouts.main')

{{-- @section('title') Blog @endsection --}}

@section('title', 'gestor de noticias')

@section('content')


<section class="mx-auto max-w-screen-xl">
  <div class="flex justify-center">
    <h2 class="text-principal my-4 mt-10 text-4xl font-semibold">Gestor de noticias</h2>
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
        <?php
          foreach ($noticias as $noticia):
        ?>
          <tr>
            <td>{{$noticia->id}}</td>
          </tr>
          <tr>
            <td>{{$noticia->titulo}}</td>
          </tr>
          <tr>
            <td>
              <form action="{{ url('/blog/' . $noticia->id . '/editar') }}" method="POST">
                <button type="submit" class="my-2 text-secundario font-semibold p-1 border border-secundario border-thin rounded-lg">editar</button>
              </form>
            </td>
            <td>
              <form action="{{ url('/blog/' . $noticia->id . '/eliminar') }}" method="POST">
                <button type="submit" class="my-2 text-secundario font-semibold p-1 border border-secundario border-thin rounded-lg">eliminar</button>
              </form>
            </td>
          </tr>
        <?php
          endforeach
        ?>
      </tbody>
    </table>
  </div>

</section>
@endsection
