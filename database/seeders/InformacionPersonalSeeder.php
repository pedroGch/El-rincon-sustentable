<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InformacionPersonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('informacion_personal')->insert(
        [
          [
            'id' => 1,
            'nombre' => 'pedro_gch',
            'apellido' => 'gonzalez',
            'email' => 'pedro.gonzalez@davinci.edu.ar'
          ],
          [
            'id' => 2,
            'nombre' => 'ro_scotto',
            'apellido' => 'scotto',
            'email' => 'rocio_scotto@davinci.edu.ar'
          ],
          [
            'id' => 3,
            'nombre' => 'Ezequiel',
            'apellido' => 'valdiviezo',
            'email' => 'jose.grillo@davinci.edu.ar'
          ],
          [
            'id' => 4,
            'nombre' => 'jose',
            'apellido' => 'grillo',
            'email' => '@davinci.edu.ar'
          ],
        ]
      );
    }
}

