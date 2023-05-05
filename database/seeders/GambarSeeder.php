<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gambar;

class GambarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gambar::insert([
            'nama_file'             => 'Logo Pemerintah Daerah Kabupaten Lanny Jaya',
            'alamat_file'           => 'file/pengaturan/logo_pemerintah_daerah_lanny_jaya.png',
        ]);

        Gambar::insert([
            'nama_file'             => 'Favicon',
            'alamat_file'           => 'file/pengaturan/favicon.png',
        ]);
        
        Gambar::insert([
            'nama_file'             => 'Foto Kepala Daerah',
            'alamat_file'           => 'file/pengaturan/user-biru.png',
        ]);

        Gambar::insert([
            'nama_file'             => 'Foto Wakil Kepala Daerah',
            'alamat_file'           => 'file/pengaturan/user-merah.png',
        ]);
        
        Gambar::insert([
            'nama_file'             => 'Foto Sekretaris Daerah',
            'alamat_file'           => 'file/pengaturan/user-orange.png',
        ]);

        Gambar::insert([
            'nama_file'             => 'Nama File',
            'alamat_file'           => 'file/pengaturan/image2.png',
        ]);
        
        Gambar::insert([
            'nama_file'             => 'Nama File',
            'alamat_file'           => 'file/pengaturan/image1.png',
        ]);

        Gambar::insert([
            'nama_file'             => 'Nama File',
            'alamat_file'           => 'file/pengaturan/image2.png',
        ]);
        

    }
}
