<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PerangkatDaerah;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use Alert;
use Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class PerangkatDaerahController extends Controller
{
    // INDEX
    public function index()
    {
        $datas = PerangkatDaerah::orderBy('nama_organisasi','asc')->paginate(2);
        return view('admin.pages.lppd.perangkatdaerah.index', ['datas' => $datas]);
    }

    // CREATE
    public function create()
    {
        return view('admin.pages.lppd.perangkatdaerah.tambah');
    }

    // STORE
    public function store(Request $request)
    {
        $request->validate([
            'nama_organisasi' => 'required'
        ],
        [
            'nama_organisasi.required' => 'Nama tidak boleh kosong',
        ]);

        // $tahun = date("Y");
        // $bulan = date("M");

        // $filename  = 'profil-perangkatdaerah'.'-'.date('Y-m-d-H-i-s').$request->file('foto')->getClientOriginalName();

        // $request->file('foto')->storeAs('public/resource/admin/perangkatdaerah/'.$tahun.'/'.$bulan,$filename);
        // $namafoto = ('storage/resource/admin/perangkatdaerah/'.$tahun.'/'.$bulan.'/'.$filename);

        $perangkatdaerah = new perangkatdaerah();

        $perangkatdaerah->nama_organisasi   = $request->nama_organisasi;
        $perangkatdaerah->urusan            = $request->urusan;
        $perangkatdaerah->rumpun            = $request->rumpun;
        $perangkatdaerah->tipe_kantor       = $request->tipe_kantor;
        $perangkatdaerah->alamat            = $request->alamat;
        $perangkatdaerah->nama_pimpinan     = $request->nama_pimpinan;
        $perangkatdaerah->jumlah_pegawai    = $request->jumlah_pegawai;
        $perangkatdaerah->jumlah_pegawai    = $request->jumlah_pegawai;
        $perangkatdaerah->status            = $request->status;
        // $perangkatdaerah->foto              = $namafoto;
        $perangkatdaerah->slug              =  Str::slug($request->nama_organisasi);

        $perangkatdaerah->save();

        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('admin.perangkatdaerah');

    }

    // SHOW
    public function show(perangkatdaerah $perangkatdaerah)
    {
        return view('admin.pages.lppd.perangkatdaerah.detail');
    }

    // EDIT
    public function edit($id)
    {
        $data = PerangkatDaerah::whereId($id)->first();
        return view('admin.pages.lppd.perangkatdaerah.edit', compact('data'));
    }

    // UPDATE
    public function update(Request $request,$slug)
    {
         $request->validate([
            'nama_organisasi' => 'required'
        ],
        [
            'nama_organisasi.required' => 'Nama tidak boleh kosong',
        ]);

        $perangkatdaerah = new perangkatdaerah();

        $data['nama_organisasi']    = $request->nama_organisasi;
        $data['urusan']             = $request->urusan;
        $data['rumpun']             = $request->rumpun;
        $data['tipe_kantor']        = $request->tipe_kantor;
        $data['alamat']             = $request->alamat;
        $data['nama_pimpinan']      = $request->nama_pimpinan;
        $data['jumlah_pegawai']     = $request->jumlah_pegawai;
        $data['status']             = $request->status;

        $user = DB::table('profil_perangkatdaerah')
            ->where('id', $slug)
            ->update($data);

        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('admin.perangkatdaerah');

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
        $data = perangkatdaerah::findOrFail($id);

        if($data->foto){
            File::delete($data->foto);
        }

        $data->forceDelete();

        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        return redirect()->route('admin.perangkatdaerah');
    }
}
