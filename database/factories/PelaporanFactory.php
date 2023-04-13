<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class PelaporanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tahun' => fake()->sentence(),
            'cover' => fake()->sentence(),
            'cover_file' => fake()->sentence(),
            'babi' => fake()->sentence(),
            'babii' => fake()->sentence(),
            'babiii' => fake()->sentence(),
            'babiv' => fake()->sentence(),
            'babv' => fake()->sentence(),
            'lampiran' => fake()->sentence(),
            'status' => fake()->sentence(),
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
