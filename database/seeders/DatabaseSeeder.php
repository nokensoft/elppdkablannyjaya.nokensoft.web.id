<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ikk;
use App\Models\Distrik;
use App\Models\Desa;

class DatabaseSeeder extends Seeder
{
    public function run()
    {

        $this->call(RoleUserSeeder::class);
        $this->call(PerangkatDaerahSeeder::class);

        $this->call([
            IkkSeeder::class,
            DistrikSeeder::class,
            DesaSeeder::class,
            PelaporanSeeder::class,
            DprdSeeder::class,
            PengaturanSeeder::class,
            ProfilDaerahSeeder::class,
        ]);



        // \App\Models\User::factory(10)->create();

        // User::factory(3)->create();
        Ikk::factory(3)->create();
        Distrik::factory(3)->create();
        Desa::factory(3)->create();

    }
}
