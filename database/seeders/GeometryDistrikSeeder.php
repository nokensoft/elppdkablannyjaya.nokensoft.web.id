<?php

namespace Database\Seeders;

use App\Models\Distrik;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GeometryDistrikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $distrik = file_get_contents("public/lanny-jaya/distrik.geo.json");
        // $distrik = File::get("public/lanny-jaya/distrik.geo.json");

        $features = json_decode($distrik, true)->features;

        foreach($features as $feature) {

            error_log('SEEDING : ' . $feature );
        };

            // $feature = $distrik["features"] ?? $distrik["features"];
            // $geometry = json_decode($feature["geometry"]);
            // $properties = $feature["properties"];

            // $kode_kec = $properties["kode_kec"];
            // $nama = $properties["nama"];

            // $query = "
            // INSERT INTO distriks (id, nama_distrik, peta_distrik, created_at)
            // VALUES
            // (%s, %s, ST_GeomFromGeoJSON(%s), NOW())
            // ";

            // $distriks =  DB::select($query);
            //  error_log('SEEDING : ' . $distriks );
            // Distrik::create($);


    }
}
