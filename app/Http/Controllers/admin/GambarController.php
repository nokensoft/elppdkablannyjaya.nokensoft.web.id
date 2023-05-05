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
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_file' => 'required',
        ],
        [
            'nama_file.required' => 'Judul gambar tidak boleh kosong',
        ]

    );

        $input = $request->all();

        dd($request->all());

        Gambar::create($input);
        
        // $user->assignRole($request->input('roles'));

        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('admin.gambar');
    }

    // DELETE

    // DESTROY

}
