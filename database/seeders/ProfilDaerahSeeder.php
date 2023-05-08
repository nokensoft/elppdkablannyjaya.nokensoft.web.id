<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProfilDaerah;

class ProfilDaerahSeeder extends Seeder
{
    public function run()
    {
        ProfilDaerah::insert([
            'pemda_namainstansi'    => 'Pemerintah Kabupaten Lanny Jaya',
            'pemda_lambang'         => 'default.png',
            'pemda_peta'            => 'default.png',

            // KEPALA DAERAH
            'kepala_nama'           => 'kepala_nama',
            'kepala_nik'            => 'kepala_nik',
            'kepala_tgl_lahir'      => 'kepala_tgl_lahir',
            'kepala_tgl_pelantikan' => 'kepala_tgl_pelantikan',
            'kepala_no_sk'          => 'kepala_no_sk',
            'kepala_file_sk'        => 'kepala_file_sk',
            'kepala_asal_partai'    => 'kepala_asal_partai',
            'kepala_visi_misi'      => 'kepala_visi_misi',
            'kepala_riwayat'        => 'kepala_riwayat',
            'kepala_foto'           => 'default.png',

            // WAKIL wakil DAERAH
            'wakil_nama'            => 'wakil_nama',
            'wakil_nik'             => 'wakil_nik',
            'wakil_tgl_lahir'       => 'wakil_tgl_lahir',
            'wakil_tgl_pelantikan'  => 'wakil_tgl_pelantikan',
            'wakil_no_sk'           => 'wakil_no_sk',
            'wakil_file_sk'         => 'wakil_file_sk',
            'wakil_asal_partai'     => 'wakil_asal_partai',
            'wakil_visi_misi'       => 'wakil_visi_misi',
            'wakil_riwayat'         => 'wakil_riwayat',
            'wakil_foto'            => 'default.png',

            // SEKRETARIS DAERAH
            'sekretaris_nama'       => 'sekretaris_nama',
            'sekretaris_nik'        => 'sekretaris_nik',
            'sekretaris_nip'        => 'sekretaris_nip',
            'sekretaris_telp'       => 'sekretaris_telp',
            'sekretaris_pangkat'    => 'sekretaris_pangkat',
            'sekretaris_golongan'   => 'sekretaris_golongan',
            'sekretaris_tgl_lahir'  => 'sekretaris_tgl_lahir',
            'sekretaris_no_sk'      => 'sekretaris_no_sk',
            'sekretaris_file_sk'    => 'sekretaris_file_sk',
            'sekretaris_tmt'        => 'sekretaris_tmt',
            'sekretaris_foto'       => 'default.png',
        ]);
    }
}
