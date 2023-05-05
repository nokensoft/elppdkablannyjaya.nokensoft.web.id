<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PerangkatDaerah;
use App\Models\Images;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ImageController extends Controller
{
    // INDEX
    public function index()
    {
        $datas = Images::orderBy('id','asc')->paginate(4);
        return view('admin.pages.images.index', compact('datas'));
    }

    // CREATE
    public function create()
    {
        return view('admin.pages.images.tambah');
    }

    // STORE

    // DELETE

    // DESTROY

}
