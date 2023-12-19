@extends('layouts.main')

{{-- @section('title') Página Principal @endsection --}}

@section('title', 'Crear cuenta')

@section('content')
    <div class="max-w-[100%] mx-auto ">
        <div class="flex justify-center">
            <h2 class="text-principal my-4 mt-10 text-4xl font-semibold ">Crear una cuenta</h2>
        </div>

        <section class="mx-6 mb-5 p-4 px-[20%]">
          @if ($errors->any())
          <div>
              <p class="text-danger-700">Hay errores en los datos ingresados. Corregir por favor los errores
                  indicados.</p>
          </div>
          @endif
            <form action="{{ url('/crear_cuenta') }}" autocomplete="off" method="POST" enctype="multipart/form-data" class="max-w-[100%] block rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                @csrf
                <div class="relative mb-6" data-te-input-wrapper-init>
                  <label for="name"
                  class="block font-bold my-2">Nombre</label>
                  <input
                    type="text"
                    name="name" id="name"
                    autocomplete="off"
                    class="border border-gray-500 rounded p-2 w-full @error('name') border-red-700 @enderror"
                    value="{{ old('name') }}"
                    @error('name')
                    aria-invalid="true"
                    aria-describedby="error-name"
                    @enderror>
                    @error('name')
                    <div class="mt-1 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#b0233a" class="h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z"
                                clip-rule="evenodd" />
                        </svg>
                        <p class="text-danger-700" id="error-name"> {{ $message }}</p>
                    </div>
                    @enderror
                </div>


                <div class="relative mb-6" data-te-input-wrapper-init>
                  <label for="surname"
                  class="block font-bold my-2">Apellido</label>
                  <input
                    type="text"
                    name="surname" id="surname"
                    autocomplete="off" class="border border-gray-500 rounded p-2 w-full @error('nombre') border-red-700 @enderror"
                    value="{{ old('surname') }}"
                    @error('surname')
                    aria-invalid="true"
                    aria-describedby="error-surname"
                    @enderror>
                    @error('surname')
                    <div class="mt-1 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#b0233a" class="h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z"
                                clip-rule="evenodd" />
                        </svg>
                        <p class="text-danger-700" id="error-surname"> {{ $message }}</p>
                    </div>
                    @enderror

                </div>


                <div class="relative mb-3" data-te-input-wrapper-init>
                  <label for="email"
                    class="block font-bold my-2">Email</label>
                  <input
                    type="email"
                    autocomplete="off"
                    name="email" id="email"
                    class="border border-gray-500 rounded p-2 w-full @error('nombre') border-red-700 @enderror"
                    value="{{ old('email') }}"
                    @error('email')
                    aria-invalid="true"
                    aria-describedby="error-email"
                    @enderror>
                    @error('email')
                    <div class="mt-1 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#b0233a" class="h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z"
                                clip-rule="evenodd" />
                        </svg>
                        <p class="text-danger-700" id="error-email"> {{ $message }}</p>
                    </div>
                    @enderror

                </div>
                <div class="relative mb-6" data-te-input-wrapper-init>
                  <label for="password"
                    class="block font-bold my-2">Contraseña</label>
                  <input
                    type="password"
                    autocomplete="off"
                    name="password" id="password"
                    class="border border-gray-500 rounded p-2 w-full @error('nombre') border-red-700 @enderror"
                    @error('password')
                    aria-invalid="true"
                    aria-describedby="error-password"
                    @enderror>
                    @error('password')
                    <div class="mt-1 flex">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#b0233a" class="h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z"
                                clip-rule="evenodd" />
                        </svg>
                        <p class="text-danger-700" id="error-password"> {{ $message }}</p>
                    </div>
                    @enderror

                </div>


                <button type="submit"
                    class="w-full botonPersonalizado"
                    data-te-ripple-init>
                    Siguiente
                </button>
                <p class="mt-5 ">¿Ya tenés una cuenta?, <a href="<?= url('/iniciar_sesion') ?>"><span class="font-bold underline">Iniciá sesión</span></a></p>
            </form>
        </section>
    </div>
@endsection
