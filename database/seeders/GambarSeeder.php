<?php

namespace Database\Seeders;

use App\Models\Gambar;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GambarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $random = Str::random(15);


        Gambar::insert([
            'nama_file'             => 'Logo Pemerintah Daerah Kabupaten Lanny Jaya',
            'alamat_file'           => 'file/pengaturan/logo_pemerintah_daerah_lanny_jaya.png',
            'slug'                  => $random.+.1
        ]);

        Gambar::insert([
            'nama_file'             => 'Favicon',
            'alamat_file'           => 'file/pengaturan/favicon.png',
            'slug'                  => $random.+.2
        ]);

        Gambar::insert([
            'nama_file'             => 'Foto Kepala Daerah',
            'alamat_file'           => 'file/pengaturan/user-biru.png',
            'slug'                  => $random.+.3
        ]);

        Gambar::insert([
            'nama_file'             => 'Foto Wakil Kepala Daerah',
            'alamat_file'           => 'file/pengaturan/user-merah.png',
            'slug'                  => $random.+.4
        ]);

        Gambar::insert([
            'nama_file'             => 'Foto Sekretaris Daerah',
            'alamat_file'           => 'file/pengaturan/user-orange.png',
            'slug'                  => $random.+.5
        ]);

        Gambar::insert([
            'nama_file'             => 'Nama File',
            'alamat_file'           => 'file/pengaturan/image2.png',
            'slug'                  => $random.+.5
        ]);

        Gambar::insert([
            'nama_file'             => 'Nama File',
            'alamat_file'           => 'file/pengaturan/image1.png',
            'slug'                  => $random.+.6
        ]);

        Gambar::insert([
            'nama_file'             => 'Nama File',
            'alamat_file'           => 'file/pengaturan/image2.png',
            'slug'                  => $random.+.7
        ]);


    }
}
