<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('usuarios')->insert(
        [
          [
            'id' => 1,
            'nombre_usuario' => 'pedro_gch',
            'rol' => 'admin',
            'password' => '1234'
          ],
          [
            'id' => 2,
            'nombre_usuario' => 'ro_scotto',
            'rol' => 'admin',
            'password' => '1234'
          ],
          [
            'id' => 3,
            'nombre_usuario' => 'valdi',
            'rol' => 'admin',
            'password' => '1234'
          ],
          [
            'id' => 4,
            'nombre_usuario' => 'pepe_grillo',
            'rol' => 'user',
            'password' => '1234'
          ],
        ]
      );
    }
}

