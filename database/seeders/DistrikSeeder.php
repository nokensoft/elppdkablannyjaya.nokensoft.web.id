<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Distrik;
use Faker\Generator;

class DistrikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = app(Generator::class);

        Distrik::insert([
            'nama_distrik'              => 'Tiom',
            'ibu_kota_distrik'          => 'Bokon',
            'nama_kepala_distrik'       => 'Miter Wanimbo',
            'alamat'                    => 'Lanny Jaya.',
            'telp'                      => '082112341234',
            'email'                     => $faker->email(),
        ]);

        Distrik::insert([
            'nama_distrik'              => 'Pirime',
            'ibu_kota_distrik'          => 'Umbanume',
            'nama_kepala_distrik'       => 'Mael Wanimbo, AMd',
            'alamat'                    => 'Lanny Jaya.',
            'telp'                      => '082112341234',
            'email'                     => $faker->email(),
        ]);

        Distrik::insert([
            'nama_distrik'              => 'Dimba',
            'ibu_kota_distrik'          => 'Dimba',
            'nama_kepala_distrik'       => 'Yuluerius Kogoya, S.Sos',
            'alamat'                    => 'Lanny Jaya.',
            'telp'                      => '082112341234',
            'email'                     => $faker->email(),
        ]);


        Distrik::insert([
            'nama_distrik'              => 'Gamelia',
            'ibu_kota_distrik'          => 'Gamelia',
            'nama_kepala_distrik'       => 'Uragame Muni',
            'alamat'                    => 'Lanny Jaya.',
            'telp'                      => '082112341234',
            'email'                     => $faker->email(),
        ]);


    }
}
