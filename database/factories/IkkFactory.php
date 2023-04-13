<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class IkkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'no_ikk' => fake()->sentence(),
            'urusan' => fake()->sentence(),
            'ikk' => fake()->sentence(),
            'rumus' => fake()->sentence(),
            'ket_jml1' => fake()->sentence(),
            'jml1' => fake()->sentence(),
            'ket_jml2' => fake()->sentence(),
            'jml2' => fake()->sentence(),
            'capaian_kinerja' => fake()->sentence(),
            'keterangan' => fake()->sentence(),
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
