@extends('layouts.main')

{{-- @section('title') Página Principal @endsection --}}

@section('title', 'crear cuenta')

@section('content')
    <div class="max-w-[100%] mx-auto ">
        <div class="flex justify-center">
            <h2 class="text-principal my-4 mt-10 text-4xl font-semibold ">Crear una cuenta</h2>
        </div>

        <section class="mx-6 mb-5 p-4 px-[20%]">
            <form action="{{ url('/crear_cuenta') }}" autocomplete="off" method="POST"
                class="max-w-[100%] block rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                @csrf
                <div class="relative mb-6" data-te-input-wrapper-init>
                  <label for="name"
                  class="block font-bold my-2">Nombre</label>
                  <input type="text" name="name" id="name" value="{{ old('name') }}" autocomplete="off"                       class="border border-gray-500 rounded p-2 w-full">
                </div>
                <div class="relative mb-6" data-te-input-wrapper-init>
                  <label for="surname"
                  class="block font-bold my-2">Apellido</label>
                  <input type="text" name="surname" id="surname" value="{{ old('surname') }}" autocomplete="off"                       class="border border-gray-500 rounded p-2 w-full">
                </div>
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
                    class="w-full inline-block rounded bg-terciario px-6 pb-2 pt-2.5 text-s font-bold uppercase leading-normal text-black shadow-inputBox transition duration-150 ease-in-out hover:bg-terciario hover:shadow-inputBoxHover focus:bg-terciario focus:shadow-inputBoxHover focus:outline-none focus:ring-0 active:bg-terciario"
                    data-te-ripple-init>
                    Siguiente
                </button>
            </form>
        </section>
    </div>
@endsection
