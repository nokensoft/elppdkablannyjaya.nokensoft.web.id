<?php

namespace Database\Seeders;

use App\Models\Desa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GeometryDesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membaca file JSON
        $json = file_get_contents('public/lanny-jaya/kampung.geo.json');
        $data = json_decode($json, true);

        // Iterasi setiap 'feature' dalam file JSON
        foreach ($data['features'] as $feature) {
            $geometry = json_encode($feature['geometry']); // Konversi geometry ke JSON string


            $kode_kec = $feature['kode_kec'];
            $nama = $feature['nama'];

            // Menyimpan data ke database
            DB::table('desas')->insert([
                'distrik_id' => $kode_kec,
                'nama_desa' => $nama,
                'peta_desa' => DB::raw("ST_GeomFromGeoJSON('$geometry')"),
                'created_at' => now(),
            ]);

            error_log('SEEDING VILLAGE: ' . $nama);
        }
    }

}
