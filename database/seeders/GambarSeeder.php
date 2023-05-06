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
            'alamat_file'           => 'default-logo.png',
            'slug'                  => $random.+.1
        ]);

        Gambar::insert([
            'nama_file'             => 'Favicon',
            'alamat_file'           => 'default-favicon.png',
            'slug'                  => $random.+.2
        ]);

        Gambar::insert([
            'nama_file'             => 'Foto Kepala Daerah',
            'alamat_file'           => 'default-user1.png',
            'slug'                  => $random.+.3
        ]);

        Gambar::insert([
            'nama_file'             => 'Foto Wakil Kepala Daerah',
            'alamat_file'           => 'default-user2.png',
            'slug'                  => $random.+.4
        ]);

        Gambar::insert([
            'nama_file'             => 'Foto Sekretaris Daerah',
            'alamat_file'           => 'default-user3.png',
            'slug'                  => $random.+.5
        ]);

        Gambar::insert([
            'nama_file'             => 'Logo Small Dark',
            'alamat_file'           => 'default-logo.png',
            'slug'                  => $random.+.5
        ]);

        Gambar::insert([
            'nama_file'             => 'Logo Large Dark',
            'alamat_file'           => 'default-logo.png',
            'slug'                  => $random.+.6
        ]);

        Gambar::insert([
            'nama_file'             => 'Logo Small Light',
            'alamat_file'           => 'default-logo.png',
            'slug'                  => $random.+.7
        ]);

        Gambar::insert([
            'nama_file'             => 'Logo Large Light',
            'alamat_file'           => 'default-logo.png',
            'slug'                  => $random.+.7
        ]);


    }
}
