<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class GeospatialController extends Controller
{
    public function getDistricts()
    {
        $districts = DB::select("SELECT distrik_id, nama_distrik, ST_AsGeoJSON(peta_distrik) AS geojson FROM distriks");
        return response()->json($this->createGeoJSON($districts, true));
    }

    public function getVillages(Request $request)
    {
        $districtId = $request->query('districtId');
        $query = "SELECT desa_id, distrik_id, nama_desa, ST_AsGeoJSON(peta_desa) AS geojson FROM desas";
        if ($districtId) {
            $query .= " WHERE distrik_id = ?";
            $villages = DB::select($query, [$districtId]);
        } else {
            $villages = DB::select($query);
        }
        return response()->json($this->createGeoJSON($villages, false));
    }

    private function createGeoJSON($data, $isDistrict = false)
    {
        $features = array_map(function ($item) use ($isDistrict) {
            $properties = $isDistrict
                ? ['distrik_id' => $item->distrik_id, 'name' => $item->nama_distrik]
                : ['desa_id' => $item->desa_id, 'distrik_id' => $item->distrik_id, 'name' => $item->nama_desa];

            return [
                'type' => 'Feature',
                'geometry' => json_decode($item->geojson),
                'properties' => $properties,
            ];
        }, $data);

        return ['type' => 'FeatureCollection', 'features' => $features];
    }
}
