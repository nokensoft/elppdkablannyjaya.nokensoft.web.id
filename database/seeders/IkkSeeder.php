<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IkkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // pekerjaan umum
        DB::table('Ikk')->insert([
            'no_ikk'            => '1.c.7',
            'urusan'            => 'Pekerjaan Umum',
            'ikk'               => 'Tingkat Kemantapan Jalan Kabupaten ',

            'rumus'             => 'Panjang jalan kabupaten dalam kondisi mantap (baik dan sedang) ------------------------------------------------------------ x 100 % Panjang seluruh jalan kabupaten di daerah tersebut ',
            'keterangan'        => 'Dinas Pekerjaan Umum',

            'ket_jml1'          => 'Panjang jalan kabupaten dalam kondisi mantap (baik dan sedang)',
            'jml1'              => '11.927',
            'ket_jml2'          => 'Panjang seluruh jalan kabupaten di daerah tersebut',
            'jml2'              => '235',
            'capaian_kinerja'   => ''
        ]);

        // kesehatan

        DB::table('Ikk')->insert([
            'no_ikk'            => '1.a.2',
            'urusan'            => 'Kesehatan',
            'ikk'               => 'Persentase RS Rujukan tingkat Kabupaten yang terakreditasi',
            
            'rumus'             => 'Jumlah RS Rujukan yang terakreditasi ---------------------------- x 100 % 1/1) x 100 % Jumlah RS di Kabupaten Lanny Jaya',
            'keterangan'        => 'Dinas Kesehatan',

            'ket_jml1'          => 'Jumlah RS Rujukan yang terakreditasi',
            'jml1'              => '1',
            'ket_jml2'          => 'Jumlah anak usia 7-12 tahun Kabupaten Lanny Jaya',
            'jml2'              => '1',
            'capaian_kinerja'   => ''
        ]);

        DB::table('Ikk')->insert([
            'no_ikk'            => '1.a.1',
            'urusan'            => 'Kesehatan',
            'ikk'               => 'Rasio daya tampung RS terhadap jumlah penduduk',
            
            'rumus'             => 'Jumlah daya tampung rumah sakit rujukan ------------------ x 100 % (247/201.835) x 100 % = 0,005 Jumlah Penduduk Kabupaten Lanny Jaya',
            'keterangan'        => 'Dinas Kesehatan',

            'ket_jml1'          => 'Jumlah daya tampung rumah sakit rujukan',
            'jml1'              => '247',
            'ket_jml2'          => 'Jumlah Penduduk Kabupaten Lanny Jaya',
            'jml2'              => '201875',
            'capaian_kinerja'   => ''
        ]);

        // pendidikan

        DB::table('Ikk')->insert([
            'no_ikk'            => '1.a.1',
            'urusan'            => 'Pendidikan',
            'ikk'               => 'Tingkat Partisipasi warga negara usia 5-6 tahun yang berpartisipasi dalam PAUD',
            'rumus'             => 'Jumlah anak usia 5 - 6 tahun yang sudah tamat atau sedang belajar disatuan PAUD ----------------------- x 100 % (7.012/10.456) x 100 % = 67,06 Jumlah anak usia 5 – 6 tahun Kabupaten Lanny Jaya',
            'keterangan'        => 'Dinas Pendidikan dan Dinas Kependuduk an & Capil',
            'ket_jml1'          => 'Jumlah anak usia 5 - 6 tahun yang sudah tamat atau sedang belajar disatuan PAUD ',
            'jml1'              => '7012',
            'ket_jml2'          => 'Jumlah anak usia 5 – 6 tahun Kabupaten Lanny Jaya',
            'jml2'              => '10456',
            'capaian_kinerja'   => ''
        ]);

        DB::table('Ikk')->insert([
            'no_ikk'            => '1.a.2',
            'urusan'            => 'Pendidikan',
            'ikk'               => 'Tingkat Partisipasi warga negara usia 7-12 tahun yang berpartisipasi dalam Pendidikan Dasar',
            'rumus'             => 'Jumlah anak usia 7-12 tahun yang sudah tamat atau sedang belajar di Sekolah Dasar (SD, MI dan bentuk lain yang sederajat) ---------------------- x 100 % (13.979/15.359) x 100 % = 91,01 Jumlah anak usia 7-12 tahun Kabupaten Lanny Jaya',
            'keterangan'        => 'Dinas Pendidikan dan Dinas Kependuduk an & Capil',
            'ket_jml1'          => 'Jumlah anak usia 7-12 tahun yang sudah tamat atau sedang belajar di Sekolah Dasar (SD, MI dan bentuk  lain yang sederajat)
            ',
            'jml1'              => '13979',
            'ket_jml2'          => 'Jumlah anak usia 7-12 tahun Kabupaten Lanny Jaya',
            'jml2'              => '15359',
            'capaian_kinerja'   => ''
        ]);

    }
}
