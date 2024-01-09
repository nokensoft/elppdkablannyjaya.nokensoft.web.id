<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class GeospatialController extends Controller
{

    // GET DISTRIK
    public function getDistricts()
    {
        $query = "
        SELECT d.id, d.nama_distrik, ST_AsGeoJSON(d.peta_distrik) AS geojson, SUM(de.jumlah_penduduk) AS jumlah_penduduk
        FROM distriks d
        LEFT JOIN desas de ON d.id = de.distrik_id
        GROUP BY d.id, d.nama_distrik, d.peta_distrik
    ";
        $districts = DB::select($query);
        return response()->json($this->createGeoJSON($districts, true));

    }

    // GET DESA
    public function getVillages(Request $request)
    {
        $districtId = $request->query('districtId');
        $query = "SELECT id, distrik_id, nama_desa, jumlah_penduduk, ST_AsGeoJSON(peta_desa) AS geojson FROM desas";
        if ($districtId) {
            $query .= " WHERE distrik_id = ?";
            $villages = DB::select($query, [$districtId]);
        } else {
            $villages = DB::select($query);
        }
        return response()->json($this->createGeoJSON($villages, false));
    }

    // CREATING GEO JSON
    private function createGeoJSON($data, $isDistrict = false)
    {
        $features = array_map(function ($item) use ($isDistrict) {
            $properties = [
                'name' => $item->nama_distrik ?? $item->nama_desa,
            ];

            if ($isDistrict) {
                $properties['id'] = $item->id;
                $properties['jumlah_penduduk'] = 0;
            } else {
                $properties['id'] = $item->id;
                $properties['distrik_id'] = $item->distrik_id;
                $properties['jumlah_penduduk'] = 0;
            }

            return [
                'type' => 'Feature',
                'geometry' => json_decode($item->geojson),
                'properties' => $properties,
            ];
        }, $data);

        return ['type' => 'FeatureCollection', 'features' => $features];
    }

    // public function getDistricts()
    // {
    //     $query = "
    //         SELECT d.distrik_id, d.nama_distrik, ST_AsGeoJSON(d.peta_distrik) AS geojson, SUM(de.jumlah_penduduk) AS total_penduduk
    //         FROM distriks d
    //         LEFT JOIN desas de ON d.distrik_id = de.distrik_id
    //         GROUP BY d.distrik_id, d.nama_distrik, d.peta_distrik
    //     ";
    //     $districts = DB::select($query);
    //     return response()->json($this->createGeoJSON($districts, true));
    // }

    // public function getVillages(Request $request)
    // {
    //     $districtId = $request->query('districtId');
    //     $query = "SELECT id, distrik_id, nama_desa,nama_kepala_desa,jumlah_penduduk, ST_AsGeoJSON(peta_desa) AS geojson FROM desas";
    //     if ($districtId) {
    //         $query .= " WHERE distrik_id = ?";
    //         $villages = DB::select($query, [$districtId]);
    //     } else {
    //         $villages = DB::select($query);
    //     }
    //     return response()->json($this->createGeoJSON($villages, false));
    // }

    // private function createGeoJSON($data, $isDistrict = false)
    // {
    //     $features = array_map(function ($item) use ($isDistrict) {
    //         $properties = $isDistrict
    //             ?
    //             [
    //                 'distrik_id' => $item->distrik_id,
    //                 'name' => $item->nama_distrik,
    //                 'nama_kepala_distrik' => $item->nama_kepala_distrik
    //             ]
    //             :
    //             [
    //                 'id' => $item->id,
    //                 'distrik_id' => $item->distrik_id,
    //                 'name' => $item->nama_desa,
    //                 'nama_kepala_desa' => $item->nama_kepala_desa,
    //                 'jumlah_penduduk' => $item->jumlah_penduduk,
    //             ];

    //         return [
    //             'type' => 'Feature',
    //             'geometry' => json_decode($item->geojson),
    //             'properties' => $properties,
    //         ];
    //     }, $data);

    //     return ['type' => 'FeatureCollection', 'features' => $features];
    // }

    // public function getDistricts()
    // {
    //     $districts = DB::select("SELECT distrik_id, nama_distrik,nama_kepala_distrik, ST_AsGeoJSON(peta_distrik) AS geojson FROM distriks");
    //     return response()->json($this->createGeoJSON($districts, true));
    // }

    // public function getVillages(Request $request)
    // {
    //     $districtId = $request->query('districtId');
    //     $query = "SELECT desa_id, distrik_id, nama_desa,nama_kepala_desa,jumlah_penduduk, ST_AsGeoJSON(peta_desa) AS geojson FROM desas";
    //     if ($districtId) {
    //         $query .= " WHERE distrik_id = ?";
    //         $villages = DB::select($query, [$districtId]);
    //     } else {
    //         $villages = DB::select($query);
    //     }
    //     return response()->json($this->createGeoJSON($villages, false));
    // }



}
