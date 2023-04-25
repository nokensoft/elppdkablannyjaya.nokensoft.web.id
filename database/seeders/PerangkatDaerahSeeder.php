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
                    'urusan'                => 'Kesehatan',
                    'alamat'                => 'Tiom, Lanny Jaya',
                    'foto_gedung'           => 'assets/images/image2.png',
                    'user_id'               => 3
                ],
                [
                    'nama_organisasi'       => 'Dinas Pendidikan dan Kebudayaan',
                    'urusan'                => 'Pendidikan',
                    'alamat'                => 'Tiom, Lanny Jaya',
                    'foto_gedung'           => 'assets/images/image1.png',
                    'user_id'               => 2
                ],
                [
                    'nama_organisasi'       => 'Dinas Pekerjaan Umum',
                    'urusan'                => 'Pekerjaan Umum',
                    'alamat'                => 'Tiom, Lanny Jaya',
                    'foto_gedung'           => 'assets/images/image2.png',
                    'user_id'               => 4
                ]
            ]
        );
    }
}
