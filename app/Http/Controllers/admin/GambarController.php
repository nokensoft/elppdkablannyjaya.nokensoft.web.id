<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PerangkatDaerah;
use App\Models\Gambar;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class GambarController extends Controller
{
    // INDEX
    public function index()
    {
        $datas = Gambar::orderBy('id','asc')->paginate(4);
        return view('admin.pages.gambar.index', compact('datas'));
    }

    // CREATE
    public function create()
    {
        return view('admin.pages.gambar.tambah');
    }

    // STORE

    // DELETE

    // DESTROY

}
