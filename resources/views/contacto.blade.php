@extends('layouts.main')

{{-- @section('title') Página Principal @endsection --}}

@section('title', 'Contacto')

@section('content')
  <div class="container">
    <div class="flex justify-center">
      <h2 class="text-principal my-4 mt-10 text-4xl font-semibold">Contacto</h2>
    </div>
    <div class="row lg:flex my-4 justify-between ">
      <div class="lg:flex-1 my-4">
        <img src="img/envelope.jpg" alt="ilustración de un sobre postal color verde" class="block m-auto">
      </div>
      <div class="lg:flex-1 my-4">
      @if ($errors->any())
        <div>
          <p class="text-danger-700">Hay errores en los datos ingresados. Corregir por favor los errores indicados.</p>
        </div>
      @endif
        <form action="{{ url('/contacto') }}" method="post" id="form-contacto" enctype="multipart/form-data">
        @csrf
          <div>
            <label for="nombre" class="block font-bold my-2"> Nombre </label>
            <input type="text" name="nombre" id="nombre" class="border border-gray-500 rounded p-2 w-full @error('nombre') border-red-700 @enderror"
            value="{{ old('nombre') }}"
            @error('nombre')
            aria-invalid="true"
            aria-describedby="error-nombre"
            @enderror>
            @error('nombre')
            <div class="mt-1 flex">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#b0233a" class="h-5 w-5">
                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z"
                clip-rule="evenodd" />
              </svg>
              <p class="text-danger-700" id="error-nombre"> {{ $message }}</p>
            </div>
            @enderror
          </div>
          <div>
            <label for="email" class="block font-bold my-2"> Email </label>
            <input type="email" name="email" id="email" class="border border-gray-500 rounded p-2 w-full  @error('email') border-red-700 @enderror"
            value="{{ old('email') }}"
            @error('email')
            aria-invalid="true"
            aria-describedby="error-email"
            @enderror>
            @error('email')
            <div class="mt-1 flex">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#b0233a" class="h-5 w-5">
                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z"
                clip-rule="evenodd" />
              </svg>
              <p class="text-danger-700" id="error-email"> {{ $message }}</p>
            </div>
            @enderror
          </div>
          <div>
            <label for="asunto" class="block font-bold my-2"> Asunto </label>
            <input type="text" name="asunto" id="asunto" class="border border-gray-500 rounded p-2 w-full @error('asunto') border-red-700 @enderror"
            value="{{ old('asunto') }}"
            @error('asunto')
            aria-invalid="true"
            aria-describedby="error-asunto"
            @enderror>
            @error('asunto')
            <div class="mt-1 flex">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#b0233a" class="h-5 w-5">
                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z"
                clip-rule="evenodd" />
              </svg>
              <p class="text-danger-700" id="error-asunto"> {{ $message }}</p>
            </div>
            @enderror
          </div>
          <div>
            <label for="mensaje" class="block font-bold my-2"> Mensaje </label>
            <textarea name="mensaje" id="mensaje" cols="30" rows="10" class="border border-gray-500 rounded p-2 w-full  @error('mensaje') border-red-700 @enderror"
            @error('mensaje')
            aria-invalid="true"
            aria-describedby="error-mensaje"
            @enderror>{{ old('mensaje') }}</textarea>
            @error('mensaje')
              <div class="mt-1 flex">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#b0233a" class="h-5 w-5">
                  <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z"
                  clip-rule="evenodd" />
                </svg>
                <p class="text-danger-700" id="error-mensaje"> {{ $message }}</p>
              </div>
            @enderror
          </div>
          <input type="submit" class=" my-4 inline-block rounded bg-terciario px-6 pb-2 pt-2.5 text-s font-bold uppercase leading-normal text-black shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-terciario hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-terciario focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-terciario active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
          value="Enviar">
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
