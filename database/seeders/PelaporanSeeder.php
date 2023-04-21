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
            'tahun'             => '2020',
            'cover'             => 'COVER',
            'cover_file'        => 'cover.pdf',
            'babi'              => 'BAB I PENDAHULUAN',
            'babii'             => 'BAB II CAPAIAN KINERJA PENYELENGGARAAN PEMERINTAHAN DAERAH',
            'babiii'            => 'BAB III CAPAIAN KINERJA PELAKSANAAN TUGAS PEMBANTUAN',
            'babiv'             => 'BAB IV PENERAPAN DAN PENCAPAIAN STANDAR PELAYANAN MINIMAL',
            'babv'              => 'BAB V PENUTUP',
            'lampiran'          => 'BAB I PENDAHULUAN'
        ]);

        Pelaporan::insert([
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

        Pelaporan::insert([
            'tahun'             => '2022',
            'cover'             => 'COVER',
            'cover_file'        => 'cover.pdf',
            'babi'              => 'BAB I PENDAHULUAN',
            'babii'             => 'BAB II CAPAIAN KINERJA PENYELENGGARAAN PEMERINTAHAN DAERAH',
            'babiii'            => 'BAB III CAPAIAN KINERJA PELAKSANAAN TUGAS PEMBANTUAN',
            'babiv'             => 'BAB IV PENERAPAN DAN PENCAPAIAN STANDAR PELAYANAN MINIMAL',
            'babv'              => 'BAB V PENUTUP',
            'lampiran'          => 'BAB I PENDAHULUAN'
        ]);

        Pelaporan::insert([
            'tahun'             => '2023',
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
