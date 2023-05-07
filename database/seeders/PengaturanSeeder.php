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

            'logo_sm_dark'          => 'logo-small-dark.png',
            'logo_lg_dark'          => 'logo-large-dark.png',
            
            'logo_sm_light'         => 'logo-small-light.png',
            'logo_lg_light'         => 'logo-large-light.png',

            'favicon'               => 'favicon.png',
            'termsconditions'       => '',
            'footerinformation'     => '2023 © SISTEM INFORMASI LAPORAN PENYELENGGARAAN PEMERINTAH DAERAH, KABUPATEN LANNY JAYA.',
            'tentang_aplikasi'      => '<p>Aplikas SIPPID Kabupaten Lanny Jaya dibuat untuk mempermudah Pemerintah Kabupaten Lanny Jaya dalam mengumpulan dan mengelola LPPD secara online.</p> <p>Sistem ini digunakan oleh Pemerintah Daerah Kabupaten Lanny Jaya dengan sistem basis data (database) yang terpusat agar memudahkan petugas dan pejabat dalam mengelola data. Dengan sistem basis data secara online dan terpusat, membuat proses penyampaikan laporan kinerja lebih efisien dan konsisten. Selain itu, data tersebut juga mudah diakses dari mana saja dan kapan saja.</p>',
        ]);
    }
}
