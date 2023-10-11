<?php

namespace Database\Seeders;

use App\Models\Pendaftaran;
use Database\Factories\PendaftaranFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PendaftaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pendaftaran::factory(99)->create();
    }
}
