<?php


namespace Database\Factories;

use App\Models\Pendaftaran;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pendaftaran>
 */
class PendaftaranFactory extends Factory
{
      protected $model = Pendaftaran::class;

    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail,
            'alamat' => $this->faker->address(),
            'telpon' => $this->faker->regexify('[0-9]{13}'), // Menghasilkan nomor telepon dengan panjang 13 karakter.
            'pesan' => $this->faker->paragraph(),
            
        ];
    }
}
