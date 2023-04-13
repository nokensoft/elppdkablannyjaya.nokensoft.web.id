<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin Master',
            'job_desc' => 'Administrator',
            'avatar' => 'assets/admin/assets/images/users/user-admin.jpg',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'status' => '1',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Admin Master',
            'job_desc' => 'Administrator',
            'avatar' => 'assets/admin/assets/images/users/user-admin.png',
            'email' => 'admin.master@gmail.com',
            'password' => bcrypt('admin.master@gmail.com'),
            'status' => '1',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Samuel Bosawer',
            'job_desc' => 'Administrator',
            'avatar' => 'assets/admin/assets/images/users/user-samuel.jpg',
            'email' => 's.bos@gmail.com',
            'password' => bcrypt('s.bos@gmail.com'),
            'status' => '1',
        ]);

        // ======================
        // PERANGKAT DAERAH
        // ======================

        \App\Models\PerangkatDaerah::factory()->create([
            'nama_organisasi' => 'Dinas Pendidikan dan Kebudayaan',
            'urusan' => 'Pendidikan',
            'rumpun' => 'Pendidikan',
            'alamat' => 'Tiom, Lanny Jaya',
            'foto' => 'assets/images/1.jpg'
        ]);

        \App\Models\PerangkatDaerah::factory()->create([
            'nama_organisasi' => 'Dinas Kesehatan',
            'urusan' => 'Kesehatan',
            'rumpun' => 'Kesehatan',
            'alamat' => 'Tiom, Lanny Jaya',
            'foto' => 'assets/images/2.jpg'
        ]);

        \App\Models\PerangkatDaerah::factory()->create([
            'nama_organisasi' => 'Dinas Pekerjaan Umum',
            'urusan' => 'Pekerjaan Umum',
            'rumpun' => 'Pekerjaan Umum',
            'alamat' => 'Tiom, Lanny Jaya',
            'foto' => 'assets/images/3.jpg'
        ]);

        \App\Models\PerangkatDaerah::factory()->create([
            'nama_organisasi' => 'Perumahan Rakyat',
            'urusan' => 'Perumahan',
            'rumpun' => 'Perumahan',
            'alamat' => 'Tiom, Lanny Jaya',
            'foto' => 'assets/images/1.jpg'
        ]);

        // ======================
        // DPRD
        // ======================

        \App\Models\Dprd::factory()->create([
            'nama_lengkap' => 'Tanus Kogoya',
            'jabatan' => 'Ketua DPR',
            'foto' => 'assets/images/1.jpg'
        ]);

        \App\Models\Dprd::factory()->create([
            'nama_lengkap' => 'Wondien Yikwa',
            'jabatan' => 'Wakil Ketua',
            'foto' => 'assets/images/2.jpg'
        ]);

        // ======================
        // DISTRIK
        // ======================

        \App\Models\Distrik::factory()->create([
            'nama_distrik' => 'Tiom',
            'ibu_kota_distrik' => 'Bokon',
            'nama_kepala_distrik' => 'Miter Wanimbo',
            'alamat' => 'Lanny Jaya.',
            'telp' => '082112341234'
        ]);

        \App\Models\Distrik::factory()->create([
            'nama_distrik' => 'Pirime',
            'ibu_kota_distrik' => 'Umbanume',
            'nama_kepala_distrik' => 'Mael Wanimbo, AMd',
            'alamat' => 'Lanny Jaya.',
            'telp' => '082112341234'
        ]);

        \App\Models\Distrik::factory()->create([
            'nama_distrik' => 'Dimba',
            'ibu_kota_distrik' => 'Dimba',
            'nama_kepala_distrik' => 'Yuluerius Kogoya, S.Sos',
            'alamat' => 'Lanny Jaya.',
            'telp' => '082112341234'
        ]);

        \App\Models\Distrik::factory()->create([
            'nama_distrik' => 'Gamelia',
            'ibu_kota_distrik' => 'Gamelia',
            'nama_kepala_distrik' => 'Uragame Muni',
            'alamat' => 'Lanny Jaya.',
            'telp' => '082112341234'
        ]);

        // ======================
        // DESA
        // ======================

        \App\Models\Desa::factory()->create([
            'nama_desa' => 'Kelurahan Bokon',
            'nama_kepala_desa' => '',
            'alamat' => 'Lanny Jaya.',
            'telp' => '082112341234'
        ]);

        \App\Models\Desa::factory()->create([
            'nama_desa' => 'Aniwo',
            'nama_kepala_desa' => '',
            'alamat' => 'Lanny Jaya.',
            'telp' => '082112341234'
        ]);

        \App\Models\Desa::factory()->create([
            'nama_desa' => 'Dimba',
            'nama_kepala_desa' => '',
            'alamat' => 'Lanny Jaya.',
            'telp' => '082112341234'
        ]);

        // PELAPORAN

        \App\Models\Pelaporan::factory()->create([
            'tahun' => '2021',
            'cover' => 'COVER',
            'cover_file' => 'cover.pdf',
            'babi' => 'BAB I PENDAHULUAN',
            'babii' => 'BAB II CAPAIAN KINERJA PENYELENGGARAAN PEMERINTAHAN DAERAH',
            'babiii' => 'BAB III CAPAIAN KINERJA PELAKSANAAN TUGAS PEMBANTUAN',
            'babiv' => 'BAB IV PENERAPAN DAN PENCAPAIAN STANDAR PELAYANAN MINIMAL',
            'babv' => 'BAB V PENUTUP',
            'lampiran' => 'BAB I PENDAHULUAN',
        ]);
        

        // IKK

        // ======================
        // PENDIDIKAN
        // ======================

        \App\Models\Ikk::factory()->create([
            'no_ikk' => '1.a.1',
            'urusan' => 'Pendidikan',
            'ikk' => 'Tingkat Partisipasi warga negara usia 5-6 tahun yang berpartisipasi dalam PAUD',
            'rumus' => 'Jumlah anak usia 5 - 6 tahun yang sudah tamat atau sedang belajar disatuan PAUD ----------------------- x 100 % (7.012/10.456) x 100 % = 67,06 Jumlah anak usia 5 – 6 tahun Kabupaten Lanny Jaya',
            'keterangan' => 'Dinas Pendidikan dan Dinas Kependuduk an & Capil',
            'ket_jml1' => 'Jumlah anak usia 5 - 6 tahun yang sudah tamat atau sedang belajar disatuan PAUD ',
            'jml1' => '7012',
            'ket_jml2' => 'Jumlah anak usia 5 – 6 tahun Kabupaten Lanny Jaya',
            'jml2' => '10456',
            'capaian_kinerja' => '',
        ]);

        \App\Models\Ikk::factory()->create([
            'no_ikk' => '1.a.2',
            'urusan' => 'Pendidikan',
            'ikk' => 'Tingkat Partisipasi warga negara usia 7-12 tahun yang berpartisipasi dalam Pendidikan Dasar',
            'rumus' => 'Jumlah anak usia 7-12 tahun yang sudah tamat atau sedang belajar di Sekolah Dasar (SD, MI dan bentuk lain yang sederajat) ---------------------- x 100 % (13.979/15.359) x 100 % = 91,01 Jumlah anak usia 7-12 tahun Kabupaten Lanny Jaya',
            'keterangan' => 'Dinas Pendidikan dan Dinas Kependuduk an & Capil',
            'ket_jml1' => 'Jumlah anak usia 7-12 tahun yang sudah tamat atau sedang belajar di Sekolah Dasar (SD, MI dan bentuk  lain yang sederajat)
            ',
            'jml1' => '13979',
            'ket_jml2' => 'Jumlah anak usia 7-12 tahun Kabupaten Lanny Jaya',
            'jml2' => '15359',
            'capaian_kinerja' => '',
        ]);

        // ======================
        // KESEHATAN
        // ======================

        \App\Models\Ikk::factory()->create([
            'no_ikk' => '1.a.1',
            'urusan' => 'Kesehatan',
            'ikk' => 'Rasio daya tampung RS terhadap jumlah penduduk',
            'rumus' => 'Jumlah daya tampung rumah sakit rujukan ------------------ x 100 % (247/201.835) x 100 % = 0,005 Jumlah Penduduk Kabupaten Lanny Jaya',
            'keterangan' => 'Dinas Kesehatan',

            'ket_jml1' => 'Jumlah daya tampung rumah sakit rujukan',
            'jml1' => '247',
            'ket_jml2' => 'Jumlah Penduduk Kabupaten Lanny Jaya',
            'jml2' => '201875',
            'capaian_kinerja' => '',
        ]);

        \App\Models\Ikk::factory()->create([
            'no_ikk' => '1.a.2',
            'urusan' => 'Kesehatan',
            'ikk' => 'Persentase RS Rujukan tingkat Kabupaten yang terakreditasi',
            'rumus' => 'Jumlah RS Rujukan yang terakreditasi ---------------------------- x 100 % 1/1) x 100 % Jumlah RS di Kabupaten Lanny Jaya',
            'keterangan' => 'Dinas Kesehatan',

            'ket_jml1' => 'Jumlah RS Rujukan yang terakreditasi',
            'jml1' => '1',
            'ket_jml2' => 'Jumlah anak usia 7-12 tahun Kabupaten Lanny Jaya',
            'jml2' => '1',
            'capaian_kinerja' => '',
        ]);


        // ======================
        // PEKERJAAN UMUM
        // ======================

        \App\Models\Ikk::factory()->create([
            'no_ikk' => '1.c.7',
            'urusan' => 'Pekerjaan Umum',
            'ikk' => 'Tingkat Kemantapan Jalan Kabupaten ',

            'rumus' => 'Panjang jalan kabupaten dalam kondisi mantap (baik dan sedang) ------------------------------------------------------------ x 100 % Panjang seluruh jalan kabupaten di daerah tersebut ',
            'keterangan' => 'Dinas Pekerjaan Umum',

            'ket_jml1' => 'Panjang jalan kabupaten dalam kondisi mantap (baik dan sedang)',
            'jml1' => '11.927',
            'ket_jml2' => 'Panjang seluruh jalan kabupaten di daerah tersebut',
            'jml2' => '235',
            'capaian_kinerja' => '',
        ]);

        
        // ======================
        // PENGATURAN
        // ======================

        \App\Models\Pengaturan::factory()->create([
            'judul_situs' => 'SILPPD',
            'deskripsi_situs' => 'Sistem Informasi Laporan Penyelenggaraan Pengelolaan Daerah',
            'logo' => 'assets/images/logo/logo.png',
            'favicon' => 'assets/images/logo/favicon.png',
            'termsconditions' => '',
            'footerinformation' => '2023 © SISTEM INFORMASI LAPORAN PENYELENGGARAAN PEMERINTAH DAERAH, KABUPATEN LANNY JAYA.',
        ]);

    }
}
