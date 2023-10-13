@extends('layouts.main')

{{-- @section('title') Página Principal @endsection --}}

@section('title', 'Inicio')

@section('content')

    <section id="slider" class="mt-10 mx-auto max-w-screen-xl">
        <div id="carouselExampleControls" class="relative" data-te-carousel-init data-te-ride="carousel">
            <!--Carousel items-->
            <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
                <!--First item-->
                <div class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                    data-te-carousel-item data-te-carousel-active>
                    <img src="./img/slider-1.jpg" class="block w-full" alt="Wild Landscape" />
                </div>
                <!--Second item-->
                <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                    data-te-carousel-item>
                    <img src="./img/slider-2.jpg" class="block w-full" alt="Camera" />
                </div>
                <!--Third item-->
                <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                    data-te-carousel-item>
                    <img src="./img/slider-3.jpg" class="block w-full" alt="Exotic Fruits" />
                </div>
                <!--Fourth item -->
                <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                    data-te-carousel-item>
                    <img src="./img/slider-4.jpg" class="block w-full" alt="Exotic Fruits" />
                </div>
            </div>
            <!--Carousel controls - prev item-->
            <button
                class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                type="button" data-te-target="#carouselExampleControls" data-te-slide="prev">
                <span class="inline-block h-8 w-8">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </span>
                <span
                    class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Anterior</span>
            </button>
            <!--Carousel controls - next item-->
            <button
                class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                type="button" data-te-target="#carouselExampleControls" data-te-slide="next">
                <span class="inline-block h-8 w-8">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </span>
                <span
                    class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Siguiente</span>
            </button>
        </div>
    </section>
    <section class="mb-4 mx-auto max-w-screen-xl">
        <div class="flex justify-center">
            <h2 class="text-principal my-6 mt-14 text-4xl font-semibold">Bienvenidos al <span class="font-lemonada">Rincón
                    Sustentable</span></h2>
        </div>

        <div class="container">

            <div class="flex flex-wrap my-4 justify-between ">

                <div class="flex-1 my-4 ms-7">
                    <p class="mb-3 p-2 text-lg">Nos alegra que hayas decidido visitar nuestra página y explorar los
                        artículos que ofrecemos para el cuidado del medio ambiente.</p>

                    <p class="mb-3 p-2 text-lg"> <strong>En nuestra tienda, nos enfocamos en promover prácticas responsables
                            y sostenibles que ayuden a preservar nuestro planeta. Nuestros productos están especialmente
                            diseñados para reducir la huella de carbono y minimizar el impacto negativo en el medio
                            ambiente.</strong></p>

                    <p class="mb-3 p-2 text-lg">Contamos con una amplia gama de productos, incluyendo paneles solares,
                        cargadores solares, lámparas solares, compostadores y productos para el reciclaje. Todos nuestros
                        productos son cuidadosamente seleccionados y evaluados para garantizar que sean de alta calidad,
                        eficientes y amigables con el medio ambiente.</p>
                </div>

                <div class="flex-1 my-4">
                    <img src="../public/img/medio-ambiente.jpg" alt="manos sosteniendo un brote de una planta"
                        class="block m-auto">
                </div>
            </div>
        </div>
    </section>

    <section class="mb-8 mx-auto w-full bg-principal drop-shadow-xl">
        <div class="mx-auto py-5 max-w-screen-xl">
            <p class="mt-12 pb-3 text-2xl text-center italic text-white">En nuestro blog, podrás encontrar información útil
                y consejos prácticos para ayudarte a reducir el desperdicio, ahorrar energía y crear un hogar más sostenible
                para disminuir tu impacto ambiental en la vida cotidiana. </p>
            <p class="pb-8 text-2xl text-center italic text-white">¡Vos también podés ser parte!</p>
            <div class="flex justify-center"><a href="<?= url('/blog') ?>"
                    class=" my-4 py-3 mb-10 px-6 bg-white rounded text-principal font-semibold text-lg drop-shadow-xl">VER
                    MÁS</a></div>
        </div>

    </section>

    <section>
        <div class="container">

            <div class="flex flex-wrap my-4 justify-between ">
                <div class="flex-1 my-4">
                    <img src="../public/img/ecologia.jpg" alt="manos sosteniendo un brote de una planta"
                        class="block m-auto">
                </div>

                <div class="flex-1 my-4 ms-7 ">
                    <p class="mb-3 pt-12 pe-16 text-2xl text-principal font-semibold">Te ofrecemos un servicio de atención
                        al cliente dedicado y dispuesto a brindarte asesoramiento personalizado. Estamos aquí para responder
                        tus preguntas, ofrecerte información detallada sobre nuestros productos y ayudarte a encontrar la
                        mejor solución sostenible para tus necesidades.</p>
                </div>


            </div>
        </div>

    </section>

@endsection

<script>
    // Initialization for ES Users
    import {
        Carousel,
        initTE,
    } from "tw-elements";

    initTE({
        Carousel
    });
</script>
