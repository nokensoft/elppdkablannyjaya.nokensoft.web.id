<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Desa;
use Faker\Generator;

class DesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = app(Generator::class);

        Desa::insert([
            'nama_desa'                 => 'Kelurahan Bokon',
            'nama_kepala_desa'          => '',
            'alamat'                    => 'Lanny Jaya.',
            'telp'                      => '082112341234',
            'email'                     => $faker->email(),
            'foto'                      => 'assets/images/user.png',
        ]);

        Desa::insert([
            'nama_desa'                 => 'Aniwo',
            'nama_kepala_desa'          => '',
            'alamat'                    => 'Lanny Jaya.',
            'telp'                      => '082112341234',
            'email'                     => $faker->email(),
            'foto'                      => 'assets/images/user.png',
        ]);

        Desa::insert([
            'nama_desa'                 => 'Dimba',
            'nama_kepala_desa'          => '',
            'alamat'                    => 'Lanny Jaya.',
            'telp'                      => '082112341234',
            'email'                     => $faker->email(),
            'foto'                      => 'assets/images/user.png',
        ]);

    }
}
