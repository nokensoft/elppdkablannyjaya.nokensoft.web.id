<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Desa;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use Alert;
use Storage;
use Illuminate\Support\Facades\DB;

class DesaController extends Controller
{
    // INDEX
    public function index()
    {
        $datas = Desa::orderBy('nama_desa','asc')->paginate(2);
        return view('admin.pages.profil.desa.index', [
            'datas' => $datas
        ]);
    }

    // PRINT
    public function print()
    {
        $datas = Desa::orderBy('nama_desa','asc')->get();
        return view('admin.pages.profil.desa.print', [
            'datas' => $datas,
            'page_title' => 'Print - Data Desa'
        ]);
    }

    // CREATE
    public function create()
    {
        return view('admin.pages.profil.desa.tambah');
    }

    // STORE
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama_desa' => 'required'
            ],
            [
                'nama_desa.required' => 'Nama tidak boleh kosong',
            ]
        );


        $desa = new Desa();

        $desa->nama_desa         = $request->nama_desa;
        $desa->nama_kepala_desa  = $request->nama_kepala_desa;
        $desa->alamat            = $request->alamat;
        $desa->telp              = $request->telp;
        $desa->email             = $request->email;

        $desa->slug              =  Str::slug($request->nama_desa);


        $desa->save();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('admin.desa');
    }

    // SHOW
    public function show(Desa $id)
    {
        return view('admin.pages.profil.desa.detail');
    }

    // EDIT
    public function edit($id)
    {
        $data = Desa::where('id', $id)->get();
        return view('admin.pages.profil.desa.ubah', [
            'data' => $data
        ]);
    }

    // UPDATE PROCESS
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'nama_desa' => 'required'
            ],
            [
                'nama_desa.required' => 'Nama tidak boleh kosong',
            ]
        );


        $desa = new Desa();

        $data['nama_desa']          = $request->nama_desa;
        $data['nama_kepala_desa']   = $request->nama_kepala_desa;
        $data['alamat']             = $request->alamat;
        $data['telp']               = $request->telp;
        $data['email']              = $request->email;
        $data['email']              = $request->email;

        $data['slug']               =  Str::slug($request->nama_desa);

        Desa::where('id', $id)->update($data);

        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('admin.desa');
    }


    // DELETE PROCESS
    public function delete($id)
    {
        $data = Desa::where('id', $id)->get();
        return view('admin.pages.profil.desa.delete', [
            'data' => $data
        ]);
    }

    // DESTROY
    public function destroy($id)
    {
        Desa::findOrFail($id)->forceDelete();

        alert()->success('Berhasil', 'Data terhapus!!')->autoclose(1500);
        return redirect()->route('admin.desa');
    }
}
