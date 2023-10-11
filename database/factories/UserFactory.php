<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = User::class;
    public function definition(): array
    {
        return [
            'name' => 'admin', 
            'email' => 'admin@gmail.com', 
            'akses' => 'operator', 
            'email_verified_at' => now(),
            'password' => '$2y$10$sn0xQzfI87OuIWY0Pc4mquMPkCbF2Xqqv4IRWOPr.0LaY7/eZ8exC', // 12345
        ];
    }

}
