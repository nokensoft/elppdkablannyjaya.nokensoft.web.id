<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Dprd;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use Alert;
use Storage;
use Illuminate\Support\Facades\DB;

class BerandaController extends Controller
{
    
    public function index()
    {
        $dprd =DB::select('SELECT * FROM profil_dprd');
        $distrik =DB::select('SELECT * FROM profil_distrik');
        $desa =DB::select('SELECT * FROM profil_desa');
        // var_dump($totalDprd);

        return view('admin.pages.beranda', [
            'totalDprd' => count($dprd),
            'totalDistrik' => count($distrik),
            'totalDesa' => count($desa),
            'totalPenduduk' => 'On Progress'
        ]
        );


        // $all =DB::select('SELECT * FROM profil_dprd ORDER BY id DESC  ');
        // $totalDprd = count($all);
        // return view('admin.pages.beranda', compact('totalDprd') 
        // );

    }


    

}
