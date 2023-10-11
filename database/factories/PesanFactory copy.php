<?php

namespace Database\Factories;

use App\Models\Pesan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pesan>
 */
class PesanFactory extends Factory
{
    protected $model = Pesan::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail,
            'alamat' => $this->faker->address(),
            'jk' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'pesan' => $this->faker->paragraph(), 
                ];
    }
}
