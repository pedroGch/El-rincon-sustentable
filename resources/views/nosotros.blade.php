@extends('layouts.main')

{{-- @section('title') Página Principal @endsection --}}

@section('title', 'Nosotros')

@section('content')
    <section class="mx-auto max-w-screen-xl">
        <div class="flex justify-center">
            <h2 class="text-principal my-4 mt-10 text-4xl font-semibold">Nosotros</h2>
        </div>
        <div class="flex flex-wrap">
            <div class="py-3 lg:flex-1 lg:p-10">
                <img src="img/nosotros.webp" alt="Dos hombres trabajando">
            </div>
            <div class="lg:flex-1 lg:p-10 lg:text-xl m-auto">
                <p>Desde 1980 nos enorgullece ser una tienda comprometida con la promoción de prácticas responsables y
                    sostenibles que ayuden a preservar nuestro planeta.</p>
                <p>Comenzamos siendo una empresa familiar y actualmente contamos con un equipo de 50 personas.</p>
                <p><strong>En El Rincón Sustentable, nos enfocamos en ofrecer productos diseñados especialmente para reducir
                        la huella de carbono y minimizar el impacto negativo
                        en el medio ambiente.</strong>Cada uno de nuestros artículos es cuidadosamente seleccionado y
                    evaluado para garantizar que cumpla con nuestros estándares de alta calidad, eficiencia y amigabilidad
                    con el medio ambiente.</p>
            </div>
        </div>

        <div class="bg-principal p-8 my-8 lg:p-16 lg:my-20 lg:text-xl">
            <p class="text-white text-center"><strong>Nuestro objetivo es brindarte soluciones sostenibles para tus
                    necesidades diarias, sin comprometer el confort ni la calidad. Creemos firmemente que cada pequeña
                    acción cuenta y que juntos podemos marcar la diferencia en la protección de nuestro entorno.</strong>
            </p>
        </div>

        <div class="flex justify-center lg:justify-between flex-wrap mb-20 text-center">
            <div class="my-3">
                <div>
                    <img class="rounded-full" src="img/emp-3.webp" alt="foto de Ernesto Arriaga, integrante del staff de la empresa">
                </div>
                <div>
                    <p class="text-xl font-semibold mt-4">Ernesto Arriaga</p>
                    <p>Presidente</p>
                </div>
            </div>
            <div class="my-3">
                <div>
                    <img class="rounded-full" src="img/emp-2.webp" alt="foto de Micaela Arriaga, integrante del staff de la empresa">
                </div>
                <div>
                    <p class="text-xl font-semibold mt-4">Micaela Arriaga</p>
                    <p>Responsable de Ventas</p>
                </div>
            </div>
            <div class="my-3">
                <div>
                    <img class="rounded-full" src="img/emp-4.webp" alt="foto de Federico Risso, integrante del staff de la empresa">
                </div>
                <div>
                    <p class="text-xl font-semibold mt-4">Federico Risso</p>
                    <p>Diseño de Producto</p>
                </div>
            </div>
            <div class="my-3">
                <div>
                    <img class="rounded-full" src="img/emp-1.webp" alt="foto de >Andres Barcala, integrante del staff de la empresa">
                </div>
                <div>
                    <p class="text-xl font-semibold mt-4">Andres Barcala</p>
                    <p>Lic. Seguridad e Higiene</p>
                </div>
            </div>
        </div>
    </section>
@endsection
