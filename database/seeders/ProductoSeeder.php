<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('productos')->insert(
        [
          [
            'id' => 1,
            'nombre_prod' => 'Estacion De Reciclado Separador',
            'imagen_prod' => 'prod-37.webp',
            'alt' => 'Tachos de basuras gris con tapas de colores',
            'categoria' => 3,
            'descripcion' => 'La Estación de Reciclado Separador de Residuos X 3 Cestos de 30 litros es la solución perfecta para promover y facilitar la separación de residuos de manera eficiente y organizada. Este conjunto incluye tres cestos de 30 litros cada uno, diseñados específicamente para clasificar diferentes tipos de residuos.

            Cada cesto tiene un color distintivo y una etiqueta identificativa para facilitar la separación correcta de los residuos. Puedes utilizar un cesto para papel y cartón, otro para plásticos y envases, y el tercer cesto para vidrio y metal. Esta disposición te permite mantener tus residuos organizados y listos para el reciclaje.

            Los cestos están fabricados con materiales resistentes y duraderos, lo que garantiza su larga vida útil. Cada cesto tiene una capacidad de 30 litros, lo que proporciona un amplio espacio para depositar los residuos sin necesidad de vaciarlos con frecuencia.',
            'stock' => 9,
            'precio' => 6036300,
          ],
          [
            'id' => 2,
            'nombre_prod' => 'Kit Cesto Separador De Residuos',
            'imagen_prod' => 'prod-36.webp',
            'alt' => 'Cestos marrones claritos, separadores de residuos',
            'categoria' => 3,
            'descripcion' => 'El Kit Cesto Separador de Residuos Ecobox es la solución perfecta para fomentar la separación de residuos de manera rápida y eficiente en cualquier entorno. Este kit incluye dos conjuntos de cestos, cada uno compuesto por dos tachos con capacidades de 18 y 24 litros respectivamente.

            Cada conjunto de cestos está diseñado para separar los diferentes tipos de residuos de forma práctica y organizada. Los dos tachos de 18 litros están destinados a la separación de vidrio y metal, mientras que los dos tachos de 24 litros están diseñados para papel/cartón y plástico. Con estas opciones, puedes clasificar tus residuos de manera efectiva, facilitando el posterior proceso de reciclaje.

            Los cestos de la Ecobox son fáciles de armar y tienen el tamaño ideal para adaptarse a diferentes espacios. Con medidas de 30x30x45 cm para los tachos de 18 litros y 30x40x45 cm para los tachos de 24 litros, estos cestos ofrecen una capacidad adecuada sin ocupar demasiado espacio.',
            'stock' => 16,
            'precio' => 350000,
          ],
          [
            'id' => 3,
            'nombre_prod' => 'Compostera Eco Balcón Kompost',
            'imagen_prod' => 'prod-40.webp',
            'alt' => 'Compostera blanca, con un diseño en el medio de la compotera',
            'categoria' => 2,
            'descripcion' => 'La Compostera Eco Balcón Kompost® es la elección perfecta para aquellos que desean realizar compostaje en espacios reducidos, como balcones o terrazas. Con un diseño compacto y una capacidad de 40 litros, esta compostera te permite convertir tus residuos orgánicos en compost de alta calidad, ¡y lo mejor es que está hecha de plástico reciclado!

            Fabricada con polipropileno de alta resistencia, esta compostera presenta bordes gruesos y paredes con nervaduras para garantizar durabilidad y resistencia a golpes y cambios de temperatura. La tapa es removible y se coloca en el nivel superior, lo que facilita el acceso y la adición de residuos.

            Con medidas de 110 cm de altura, 33 cm de ancho y 33 cm de largo, esta compostera se adapta perfectamente a espacios pequeños sin comprometer su capacidad de compostaje. Aunque no cuenta con una canilla, su diseño permite una adecuada circulación de aire y humedad para acelerar el proceso de descomposición.',
            'stock' => 6,
            'precio' => 949000,
          ],
          [
            'id' => 4,
            'nombre_prod' => 'Compostera Urbana Balcón Lombrices Compost 40 L',
            'imagen_prod' => 'prod-8.webp',
            'alt' => 'Compostera negra con un diseño en el medio',
            'categoria' => 2,
            'descripcion' => 'Compostera urbana 60 L | Ideal para quienes están empezando el proceso de compostaje domiciliario y para hogares con poco consumo de frutas y verduras.

            Realizada con plástico recuperado, pensada para que los orgánicos vuelvan a la tierra en forma de compost. Mejorá tu vínculo con los desechos, cuidá la salud de nuestro planeta.

            Materiales eco-friendly y súper resistentes: compostera fabricada con polipropileno recuperado, tiene bordes gruesos y paredes con nervaduras (se banca golpes y altas/bajas temperaturas)
            Bonus track: la tapa que siempre se coloca en el nivel superior viene con bisagra y es removible, para que puedas cambiar de módulos de forma fácil y express
            Capacidad: 60 L
            Ubicación: donde quieras, están preparadas para interior y exterior, ¡se adaptan a vos!',
            'stock' => 17,
            'precio' => 1619100,
          ],
          [
            'id' => 5,
            'nombre_prod' => 'Kit De Bombeo Solar Completo 16000 Litros/h',
            'imagen_prod' => 'prod-18.webp',
            'alt' => 'Kit de bombeo solar completo 16000 litros/h',
            'categoria' => 1,
            'descripcion' => '¡Agua limpia y renovable en cualquier lugar con nuestro sistema de bombeo solar!

            Este sistema de bombeo solar es perfecto para obtener agua limpia y renovable en lugares donde no hay acceso a la red eléctrica. El sistema utiliza paneles solares para generar energía, lo que lo hace completamente independiente y autosuficiente. Es fácil de instalar y se adapta a cualquier tipo de terreno.

            Nuestro sistema de bombeo solar incluye una bomba de agua de alta calidad, paneles solares y un inversor de bombeo. La bomba de agua es resistente y duradera, capaz de extraer agua de hasta 62 metros de profundidad. Los paneles solares tienen una vida útil de más de 25 años y se garantiza que funcionarán con eficacia incluso en condiciones de baja iluminación.

            Este sistema es ideal para hogares, granjas, campos y lugares donde se necesite agua para irrigación o para el consumo humano. Además, el sistema es amigable con el medio ambiente y no produce emisiones de gases de efecto invernadero. ¡Compre ahora nuestro sistema de bombeo solar y disfrute del agua limpia y renovable en cualquier lugar!',
            'stock' => 11,
            'precio' => 197100200,
          ],
          [
            'id' => 6,
            'nombre_prod' => 'Panel Solar Cargador Portátil',
            'imagen_prod' => 'prod-4-5.webp',
            'alt' => 'Panel solar negro y naranja, con cargador portátil',
            'categoria' => 1,
            'descripcion' => 'PANEL SOLAR CARGADOR PORTATIL WIBAG 12/5v 120Watts
            WiBag 120W
            Panel Solar Plegable
            Cargador Solar Plegable, Ultra Portable
            Genera 12V y 5V-120 Watts',
            'stock' => 4,
            'precio' => 32382000,
          ],
          [
            'id' => 7,
            'nombre_prod' => 'Tapa Tapones Para Botella',
            'imagen_prod' => 'prod-33.webp',
            'alt' => 'Tapa tapones par botellas con dieños animados y minimalistas',
            'categoria' => 4,
            'descripcion' => 'Las Tapas para Botella Diseños Pasteles es un set encantador que le da un toque divertido y colorido a tus botellas. Consta de 6 unidades con diseños de motivos pasteles, como cupcakes, helados y donas, que agregan un toque de alegría y estilo a tus bebidas.

            Cada tapa tapón está fabricada con materiales duraderos y de alta calidad, lo que garantiza su resistencia y durabilidad a largo plazo. Estas tapas están diseñadas para adaptarse a una amplia variedad de botellas estándar, como botellas de agua, botellas de refrescos o botellas de jugo.

            Además de su atractivo diseño, estas tapas tapones también cumplen una función práctica al sellar herméticamente tus botellas. Esto ayuda a mantener la frescura y el sabor de tus bebidas, evitando derrames accidentales y manteniendo el contenido seguro mientras estás en movimiento.',
            'stock' => 17,
            'precio' => 231600,
          ],
          [
            'id' => 8,
            'nombre_prod' => 'Botella Reutilizable Kompost® 750 Ml | Zero Waste',
            'imagen_prod' => 'prod-9.webp',
            'alt' => 'Botella reutilizable gris, con fondo de pileta',
            'categoria' => 4,
            'descripcion' => 'Botella Reutilizable Kompost® 750 Ml | Zero Waste
            Posee una capacidad de 750 cc
            Tapa con rosca
            Medidas: 270mm x 75mm
            Importada y aprobada por INAL',
            'stock' => 14,
            'precio' => 699000,
          ],
        ]
        );
    }
}
