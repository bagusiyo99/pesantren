<?php

namespace Database\Seeders;

use App\Models\Foto;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
 
public function run()
{
    $this->call([
        UserSeeder::class,
        PendaftaranSeeder::class,
        PesanSeeder::class,
        BlogSeeder::class,
        FotoSeeder::class,
    ]);
}

}
