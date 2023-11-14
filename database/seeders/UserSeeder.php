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
          'name' => 'Pedro',
          'surname' => 'Gonzalez Chavez',
          'email' => 'pedro@za.com',
          'password' => Hash::make('pedro'),
          'rol' => 'admin',
          'created_at' => now(),
          'updated_at' => now(),
        ],
        [
          'id' => 2,
          'name' => 'Rocío',
          'surname' => 'Scotto',
          'email' => 'rociobelenscotto@gmail.com',
          'password' => Hash::make('123456'),
          'rol' => 'user',
          'created_at' => now(),
          'updated_at' => now(),
        ],
      ]);
    }
}
