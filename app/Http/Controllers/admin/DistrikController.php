<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Distrik;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use Alert;
use Storage;
use Illuminate\Support\Facades\DB;

class DistrikController extends Controller
{
    // INDEX
    public function index()
    {
        $datas = Distrik::orderBy('nama_distrik','asc')->paginate(2);
        return view('admin.pages.profil.distrik.index', compact('datas'));
    }

    // PRINT
    public function print()
    {
        $datas = Distrik::orderBy('nama_distrik','asc')->paginate();
        return view('admin.pages.profil.distrik.print', [
            'datas'         => $datas,
            'page_title'    => 'Print - Data Distrik'
        ]);
    }

    // CREATE
    public function create()
    {
        return view('admin.pages.profil.distrik.tambah');
    }

    // STORE
    public function store(Request $request)
    {
        $request->validate([
            'nama_distrik'              => 'required'
        ],
        [
            'nama_distrik.required'     => 'Nama tidak boleh kosong',
        ]);

        $distrik = new Distrik();

        $distrik->nama_distrik          = $request->nama_distrik;
        $distrik->ibu_kota_distrik      = $request->ibu_kota_distrik;
        $distrik->nama_kepala_distrik   = $request->nama_kepala_distrik;
        $distrik->alamat                = $request->alamat;
        $distrik->telp                  = $request->telp;
        $distrik->email                 = $request->email;

        $distrik->slug                  =  Str::slug($request->nama_distrik);

        $distrik->save();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('admin.distrik');

    }

    // SHOW
    public function show(Distrik $id)
    {
        return view('admin.pages.profil.distrik.detail');
    }

    // EDIT
    public function edit($id)
    {
        $data = Distrik::whereId($id)->first();
        return view('admin.pages.profil.distrik.ubah', compact('data'));
    }

    // UPDATE
    public function update(Request $request,$id)
    {
        $request->validate([
            'nama_distrik' => 'required'
        ],
        [
            'nama_distrik.required' => 'Nama tidak boleh kosong',
        ]);

        $distrik = new Distrik();

        $data['nama_distrik']           = $request->nama_distrik;
        $data['ibu_kota_distrik']       = $request->ibu_kota_distrik;
        $data['nama_kepala_distrik']    = $request->nama_kepala_distrik;
        $data['alamat']                 = $request->alamat;
        $data['telp']                   = $request->telp;
        $data['email']                  = $request->email;
        $data['email']                  = $request->email;

        $data['slug']                   = Str::slug($request->nama_distrik);

        Distrik::where('id', $id)->update($data);

        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('admin.distrik');

    }

    // DELETE PROCESS
    public function delete($id)
    {
        $data = Distrik::whereId($id)->first();
        return view('admin.pages.profil.distrik.delete', compact('data'));
    }

    public function destroy($id)
    {
        Distrik::findOrFail($id)->forceDelete();

        alert()->success('Berhasil', 'Data terhapus!!')->autoclose(1500);
        return redirect()->route('admin.distrik');
    }
}
