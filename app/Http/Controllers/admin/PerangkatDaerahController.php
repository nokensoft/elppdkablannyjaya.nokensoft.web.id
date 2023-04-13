<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\perangkatdaerah;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use Alert;
use Storage;
use Illuminate\Support\Facades\DB;

class PerangkatDaerahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all =DB::select('SELECT * FROM profil_perangkatdaerah ORDER BY id DESC  ');
        return view('admin.pages.lppd.perangkatdaerah.index', ['all' => $all]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.lppd.perangkatdaerah.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\perangkatdaerah  $perangkatdaerah
     * @return \Illuminate\Http\Response
     */
    public function show(perangkatdaerah $perangkatdaerah)
    {
        return view('admin.pages.lppd.perangkatdaerah.detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\perangkatdaerah  $perangkatdaerah
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =DB::select("SELECT * FROM profil_perangkatdaerah WHERE id = '$id' ");
        return view('admin.pages.lppd.perangkatdaerah.ubah',['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\perangkatdaerah  $perangkatdaerah
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\perangkatdaerah  $perangkatdaerah
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data =DB::select("SELECT * FROM profil_perangkatdaerah WHERE id = '$id' ");
        return view('admin.pages.lppd.perangkatdaerah.hapus',['data' => $data]);
    }
    public function destroy($id)
    {
        $data = perangkatdaerah::findOrFail($id);

        //dd($data);
        if($data->foto){
            \File::delete($data->foto);
        }

        $data->forceDelete();

        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        return redirect()->route('admin.perangkatdaerah');
    }
}
