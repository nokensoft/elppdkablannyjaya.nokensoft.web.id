<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Pelaporan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class PelaporanController extends Controller
{
    // INDEX
    public function index()
    {
        $all = Pelaporan::where('tahun','2023')->get();
        return view('admin.pages.lppd.pelaporan.index', ['all' => $all]);
    }

    public function index2023()
    {
        $all = Pelaporan::where('tahun','2023')->get();
        return view('admin.pages.lppd.pelaporan.index2023', ['all' => $all]);
    }

    public function index2023Cover()
    {
        $all = Pelaporan::where('tahun','2023')->get();
        return view('admin.pages.lppd.pelaporan.index2023cover', ['all' => $all]);
    }

    // CREATE
    public function create()
    {
        return view('admin.pages.profil.Pelaporan.tambah');
    }

    // STORE
    public function store(Request $request)
    {
        $request->validate([
            'nama_instansi' => 'required'
        ],
        [
            'nama_instansi.required' => 'Nama tidak boleh kosong',
        ]);

        $tahun = date("Y");
        $bulan = date("M");

        $filename  = 'profil-Pelaporan'.'-'.date('Y-m-d-H-i-s').$request->file('foto')->getClientOriginalName();

        $request->file('foto')->storeAs('public/resource/admin/Pelaporan/'.$tahun.'/'.$bulan,$filename);
        $url = ('storage/resource/admin/Pelaporan/'.$tahun.'/'.$bulan.'/'.$filename);

        $Pelaporan = new Pelaporan();

        $Pelaporan->nama_instansi    = $request->nama_instansi;
        $Pelaporan->jabatan          = $request->jabatan;
        $Pelaporan->nama_lengkap     = $request->nama_lengkap;
        $Pelaporan->nik              = $request->nik;
        $Pelaporan->alamat           = $request->alamat;
        $Pelaporan->ttl              = $request->ttl;
        $Pelaporan->nama_partai      = $request->nama_partai;
        $Pelaporan->pendidikan       = $request->pendidikan;
        $Pelaporan->foto             = $url;
        $Pelaporan->slug             =  Str::slug($request->nama_lengkap);


        $Pelaporan->save();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('admin.Pelaporan');

    }

    // SHOW
    public function show(Pelaporan $Pelaporan)
    {
        return view('admin.pages.profil.Pelaporan.detail');
    }

    // EDIT
    public function edit_2023()
    {
        $data =DB::select("SELECT * FROM lppd_pelaporan WHERE tahun = '2023' ");
        return view('admin.pages.profil.Pelaporan.ubah',['data' => $data]);
    }

    // UPDATE
    public function update(Request $request,$slug)
    {
         $request->validate([
            'nama_instansi' => 'required'
        ],
        [
            'nama_instansi.required' => 'Nama tidak boleh kosong',
        ]);

        $tahun = date("Y");
        $bulan = date("M");

        $Pelaporan = new Pelaporan();

        if(!empty($request->file('foto'))){
            $filename  = 'profil-Pelaporan'.'-'.date('Y-m-d-H-i-s').$request->file('foto')->getClientOriginalName();
            $request->file('foto')->storeAs('public/resource/admin/Pelaporan/'.$tahun.'/'.$bulan,$filename);
            $url = ('storage/resource/admin/Pelaporan/'.$tahun.'/'.$bulan.'/'.$filename);
            $datalama =DB::select("SELECT * FROM lppd_pelaporan WHERE id = '$slug' ");
            if($datalama[0]->foto){
             \File::delete($datalama[0]->foto);
            }
            $data['foto']             = $url;
        };

        $data['nama_instansi']    = $request->nama_instansi;
        $data['jabatan']          = $request->jabatan;
        $data['nama_lengkap']     = $request->nama_lengkap;
        $data['nik']              = $request->nik;
        $data['alamat']           = $request->alamat;
        $data['ttl']              = $request->ttl;
        $data['nama_partai']      = $request->nama_partai;
        $data['pendidikan']       = $request->pendidikan;

        $user = DB::table('lppd_pelaporan')
            ->where('id', $slug)
            ->update($data);

        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('admin.Pelaporan');

    }

    // DELETE
    public function delete($Pelaporan)
    {
        $data =DB::select("SELECT * FROM lppd_pelaporan WHERE slug = '$Pelaporan' ");
        return view('admin.pages.profil.Pelaporan.delete',['data' => $data]);
    }
    public function destroy($id)
    {
        $data = Pelaporan::findOrFail($id);

        //dd($data);
        if($data->foto){
            File::delete($data->foto);
        }

        $data->forceDelete();

        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        return redirect()->route('admin.Pelaporan');
    }
}
