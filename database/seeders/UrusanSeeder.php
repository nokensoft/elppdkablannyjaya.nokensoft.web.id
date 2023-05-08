<?php

namespace Database\Seeders;

use App\Models\Urusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UrusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Urusan::insert(
            [
                [
                    'judul_urusan'      => 'Kesehatan',
                    'slug'              => 'kesehatan',
                ],
                [
                    'judul_urusan'      => 'Pekerjaan Umum',
                    'slug'              => 'pekerjaan-umum',
                ],
                [
                    'judul_urusan'      => 'Pendidikan',
                    'slug'              => 'pendidikan',
                ]
            ]
        );
    }
}
