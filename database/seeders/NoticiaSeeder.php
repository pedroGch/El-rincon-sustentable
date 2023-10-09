<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticiaSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('noticias')->insert(
      [
        [
          'id' => 1,
          'titulo' => 'La última tecnología en calefactores solares llega a nuestra tienda online',
          'imagen' => 'noticias/calefactor-solar.jpeg',
          'alt' => 'dos calefactores solares en una terraza',
          'contenido' => 'Los calefactores solares son una excelente alternativa para mantener tu hogar cálido y acogedor de manera sostenible y económica. En nuestra tienda online, ofrecemos la última tecnología en calefactores solares, diseñados para proporcionar calor eficiente y ecológico durante todo el año.

        Nuestros calefactores solares utilizan paneles solares para capturar la energía del sol y convertirla en calor, lo que significa que no se emiten gases de efecto invernadero durante su uso. Además, nuestros calefactores solares son altamente eficientes, lo que significa que necesitan menos energía para calentar tu hogar en comparación con los sistemas de calefacción tradicionales.

        Los calefactores solares también son una excelente opción para los hogares que desean independizarse de la red eléctrica y reducir su dependencia de los combustibles fósiles. En nuestra tienda online, ofrecemos una amplia variedad de calefactores solares para satisfacer las necesidades de cada hogar, desde calefactores portátiles hasta sistemas de calefacción central.',
        ],
        [
          'id' => 2,
          'titulo' => 'La crisis climática empeora: Informe de la ONU muestra que la temperatura global sigue aumentando',
          'imagen' => 'noticias/cambio-climatico.jpg',
          'alt' => 'tierra resquebrajada por la sequía, de fondo, edificios de una ciudad',
          'contenido' => 'Un nuevo informe de la ONU muestra que la temperatura global sigue aumentando a un ritmo alarmante. Según los expertos, la crisis climática ya está teniendo graves consecuencias en todo el mundo, como el aumento del nivel del mar, eventos climáticos extremos y la pérdida de especies animales y vegetales.
          
          El informe destaca que la principal causa del aumento de la temperatura global es la emisión de gases de efecto invernadero, principalmente dióxido de carbono, generado por actividades humanas como la quema de combustibles fósiles. Los expertos advierten que si no se toman medidas urgentes para reducir estas emisiones, los efectos del cambio climático solo empeorarán.

          El informe también destaca la necesidad de transitar hacia una economía más sostenible, con la utilización de fuentes de energía renovable y la implementación de prácticas de producción y consumo más responsables.

          En nuestra tienda online, ofrecemos una amplia variedad de productos sostenibles, como paneles solares, calefactores solares y productos para el compostaje, con el objetivo de ayudar a los clientes a reducir su huella de carbono y aportar a la lucha contra la crisis climática.',

        ],
        [
          'id' => 3,
          'titulo' => 'El reciclaje de plásticos se vuelve más accesible gracias a una nueva tecnología',
          'imagen' => 'noticias/contaminacion-mar.png',
          'alt' => 'basura en el océano',
          'contenido' => 'El plástico es uno de los materiales más utilizados en el mundo, pero también es uno de los más contaminantes. Afortunadamente, hay tecnologías emergentes que están haciendo que el reciclaje de plásticos sea más accesible y eficiente. Una nueva tecnología que está ganando popularidad es la pirólisis, que convierte los desechos plásticos en productos valiosos, como combustibles y productos químicos.

          La pirólisis funciona calentando los desechos plásticos en ausencia de oxígeno, lo que los convierte en gas. Este gas se puede enfriar y condensar para producir una variedad de productos útiles. Esta tecnología es muy prometedora porque puede procesar una amplia gama de plásticos, incluidos los tipos difíciles de reciclar, como el PVC.

          En nuestra tienda online, fomentamos el uso de productos reciclados y el reciclaje en general. Ofrecemos una amplia gama de productos para el reciclaje en el hogar, como contenedores de reciclaje y herramientas para el compostaje.',

        ],
        [
          'id' => 4,
          'titulo' => 'Cada vez más hogares apuestan por la energía solar para reducir su huella de carbono',
          'imagen' => 'noticias/energia-solar-1.jpg',
          'alt' => 'panel solar',
          'contenido' => 'El cambio hacia la energía solar está ganando impulso en todo el mundo, y cada vez más hogares están adoptando soluciones sostenibles para reducir su impacto ambiental. Según los expertos, la energía solar es una de las opciones más efectivas para reducir la huella de carbono, ya que no solo es una fuente de energía limpia, sino que también es renovable y cada vez más accesible.

          En los últimos años, el costo de la energía solar ha disminuido significativamente, lo que ha hecho que sea más asequible para los hogares y las empresas. Además, las innovaciones tecnológicas en la industria solar han mejorado la eficiencia de los paneles solares, lo que significa que los hogares pueden obtener más energía de cada panel.

          En nuestra tienda online, ofrecemos una amplia gama de productos solares, desde paneles solares hasta cargadores y lámparas solares, todos diseñados para ayudarte a reducir tu huella de carbono. Al invertir en energía solar, no solo estás haciendo tu parte para cuidar el medio ambiente, sino que también estás ahorrando dinero a largo plazo en tu factura de energía.',

        ]
      ]



    );
  }
}
