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
            'cover_file'        => '',

            'babi'              => 'BAB I',
            'babi_file'         => '',

            'babii'             => 'BAB II',
            'babii_file'        => '',

            'babiii'            => 'BAB III',
            'babiii_file'       => '',

            'babiv'             => 'BAB IV',
            'babiv_file'        => '',

            'babv'              => 'BAB V',
            'babv_file'         => '',
            
            'lampiran'          => 'LAMPIRAN',
            'lampiran_file'     => '',
        ]);
        
    }
}
