<?php

namespace App\Http\Controllers\Api;

use App\Models\Desa;
use App\Models\Distrik;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Jmikola\GeoJson\Feature\Feature;
use Jmikola\GeoJson\Feature\FeatureCollection;
use Jmikola\GeoJson\Geometry\Geometry as GeoJsonGeometry;

class GetController extends Controller
{
    public function getsDataDistrik()
    {
        $data = Distrik::get();
        return response()->json([
                'status' => 'Berhasil',
                'data'  => $data
        ], 200);

    }

    public function getDataDistrik($id)
    {
        $data = Distrik::where('id',$id)->first();
        return response()->json([
                'status' => 'Berhasil',
                'data'  => $data
        ], 200);

    }


    public function getsDataDesa()
    {
        $data = Desa::get();
        return response()->json([
                'status' => 'Berhasil',
                'data'  => $data
        ], 200);

    }

    public function getDataDesa($id)
    {
        $data = Desa::where('id',$id)->first();
        return response()->json([
                'status' => 'Berhasil',
                'data'  => $data
        ], 200);

    }

    public function index()
    {

        # Ubah Geometry ke Model terkait
        $geometries = Distrik::all();

        $features = $geometries->map(function ($geometry) {
            $geoJsonGeometry = GeoJsonGeometry::jsonUnserialize($geometry->peta_distrik);
            // Menambahkan properties yang diinginkan
            return new Feature($geoJsonGeometry, [
                'id' => $geometry->id,
                'nama_distrik' => $geometry->nama_distrik
            ]);
        });

        $featureCollection = new FeatureCollection($features->all());

        return response()->json($featureCollection);

    }
}
