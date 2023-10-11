<?php

namespace Database\Seeders;

use App\Models\Pesan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PesanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pesan::factory(12)->create();
    }
}
