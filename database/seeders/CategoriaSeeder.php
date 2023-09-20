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
      DB::table('noticias')->insert(
        [
          [
            'id' => 1,
            'nombre_cat' => 'Paneles Solares',
            'descripcion' => '',
          ],
          [
            'id' => 2,
            'nombre_cat' => 'Composteras',
            'descripcion' => '',
          ],
          [
            'id' => 3,
            'nombre_cat' => 'Cestos de Basura',
            'descripcion' => '',
          ],
          [
            'id' => 4,
            'nombre_cat' => 'Yo Reutilizo!',
            'descripcion' => '',
          ]
        ]
      );
    }
}

