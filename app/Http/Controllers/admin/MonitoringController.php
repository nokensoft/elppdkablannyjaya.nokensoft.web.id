<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\pelapoarn;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use Alert;
use Storage;
use Illuminate\Support\Facades\DB;

class MonitoringController extends Controller
{
    // // index
    // public function index()
    // {
    //     $all =DB::select('SELECT * FROM monitoring WHERE tahun = 2021  ');
    //     return view('admin.pages.lppd.pelaporan.index', ['all' => $all]);
    // }

    public function index() {
        return view('admin.pages.lppd.monitoring.index');
    }
}
