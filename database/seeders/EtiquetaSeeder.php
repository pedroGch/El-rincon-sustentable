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
      DB::table('etiquetas')->insert(
        [
          'etiqueta_id' => 1,
          'nombre' => 'en promoción',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [
          'etiqueta_id' => 2,
          'nombre' => 'sin stock',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [
          'etiqueta_id' => 3,
          'nombre' => 'importado',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [
          'etiqueta_id' => 4,
          'nombre' => 'novedad',
          'created_at' => now(),
          'updated_at' => now(),
        ],
      );
    }
}
