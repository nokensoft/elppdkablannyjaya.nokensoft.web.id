<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Dprd;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use Alert;
use App\Models\Desa;
use App\Models\Distrik;
use App\Models\Pengaturan;
use Storage;
use Illuminate\Support\Facades\DB;

class BerandaController extends Controller
{

    public function index()
    {
        $dprd = Dprd::all();
        $distrik = Distrik::all();
        $desa = Desa::all();
        $pdata = Pengaturan::get();
        // var_dump($totalDprd);

        return view('admin.pages.beranda', [
            'totalDprd' => count($dprd),
            'totalDistrik' => count($distrik),
            'totalDesa' => count($desa),
            'totalPenduduk' => 'On Progress',
            'pdata' => $pdata
        ]
        );


        // $all =DB::select('SELECT * FROM profil_dprd ORDER BY id DESC  ');
        // $totalDprd = count($all);
        // return view('admin.pages.beranda', compact('totalDprd')
        // );

    }




}
