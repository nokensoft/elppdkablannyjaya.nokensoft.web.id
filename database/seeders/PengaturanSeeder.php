<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pengaturan;

class PengaturanSeeder extends Seeder
{
    public function run()
    {
        Pengaturan::insert([
            'judul_situs'           => 'SILPPD',
            'deskripsi_situs'       => 'Sistem Informasi Laporan Penyelenggaraan Pengelolaan Daerah',
            'logo'                  => 'assets/images/logo/logo.png',
            'favicon'               => 'assets/images/logo/favicon.png',
            'termsconditions'       => '',
            'footerinformation'     => '2023 © SISTEM INFORMASI LAPORAN PENYELENGGARAAN PEMERINTAH DAERAH, KABUPATEN LANNY JAYA.',
        ]);
    }
}
