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
              'usuario_id' => 2,
              'fecha_compra' => '2021-11-20',
              'importe_compra' => 2304128,
              'created_at' => now(),
              'updated_at' => now(),
            ],
            [
              'compra_id' => 2,
              'usuario_id' => 3,
              'fecha_compra' => '2021-11-17',
              'importe_compra' => 69853,
              'created_at' => now(),
              'updated_at' => now(),
            ]
        ]);
    }
}
