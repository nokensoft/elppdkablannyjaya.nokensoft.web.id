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

        $this->call([
            IkkSeeder::class,
            DistrikSeeder::class,
        ]);

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
