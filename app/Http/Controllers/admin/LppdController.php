<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lppd;
use Illuminate\Http\Request;

class LppdController extends Controller
{
    // MONITORING
    public function monitoring()
    {
        return view('admin.pages.lppd.monitoring');
    }
    
    // PELAPORAN
    public function pelaporan()
    {
        return view('admin.pages.lppd.pelaporan');
    }

    // PERANGKAT DAERAH
    public function perangkatdaerah()
    {
        return view('admin.pages.lppd.perangkatdaerah');
    }
}
