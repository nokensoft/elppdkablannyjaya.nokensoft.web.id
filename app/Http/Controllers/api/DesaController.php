<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Desa;

class DesaController extends Controller
{
    // public function index()
    // {
    //     return Desa::all();
    // }

    public function index()
    {
        $response = [
            'success'   => true,
            'status'    => 200,
            'data'      => Desa::all()
        ];

        return response()->json($response);
    }

    // SHOW
    public function show($id)
    {
        return Desa::find($id);
    }
}
