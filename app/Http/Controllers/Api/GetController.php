<?php

namespace App\Http\Controllers\Api;

use App\Models\Desa;
use App\Models\Distrik;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
}
