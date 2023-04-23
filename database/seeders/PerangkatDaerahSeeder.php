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
        
        PerangkatDaerah::insert([
            'nama_organisasi'       => 'Dinas Pendidikan dan Kebudayaan',
            'urusan'                => 'Pendidikan',
            'rumpun'                => 'Pendidikan',
            'alamat'                => 'Tiom, Lanny Jaya',
            'foto'                  => 'assets/images/image1.png',
        ]);

        PerangkatDaerah::insert([
            'nama_organisasi'       => 'Dinas Kesehatan',
            'urusan'                => 'Kesehatan',
            'rumpun'                => 'Kesehatan',
            'alamat'                => 'Tiom, Lanny Jaya',
            'foto'                  => 'assets/images/image2.png',
            'user_id'               => 1
        ]);

        PerangkatDaerah::insert([
            'nama_organisasi'       => 'Dinas Pekerjaan Umum',
            'urusan'                => 'Pekerjaan Umum',
            'rumpun'                => 'Pekerjaan Umum',
            'alamat'                => 'Tiom, Lanny Jaya',
            'foto'                  => 'assets/images/image3.png',
            'user_id'               => 2
        ]);

        PerangkatDaerah::insert([
            'nama_organisasi'       => 'Perumahan Rakyat',
            'urusan'                => 'Perumahan',
            'rumpun'                => 'Perumahan',
            'alamat'                => 'Tiom, Lanny Jaya',
            'foto'                  => 'assets/images/image4.png',
            'user_id'               => '3'
        ]);

    }
}
