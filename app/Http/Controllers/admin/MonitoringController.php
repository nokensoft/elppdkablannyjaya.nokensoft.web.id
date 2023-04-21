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
    // INDEX
    public function index() {
        return view('admin.pages.lppd.monitoring.index');
    }
}
