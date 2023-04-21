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
            'no_ikk'        => fake()->regexify('[1-4]{1}[.][a-h]{1}[.][1-4]{1}'),
            'urusan'        => fake()->randomElement([
                'Pendidikan', 
                'Kesehatan', 
                'Pekerjaan Umum', 
                'Pendapatan'
            ]),
            'ikk'           => fake()->sentence(),
            'rumus'         => fake()->sentence(),
            'ket_jml1'      => fake()->sentence(),
            'jml1'          => fake()->randomDigitNot(2),
            'ket_jml2'      => fake()->sentence(),
            'jml2'          => fake()->randomDigitNot(2),
            // 'capaian_kinerja' => fake()->sentence(),
            'keterangan'    => fake()->paragraph(2),
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
