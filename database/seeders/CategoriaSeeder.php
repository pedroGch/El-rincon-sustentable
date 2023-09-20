<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('categorias')->insert(
        [
          [
            'id' => 1,
            'nombre_cat' => 'Paneles Solares',
            'descripcion' => 'Obtené energía limpia y sostenible con nuestros paneles solares de alta eficiencia. Convertí la luz del sol en electricidad para tu hogar de manera eco-amigable y ahorrá en tus facturas de energía.',
          ],
          [
            'id' => 2,
            'nombre_cat' => 'Composteras',
            'descripcion' => 'Transformá tus residuos orgánicos en valioso compost con nuestras composteras. Fomentá la sostenibilidad y nutre tu jardín con un ciclo de vida natural y respetuoso con el medio ambiente.',
          ],
          [
            'id' => 3,
            'nombre_cat' => 'Cestos de Basura',
            'descripcion' => 'Mantené tu entorno limpio y organizado con nuestros cestos de basura de alta calidad. Diseñados para la eficiencia en la recolección de residuos, hacen que la gestión de desechos sea más simple y efectiva.',
          ],
          [
            'id' => 4,
            'nombre_cat' => 'Yo Reutilizo!',
            'descripcion' => 'Sumate al movimiento "Yo Reutilizo!" y reducí tu huella ecológica. Descubrí productos reutilizables y soluciones eco-amigables que te ayudarán a cuidar el planeta mientras ahorrás dinero a largo plazo.',
          ]
        ]
      );
    }
}

