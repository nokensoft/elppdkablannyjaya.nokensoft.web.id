<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class DistrikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_distrik' => fake()->randomElement([
                'Tiom',
                'Pirime',
                'Mikki',
                'Gamelia',
                'Dimba'
            ]),
            'ibu_kota_distrik' => fake()->sentence(),
            'nama_kepala_distrik' => fake()->name(),
            'alamat' => fake()->streetAddress(),
            'telp' => fake()->phoneNumber(),
            'email' => fake()->email(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
