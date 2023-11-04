<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EtiquetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('etiquetas')->insert([
        [
          'etiqueta_id' => 1,
          'nombre' => 'En promoción',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [
          'etiqueta_id' => 2,
          'nombre' => 'Sin stock',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [
          'etiqueta_id' => 3,
          'nombre' => 'Importado',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [
          'etiqueta_id' => 4,
          'nombre' => 'Novedad',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [
          'etiqueta_id' => 5,
          'nombre' => 'Más vendido',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [
          'etiqueta_id' => 6,
          'nombre' => 'Edición limitada',
          'created_at' => now(),
          'updated_at' => now(),
        ],
      ]);
    }
}
