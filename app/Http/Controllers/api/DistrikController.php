<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Distrik;

class DistrikController extends Controller
{
    // public function index()
    // {
    //     return Distrik::all();
    // }

    public function index()
    {
        $response = [
            'success'   => true,
            'status'    => 200,
            'data'      => Distrik::all()
        ];

        return response()->json($response);
    }

    // SHOW
    public function show($id)
    {
        return Distrik::find($id);
    }
}
