<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PerangkatDaerah;
use App\Models\Images;

class ImageController extends Controller
{
    // INDEX
    public function index()
    {
        $datas = Images::orderBy('id','asc')->paginate(4);
        return view('admin.pages.images.index', compact('datas'));
    }

}
