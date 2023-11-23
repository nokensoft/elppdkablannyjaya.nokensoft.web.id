<?php

namespace App\Http\Controllers\Api;

use App\Models\Distrik;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DistrikController extends Controller
{
    public function getsDataDistrik()
    {
        $data = Distrik::with('desa')->get();
        return response()->json([
                'status' => 'Berhasil',
                'data'  => $data
        ], 200);

    }

    public function getDataDistrik($id)
    {
        $data = Distrik::with('desa')->where('id',$id)->first();
        return response()->json([
                'status' => 'Berhasil',
                'data'  => $data
        ], 200);

    }
}
