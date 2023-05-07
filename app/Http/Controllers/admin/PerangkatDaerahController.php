<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PerangkatDaerah;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class PerangkatDaerahController extends Controller
{
    // INDEX
    public function index()
    {
        $datas = User::whereHas('roles',function($q){
            $q->where('name','opd');
        })
        ->orderBy('id','Desc')->paginate(4);

        return view('admin.pages.lppd.perangkatdaerah.index', compact('datas'));
    }

    // PRINT
    public function print()
    {
        $datas = User::whereHas('roles',function($q){
            $q->where('name','opd');
        })
        ->orderBy('id','Desc')->get();
        
        return view('admin.pages.lppd.perangkatdaerah.print', compact('datas'));
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
            'email'                             => 'required|email|unique:users,email',
            'password'                          => 'required|same:confirm-password',
            'nama_organisasi'                   => 'required|unique:perangkat_daerahs',
            'urusan'                            => 'required',

        ],
        [
            'email.required'                    => 'Email pengguna tidak boleh kosong',
            'email.unique'                      => 'Email ini telah digunakan',
            'password.required'                 => 'Nama pengguna tidak boleh kosong',
            'urusan.required'                   => 'Urusan tidak boleh kosong',

            'nama_organisasi.required'          => 'Nama instansi/Organisasi tidak boleh kosong',
            'nama_organisasi.unique'            => 'Nama instansi/Organisasi sudah ada',

        ]
    );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $akun                               = new User();
                $akun->name                         = $request->nama_organisasi;
                $akun->email                        = $request->email;
                $akun->password                     = bcrypt($request->password);
                $akun->slug                         = Str::slug($request->name);

                $akun->save();
                $akun->assignRole(2);

                $perangkatdaerah                    = new perangkatdaerah();
                $perangkatdaerah->user_id           = $akun->id;
                $perangkatdaerah->nama_organisasi   = $request->nama_organisasi;
                $perangkatdaerah->urusan            = $request->urusan;
                $perangkatdaerah->tipe_kantor       = $request->tipe_kantor;
                $perangkatdaerah->alamat            = $request->alamat;
                $perangkatdaerah->nama_pimpinan     = $request->nama_pimpinan;
                $perangkatdaerah->jumlah_pegawai    = $request->jumlah_pegawai;
                $perangkatdaerah->status            = $request->status;
                $perangkatdaerah->foto_gedung       = $request->foto_gedung;
                $perangkatdaerah->slug              =  Str::slug($request->nama_organisasi);


                $akun->perangkatdaerahs()->save($perangkatdaerah);

                alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
                return redirect()->route('admin.perangkatdaerah');

            } catch (\Throwable $th) {
                dd($th);
                alert()->error('Gagal', 'Gagal!!')->autoclose(1100);
                return redirect()->back();
            }
        }

    }

    // SHOW
    public function show($id)
    {
        $data = User::where('id',$id)->first();
        return view('admin.pages.lppd.perangkatdaerah.show',compact('data'));
    }

    // EDIT
    public function edit($id)
    {
        $data       = User::where('id',$id)->first();
        return view('admin.pages.lppd.perangkatdaerah.edit', compact('data'));
    }

    // UPDATE
    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->only('nama_organisasi','foto_gedung','email'),
        [
            'nama_organisasi'                   => 'required',
            'foto_gedung'                       => 'mimes:jpeg,png,jpg',
            'email'                             => 'required|email|unique:users,email,'.$id,
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

            $akun                               = User::find($id);
            $akun->name                         = $request->nama_organisasi;
            $akun->email                        = $request->email;
            if ($request->password) {
                $akun->password = Hash::make($request->password);
            }

            $akun->slug                         = Str::slug($request->name);

            $akun->update();
            $akun->assignRole(2);


            $perangkatdaerah                    =  $akun->perangkatdaerah ?? new PerangkatDaerah();

            $perangkatdaerah->nama_organisasi   = $request->nama_organisasi;
            $perangkatdaerah->urusan            = $request->urusan;
            $perangkatdaerah->tipe_kantor       = $request->tipe_kantor;
            $perangkatdaerah->alamat            = $request->alamat;
            $perangkatdaerah->nama_pimpinan     = $request->nama_pimpinan;
            $perangkatdaerah->jumlah_pegawai    = $request->jumlah_pegawai;
            $perangkatdaerah->status            = $request->status;
            $perangkatdaerah->user_id           = $request->user_id;
            $perangkatdaerah->slug              =  Str::slug($request->nama_organisasi);



            $akun->perangkatdaerahs()->save($perangkatdaerah);

            alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
            return redirect()->route('admin.perangkatdaerah');

        } catch (\Throwable $th) {
            dd($th);
            alert()->error('Gagal', 'Gagal!!')->autoclose(1100);
            return redirect()->back();

        }
    }
    }

    // DELETE
    public function delete($id)
    {
        $data = User::where('id',$id)->first();
        return view('admin.pages.lppd.perangkatdaerah.hapus', compact('data'));
    }

    // DESTROY
    public function destroy($id)
    {
        try {
            $user = User::find($id);

            $user->perangkatdaerahs()->delete();
            $user->delete();
            alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
            return redirect()->route('admin.perangkatdaerah');

        } catch (\Throwable $e) {
            alert()->error('Gagal', 'Gagal!!')->autoclose(1100);
            return redirect()->back();
        }
    }
}
