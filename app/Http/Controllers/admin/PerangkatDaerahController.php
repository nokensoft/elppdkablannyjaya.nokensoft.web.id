<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PerangkatDaerah;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Role;

class PerangkatDaerahController extends Controller
{
    // INDEX
    public function index()
    {
        $datas = PerangkatDaerah::orderBy('id','Desc')->paginate(3);
        return view('admin.pages.lppd.perangkatdaerah.index', compact('datas'));
    }

    // CREATE
    public function create()
    {
        return view('admin.pages.lppd.perangkatdaerah.tambah');
    }

    // STORE
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            // 'name'                              => 'required',
            'email'                             => 'required|email|unique:users,email',
            'password'                          => 'required|same:confirm-password',
            // 'role_id'                           => 'required',

            'nama_organisasi'                   => 'required|unique:perangkat_daerahs'
        ],
        [
            // 'name.required'                     => 'Nama pengguna tidak boleh kosong',
            'email.required'                    => 'Email pengguna tidak boleh kosong',
            'email.unique'                      => 'Email ini telah digunakan',
            'password.required'                 => 'Nama pengguna tidak boleh kosong',

            'nama_organisasi.required'          => 'Nama instansi/Organisasi tidak boleh kosong',
            'nama_organisasi.unique'            => 'Nama instansi/Organisasi sudah ada',
        ]
    );

    if ($validator->fails()) {

        return redirect()->back()->withInput($request->all())->withErrors($validator);

    } else {
        try {
            $akun = new User();

            $akun->name                         = $request->nama_organisasi;
            $akun->email                        = $request->email;
            $akun->password                     = bcrypt($request->password);
            $akun->slug                         = Str::slug($request->name);

            $akun->save();
            $akun->assignRole(2);

            $perangkatdaerah = new perangkatdaerah();

            $perangkatdaerah->nama_organisasi   = $request->nama_organisasi;
            $perangkatdaerah->urusan            = $request->urusan;
            $perangkatdaerah->rumpun            = $request->rumpun;
            $perangkatdaerah->tipe_kantor       = $request->tipe_kantor;
            $perangkatdaerah->alamat            = $request->alamat;
            $perangkatdaerah->nama_pimpinan     = $request->nama_pimpinan;
            $perangkatdaerah->jumlah_pegawai    = $request->jumlah_pegawai;
            $perangkatdaerah->status            = $request->status;
            // $perangkatdaerah->foto              = $namafoto;
            $perangkatdaerah->slug              =  Str::slug($request->nama_organisasi);

            $akun->perangkatdaerahs()->save($perangkatdaerah);

            alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
            return redirect()->route('admin.perangkatdaerah');

        } catch (\Throwable $th) {
            Alert::toast('Gagal', 'error');
            return redirect()->back();
        }
    }



    }

    // SHOW
    public function show($id)
    {
        $data = PerangkatDaerah::where('id',$id)->first();
        return view('admin.pages.lppd.perangkatdaerah.show',compact('data'));
    }

    // EDIT
    public function edit($id)
    {
        $data       = PerangkatDaerah::whereId($id)->first();
        $roles      = Role::all();

        return view('admin.pages.lppd.perangkatdaerah.edit', compact('data','roles'));
    }

    // UPDATE
    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(),
        [
            'nama_organisasi'                   => 'required|unique:perangkat_daerahs,nama_organisasi,'.$id,
        ],
        [
            'nama_organisasi.required'          => 'Nama instansi/Organisasi tidak boleh kosong',
            'nama_organisasi.unique'            => 'Nama instansi/Organisasi sudah ada',
        ]
    );

    if ($validator->fails()) {
        return redirect()->back()->withInput($request->all())->withErrors($validator);
    } else{
        try {

            $perangkatdaerah                    =  PerangkatDaerah::find($id);

            $perangkatdaerah->nama_organisasi   = $request->nama_organisasi;
            $perangkatdaerah->urusan            = $request->urusan;
            $perangkatdaerah->rumpun            = $request->rumpun;
            $perangkatdaerah->tipe_kantor       = $request->tipe_kantor;
            $perangkatdaerah->alamat            = $request->alamat;
            $perangkatdaerah->nama_pimpinan     = $request->nama_pimpinan;
            $perangkatdaerah->jumlah_pegawai    = $request->jumlah_pegawai;
            $perangkatdaerah->status            = $request->status;
            // $perangkatdaerah->foto              = $namafoto;
            $perangkatdaerah->slug              =  Str::slug($request->nama_organisasi);

            $perangkatdaerah->update();
            alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
            return redirect()->route('admin.perangkatdaerah');

        } catch (\Throwable $th) {

            dd($th);
            Alert::toast('Gagal', 'error');
            return redirect()->back();

        }
    }
    }

    // DELETE
    public function delete($id)
    {
        $data = PerangkatDaerah::whereId($id)->first();
        return view('admin.pages.lppd.perangkatdaerah.hapus', compact('data'));
    }

    // DESTROY
    public function destroy($id)
    {
        $data = PerangkatDaerah::findOrFail($id);

        if($data->foto){
            File::delete($data->foto);
        }

        $data->forceDelete();

        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        return redirect()->route('admin.perangkatdaerah');
    }
}
