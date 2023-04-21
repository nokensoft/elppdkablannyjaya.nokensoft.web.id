<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Ikk;
use App\Models\Distrik;
use App\Models\Desa;
use App\Models\PerangkatDaerah;
use App\Models\Pelaporan;
use App\Models\Dprd;
use App\Models\Pengaturan;

class DatabaseSeeder extends Seeder
{
    public function run()
    {

        $this->call([
            RoleUserSeeder::class,
            IkkSeeder::class,
            DistrikSeeder::class,
            DesaSeeder::class,
            PerangkatDaerahSeeder::class,
            PelaporanSeeder::class,
            DprdSeeder::class,
            PengaturanSeeder::class,
            ProfilDaerahSeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();

        User::factory(3)->create();
        Ikk::factory(3)->create();
        Distrik::factory(3)->create();
        Desa::factory(3)->create();

    }
}
