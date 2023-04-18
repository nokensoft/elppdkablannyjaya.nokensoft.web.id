<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerangkatDaerahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $table = 'profil_perangkatdaerah';

        DB::table($table)->insert([
            'nama_organisasi'       => 'Dinas Pendidikan dan Kebudayaan',
            'urusan'                => 'Pendidikan',
            'rumpun'                => 'Pendidikan',
            'alamat'                => 'Tiom, Lanny Jaya',
            'foto'                  => 'assets/images/1.jpg'
        ]);

        DB::table($table)->insert([
            'nama_organisasi'       => 'Dinas Kesehatan',
            'urusan'                => 'Kesehatan',
            'rumpun'                => 'Kesehatan',
            'alamat'                => 'Tiom, Lanny Jaya',
            'foto'                  => 'assets/images/2.jpg'
        ]);

        DB::table($table)->insert([
            'nama_organisasi'       => 'Dinas Pekerjaan Umum',
            'urusan'                => 'Pekerjaan Umum',
            'rumpun'                => 'Pekerjaan Umum',
            'alamat'                => 'Tiom, Lanny Jaya',
            'foto'                  => 'assets/images/3.jpg'
        ]);

        DB::table($table)->insert([
            'nama_organisasi'       => 'Perumahan Rakyat',
            'urusan'                => 'Perumahan',
            'rumpun'                => 'Perumahan',
            'alamat'                => 'Tiom, Lanny Jaya',
            'foto'                  => 'assets/images/1.jpg'
        ]);

    }
}
