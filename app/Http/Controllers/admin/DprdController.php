<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Dprd;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use Alert;
use Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class DprdController extends Controller
{
    // INDEX
    public function index()
    {
        $datas = Dprd::orderBy('nama_lengkap','asc')->paginate(4);
        return view('admin.pages.profil.dprd.index', ['datas' => $datas]);
    }

    // PRINT
    public function print()
    {
        $datas = Dprd::orderBy('nama_lengkap','asc')->paginate();
        return view('admin.pages.profil.dprd.print', ['datas' => $datas]);
    }

    // CREATE
    public function create()
    {
        return view('admin.pages.profil.dprd.tambah');
    }

    // STORE PROCESS
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            'nama_lengkap'              => 'required',
            'jabatan'                   => 'required',
            'nik'                       => 'required|unique:dprds,nik',
            'alamat'                    => 'required',
            'ttl'                       => 'required',
            'pendidikan'                => 'required',
            'foto'                      => 'mimes:jpeg,png,jpg',
        ],
        [
            'nama_lengkap.required'      => 'Nom tidak boleh kosong',
            'nik.unique'                 => 'NIK sudah ada',
            'jabatan.required'           => 'Jabatan tidak boleh kosong',
            'alamat.required'            => 'Alamat tidak boleh kosong',
            'ttl.required'               => 'TTL tidak boleh kosong',
            'pendidikan.required'        => 'Pendidikan tidak boleh kosong',
            'foto.mimes'                 => 'Foto harus dengan jenis JPEG,JPG,PNG',
        ]
    );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $dprd = new Dprd();
                $dprd->nama_lengkap     = $request->nama_lengkap;
                $dprd->jabatan          = $request->jabatan;
                $dprd->nik              = $request->nik;
                $dprd->alamat           = $request->alamat;
                $dprd->ttl              = $request->ttl;
                $dprd->nama_partai      = $request->nama_partai;
                $dprd->pendidikan       = $request->pendidikan;
                $dprd->slug             = Str::slug($request->nama_lengkap);

                $posterName = time() . '.' . $request->foto->extension();
                $path = public_path('file/foto/dprd');
                if (!empty($dprd->foto) && file_exists($path . '/' . $dprd->foto)) :
                    unlink($path . '/' . $dprd->foto);
                endif;
                $dprd->foto = $posterName;
                $request->foto->move(public_path('file/foto/dprd'), $posterName);

                $dprd->save();

                alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
                return redirect()->route('admin.dprd');
            } catch (\Throwable $th) {
                alert()->error('Gagal', 'Sukses!!')->autoclose(1100);
                return redirect()->back();
            }
        }
    }

    // SHOW
    public function show($id)
    {
        $data = Dprd::where('id',$id)->first();
        return view('admin.pages.profil.dprd.detail',compact('data'));
    }

    // EDIT
    public function edit($id)
    {
        $data = Dprd::where('id',$id)->first();
        return view('admin.pages.profil.dprd.ubah', compact('data'));
    }

    // UPDATE PROCESS
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->only('nama_lengkap','jabatan','nik','alamat','ttl','pendidikan'),
        [
            'nama_lengkap'              => 'required',
            'jabatan'                   => 'required',
            'nik'                       => 'required|string|unique:dprds,nik,'.$id,
            'alamat'                    => 'required',
            'ttl'                       => 'required',
            'pendidikan'                => 'required',
            'foto'                      => 'mimes:jpg,png,jpeg'

        ],
        [
            'nama_lengkap.required'      => 'Nom tidak boleh kosong',
            'nik.unique'                 => 'NIK sudah ada',
            'jabatan.required'           => 'Jabatan tidak boleh kosong',
            'alamat.required'            => 'Alamat tidak boleh kosong',
            'ttl.required'               => 'TTL tidak boleh kosong',
            'pendidikan.required'        => 'Pendidikan tidak boleh kosong',
            'foto.mimes'                 => 'Foto harus dengan jenis JPEG,JPG,PNG',
        ]
    );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $dprd                   = Dprd::find($id);
                $dprd->nama_lengkap     = $request->nama_lengkap;
                $dprd->jabatan          = $request->jabatan;
                $dprd->nik              = $request->nik;
                $dprd->alamat           = $request->alamat;
                $dprd->ttl              = $request->ttl;
                $dprd->nama_partai      = $request->nama_partai;
                $dprd->pendidikan       = $request->pendidikan;
                $dprd->slug             = Str::slug($request->nama_lengkap);
                if($request->foto){
                    $posterName = time() . '.' . $request->foto->extension();
                    $path = public_path('file/foto/dprd');
                    if (!empty($dprd->foto) && file_exists($path . '/' . $dprd->foto)) :
                        unlink($path . '/' . $dprd->foto);
                    endif;
                    $dprd->foto = $posterName;
                    $request->foto->move(public_path('file/foto/dprd'), $posterName);
                }
                $dprd->update();
                alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
                return redirect()->route('admin.dprd');
            } catch (\Throwable $th) {
                alert()->error('Gagal', 'Sukses!!')->autoclose(1100);
                return redirect()->back();
            }
        }

    }

    // DELETE CONFIRMATION
    public function delete($id)
    {
        $data = Dprd::where('id',$id)->first();
        return view('admin.pages.profil.dprd.delete', compact('data'));
    }

    // DESTORY PROCESS
    public function destroy($id)
    {
        try {
            $dprd = Dprd::find($id);
            $path = public_path('file/foto/dprd/' . $dprd->foto);

            if (file_exists($path)) {
                File::delete($path);
            }
            $dprd->delete();
            alert()->success('Berhasil', 'Terhapus!!')->autoclose(1500);
            return redirect()->route('admin.dprd');
        } catch (\Throwable $e) {
            alert()->error('Gagal', 'Sukses!!')->autoclose(1100);
            return redirect()->back();
        }
    }

}
