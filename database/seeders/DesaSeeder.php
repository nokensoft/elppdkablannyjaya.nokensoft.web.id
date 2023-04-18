<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        $table = 'profil_desa';

        DB::table($table)->insert([
            'nama_desa'                 => 'Kelurahan Bokon',
            'nama_kepala_desa'          => '',
            'alamat'                    => 'Lanny Jaya.',
            'telp'                      => '082112341234',
            'email'                     => $faker->email()
        ]);

        DB::table($table)->insert([
            'nama_desa'                 => 'Aniwo',
            'nama_kepala_desa'          => '',
            'alamat'                    => 'Lanny Jaya.',
            'telp'                      => '082112341234',
            'email'                     => $faker->email()
        ]);

        DB::table($table)->insert([
            'nama_desa'                 => 'Dimba',
            'nama_kepala_desa'          => '',
            'alamat'                    => 'Lanny Jaya.',
            'telp'                      => '082112341234',
            'email'                     => $faker->email()
        ]);

    }
}
