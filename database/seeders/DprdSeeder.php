<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dprd;

class DprdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Dprd::insert([
            'nama_lengkap'      => 'Tanus Kogoya',
            'jabatan'           => 'Ketua DPR',
            'nik'               => '1234567891',
            'alamat'            => 'Jalan Raya, Nama Desa, Nama Distrik, Nama Kabupaten.',
            'ttl'               => 'tempat lahir, tt/bb/yyyy',
            'nama_partai'       => 'nama partai',
            'pendidikan'        => 'tingkatan pendidikan',
            // 'foto'              => 'assets/images/user.png',
        ]);

        Dprd::insert([
            'nama_lengkap'      => 'Wondien Yikwa',
            'jabatan'           => 'Wakil Ketua',
            'nik'               => '1234567892',
            'alamat'            => 'Jalan Raya, Nama Desa, Nama Distrik, Nama Kabupaten.',
            'ttl'               => 'tempat lahir, tt/bb/yyyy',
            'nama_partai'       => 'nama partai',
            'pendidikan'        => 'tingkatan pendidikan',
            // 'foto'              => 'assets/images/user.png',
        ]);

        Dprd::insert([
            'nama_lengkap'      => 'nama lengkap',
            'jabatan'           => 'jabatan',
            'nik'               => '1234567893',
            'alamat'            => 'Jalan Raya, Nama Desa, Nama Distrik, Nama Kabupaten.',
            'ttl'               => 'tempat lahir, tt/bb/yyyy',
            'nama_partai'       => 'nama partai',
            'pendidikan'        => 'tingkatan pendidikan',
            // 'foto'              => 'assets/images/user.png',
        ]);

        Dprd::insert([
            'nama_lengkap'      => 'nama lengkap',
            'jabatan'           => 'jabatan',
            'nik'               => '1234567894',
            'alamat'            => 'Jalan Raya, Nama Desa, Nama Distrik, Nama Kabupaten.',
            'ttl'               => 'tempat lahir, tt/bb/yyyy',
            'nama_partai'       => 'nama partai',
            'pendidikan'        => 'tingkatan pendidikan',
            // 'foto'              => 'assets/images/user.png',
        ]);

        Dprd::insert([
            'nama_lengkap'      => 'nama lengkap',
            'jabatan'           => 'jabatan',
            'nik'               => '1234567895',
            'alamat'            => 'Jalan Raya, Nama Desa, Nama Distrik, Nama Kabupaten.',
            'ttl'               => 'tempat lahir, tt/bb/yyyy',
            'nama_partai'       => 'nama partai',
            'pendidikan'        => 'tingkatan pendidikan',
            // 'foto'              => 'assets/images/user.png',
        ]);

        Dprd::insert([
            'nama_lengkap'      => 'nama lengkap',
            'jabatan'           => 'jabatan',
            'nik'               => '1234567896',
            'alamat'            => 'Jalan Raya, Nama Desa, Nama Distrik, Nama Kabupaten.',
            'ttl'               => 'tempat lahir, tt/bb/yyyy',
            'nama_partai'       => 'nama partai',
            'pendidikan'        => 'tingkatan pendidikan',
            // 'foto'              => 'assets/images/user.png',
        ]);

    }
}
