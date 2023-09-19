<?PHP
?>

@extends('layouts.main')

{{-- @section('title') Página Principal @endsection --}}

@section('title', 'Nosotros')

@section('content')
<section class="mx-auto max-w-screen-xl">
  <div class="flex justify-center">
    <h2 class="text-principal my-4 text-4xl font-semibold">Nosotros</h2>
  </div>
<div class="flex flex-wrap">
  <div class="flex-1 p-10">
    <img src="../public/img/nosotros.webp" alt="">
  </div>
  <div class="flex-1 p-10 text-xl m-auto">
      <p>Desde 1980 nos enorgullece ser una tienda comprometida con la promoción de prácticas responsables y sostenibles que ayuden a preservar nuestro planeta.</p>
      <p>Comenzamos siendo una empresa familiar y actualmente contamos con un equipo de 50 personas.</p>
      <p><strong>En El Rincón Sustentable, nos enfocamos en ofrecer productos diseñados especialmente para reducir la huella de carbono y minimizar el impacto negativo
        en el medio ambiente.</strong>Cada uno de nuestros artículos es cuidadosamente seleccionado y evaluado para garantizar que cumpla con nuestros estándares de alta calidad, eficiencia y amigabilidad con el medio ambiente.</p>
  </div>
</div>

<div class="bg-principal p-16 mb-20 mt-20">
  <p class="text-white text-center"><strong>Nuestro objetivo es brindarte soluciones sostenibles para tus necesidades diarias, sin comprometer el confort ni la calidad. Creemos firmemente que cada pequeña
    acción cuenta y que juntos podemos marcar la diferencia en la protección de nuestro entorno.</strong> </p>
</div>

<div class="flex justify-between flex-wrap mb-20 text-center">
  <div class="">
    <div>
      <img class="rounded-full" src="../public/img/emp-3.webp" alt="">
    </div>
    <div>
      <p class="text-xl font-semibold mt-4">Ernesto Arriaga</p>
      <p>Presidente</p>
    </div>
  </div>
  <div class="">
    <div>
      <img class="rounded-full" src="../public/img/emp-2.webp" alt="">
    </div>
    <div>
      <p class="text-xl font-semibold mt-4">Micaela Arriaga</p>
      <p>Responsable de Ventas</p>
    </div>
  </div>
  <div class="">
    <div>
      <img class="rounded-full" src="../public/img/emp-4.webp" alt="">
    </div>
    <div>
      <p class="text-xl font-semibold mt-4">Federico Risso</p>
      <p>Diseño de Producto</p>
    </div>
  </div>
  <div class="">
    <div>
      <img class="rounded-full" src="../public/img/emp-1.webp" alt="">
    </div>
    <div>
      <p class="text-xl font-semibold mt-4">Andres Barcala</p>
      <p>Lic. Seguridad e Higiene</p>
    </div>
  </div>
</div>
</section>
@endsection
