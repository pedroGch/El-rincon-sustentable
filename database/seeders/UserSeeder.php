<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('users')->insert([
        [
          'id' => 1,
          'name' => 'pedro',
          'email' => 'pedro@za.com',
          'password' => Hash::make('pedro'),
          'created_at' => now(),
          'updated_at' => now(),
        ]
      ]);
    }
}
