<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $table = 'lppd_pelaporan';

        DB::table($table)->insert([
            'tahun'             => '2021',
            'cover'             => 'COVER',
            'cover_file'        => 'cover.pdf',
            'babi'              => 'BAB I PENDAHULUAN',
            'babii'             => 'BAB II CAPAIAN KINERJA PENYELENGGARAAN PEMERINTAHAN DAERAH',
            'babiii'            => 'BAB III CAPAIAN KINERJA PELAKSANAAN TUGAS PEMBANTUAN',
            'babiv'             => 'BAB IV PENERAPAN DAN PENCAPAIAN STANDAR PELAYANAN MINIMAL',
            'babv'              => 'BAB V PENUTUP',
            'lampiran'          => 'BAB I PENDAHULUAN'
        ]);
        
    }
}
