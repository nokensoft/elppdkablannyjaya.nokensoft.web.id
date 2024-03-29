<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PerangkatDaerah;

class PerangkatDaerahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PerangkatDaerah::insert(
            [
                [
                    'nama_organisasi'       => 'Dinas Kesehatan',
                    'alamat'                => 'Tiom, Lanny Jaya',
                    'user_id'               => 3
                ],
                [
                    'nama_organisasi'       => 'Dinas Pendidikan dan Kebudayaan',
                    'alamat'                => 'Tiom, Lanny Jaya',
                    'user_id'               => 2
                ],
                [
                    'nama_organisasi'       => 'Dinas Pekerjaan Umum',
                    'alamat'                => 'Tiom, Lanny Jaya',
                    'user_id'               => 4
                ]
            ]
        );
    }
}
