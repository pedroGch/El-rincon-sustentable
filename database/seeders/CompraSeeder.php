<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('compras')->insert(
          [
            [
              'compra_id' => 1,
              'usuario_id' => 1,
              'fecha_compra' => '2021-11-14',
              'importe_compra' => 1000,
              'created_at' => now(),
              'updated_at' => now(),
            ],
            [
              'compra_id' => 2,
              'usuario_id' => 1,
              'fecha_compra' => '2021-11-14',
              'importe_compra' => 2000,
              'created_at' => now(),
              'updated_at' => now(),
            ],
            [
              'compra_id' => 3,
              'usuario_id' => 2,
              'fecha_compra' => '2021-11-20',
              'importe_compra' => 2800,
              'created_at' => now(),
              'updated_at' => now(),
            ]
        ]);
    }
}
