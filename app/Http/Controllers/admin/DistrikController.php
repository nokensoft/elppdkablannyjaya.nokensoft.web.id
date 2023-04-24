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
use Illuminate\Support\Facades\Validator;

class DistrikController extends Controller
{
    // INDEX
    public function index()
    {
        $datas = Distrik::orderBy('nama_distrik','asc')->paginate(4);
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
        $validator = Validator::make($request->all(),
        [
            'nama_distrik'              => 'required',
            'ibu_kota_distrik'          => 'required',
            'nama_kepala_distrik'       => 'required',
            'alamat'                    => 'required',
            'telp'                      => 'required',
        ],
        [
            'nama_distrik.required'       => 'Nama desa tidak boleh kosong',
            'ibu_kota_distrik.required'   => 'Distrik boleh kosong',
            'nama_kepala_distrik.required'=> 'Nama kepala desa tidak boleh kosong',
            'alamat.required'             => 'Alamat tidak boleh kosong',
            'telp.required'               => 'Telp tidak boleh kosong',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
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

            } catch (\Throwable $th) {
                alert()->error('Gagal', 'Sukses!!')->autoclose(1100);
                return redirect()->back();
            }
        }
    }

    // SHOW
    public function show($id)
    {
        $data = Distrik::where('id',$id)->first();
        return view('admin.pages.profil.distrik.detail',compact('data'));
    }

    // EDIT
    public function edit($id)
    {
        $data = Distrik::where('id',$id)->first();
        return view('admin.pages.profil.distrik.ubah', compact('data'));
    }

    // UPDATE
    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(),
        [
            'nama_distrik'              => 'required',
            'ibu_kota_distrik'          => 'required',
            'nama_kepala_distrik'       => 'required',
            'alamat'                    => 'required',
            'telp'                      => 'required',
        ],
        [
            'nama_distrik.required'       => 'Nama desa tidak boleh kosong',
            'ibu_kota_distrik.required'   => 'Distrik boleh kosong',
            'nama_kepala_distrik.required'=> 'Nama kepala desa tidak boleh kosong',
            'alamat.required'             => 'Alamat tidak boleh kosong',
            'telp.required'               => 'Telp tidak boleh kosong',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $distrik                        = Distrik::find($id);
                $distrik->nama_distrik          = $request->nama_distrik;
                $distrik->ibu_kota_distrik      = $request->ibu_kota_distrik;
                $distrik->nama_kepala_distrik   = $request->nama_kepala_distrik;
                $distrik->alamat                = $request->alamat;
                $distrik->telp                  = $request->telp;
                $distrik->email                 = $request->email;
                $distrik->slug                  =  Str::slug($request->nama_distrik);
                $distrik->update();
                alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
                return redirect()->route('admin.distrik');
            } catch (\Throwable $th) {
                alert()->error('Gagal', 'Sukses!!')->autoclose(1100);
                return redirect()->back();
            }
        }

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
