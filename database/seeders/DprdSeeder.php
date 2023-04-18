<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DprdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $table = 'profil_dprd';

        DB::table($table)->insert([
            'nama_lengkap'      => 'Tanus Kogoya',
            'jabatan'           => 'Ketua DPR',
            'foto'              => 'assets/images/1.jpg'
        ]);

        DB::table($table)->insert([
            'nama_lengkap'      => 'Wondien Yikwa',
            'jabatan'           => 'Wakil Ketua',
            'foto'              => 'assets/images/2.jpg'
        ]);

    }
}
