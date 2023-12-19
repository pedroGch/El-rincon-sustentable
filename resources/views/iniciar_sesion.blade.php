@extends('layouts.main')

{{-- @section('title') Página Principal @endsection --}}

@section('title', 'Inicio de sesión')

@section('content')
    <div class="bg-[url('./img/mano-tocando-arbol.jpg')] mx-0">
        <div class="flex justify-center">
            <h2 class="text-principal my-4 mt-10 text-4xl font-semibold ">Iniciar Sesión</h2>
        </div>

        <section class="mb-10 lg:mx-6 flex justify-center p-4 ">
            <form action="{{ url('/validar_usuario') }}" method="POST"
                class="block  rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                @csrf
                <div class="relative mb-3" data-te-input-wrapper-init>
                  <label for="email"
                    class="block font-bold my-2">Email</label>
                  <input type="email" value="{{ old('email') }}" autocomplete="off" name="email" id="email"
                    class="border border-gray-500 rounded p-2 w-full">
                </div>

                <div class="relative mb-6" data-te-input-wrapper-init>
                  <label for="password"
                    class="block font-bold my-2">Contraseña</label>
                  <input type="password" autocomplete="off" name="password" id="password"
                  class="border border-gray-500 rounded p-2 w-full">
                </div>

                <button type="submit"
                    class="w-full botonPersonalizado"
                    data-te-ripple-init>
                    Ingresar
                </button>
                <p class="mt-5 ">¿No tenés cuenta?, <a href="<?= url('/crear_cuenta') ?>"><span class="font-bold underline">Registrate</span></a></p>
            </form>

        </section>
    </div>
@endsection
