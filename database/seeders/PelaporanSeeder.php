<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pelaporan;

class PelaporanSeeder extends Seeder
{
    public function run()
    {

        Pelaporan::insert([
            'tahun'             => '2023',

            'cover'             => 'COVER',
            'cover_file'        => 'cover.pdf',

            'babi'              => 'BAB I PENDAHULUAN',
            'babi_file'         => 'cover.pdf',

            'babii'             => 'BAB II CAPAIAN KINERJA PENYELENGGARAAN PEMERINTAHAN DAERAH',
            'babii_file'        => 'cover.pdf',

            'babiii'            => 'BAB III CAPAIAN KINERJA PELAKSANAAN TUGAS PEMBANTUAN',
            'babiii_file'       => 'cover.pdf',

            'babiv'             => 'BAB IV PENERAPAN DAN PENCAPAIAN STANDAR PELAYANAN MINIMAL',
            'babiv_file'        => 'cover.pdf',

            'babv'              => 'BAB V PENUTUP',
            'babv_file'         => 'cover.pdf',
            
            'lampiran'          => 'LAMPIRAN',
            'lampiran_file'     => 'cover.pdf',
        ]);
        
    }
}
