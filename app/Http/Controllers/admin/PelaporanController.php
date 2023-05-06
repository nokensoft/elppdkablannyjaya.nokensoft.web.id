<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\pelapoarn;
use App\Models\Pelaporan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class PelaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $all =DB::select('SELECT * FROM lppd_pelaporan WHERE tahun = 2021  ');
        $all = Pelaporan::where('tahun','2021')->get();
        return view('admin.pages.lppd.pelaporan.index', ['all' => $all]);
    }

    public function index2021()
    {
        // $all =DB::select('SELECT * FROM lppd_pelaporan WHERE tahun = 2021  ');
        $all = Pelaporan::where('tahun','2021')->get();
        return view('admin.pages.lppd.pelaporan.index2021', ['all' => $all]);
    }

    public function index2021Cover()
    {
        // $all =DB::select('SELECT * FROM lppd_pelaporan WHERE tahun = 2021  ');
        $all = Pelaporan::where('tahun','2021')->get();
        return view('admin.pages.lppd.pelaporan.index2021cover', ['all' => $all]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.profil.pelapoarn.tambah');
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
            'nama_instansi' => 'required'
        ],
        [
            'nama_instansi.required' => 'Nama tidak boleh kosong',
        ]);

        $tahun = date("Y");
        $bulan = date("M");

        $filename  = 'profil-pelapoarn'.'-'.date('Y-m-d-H-i-s').$request->file('foto')->getClientOriginalName();

        $request->file('foto')->storeAs('public/resource/admin/pelapoarn/'.$tahun.'/'.$bulan,$filename);
        $url = ('storage/resource/admin/pelapoarn/'.$tahun.'/'.$bulan.'/'.$filename);

        $pelapoarn = new pelapoarn();

        $pelapoarn->nama_instansi    = $request->nama_instansi;
        $pelapoarn->jabatan          = $request->jabatan;
        $pelapoarn->nama_lengkap     = $request->nama_lengkap;
        $pelapoarn->nik              = $request->nik;
        $pelapoarn->alamat           = $request->alamat;
        $pelapoarn->ttl              = $request->ttl;
        $pelapoarn->nama_partai      = $request->nama_partai;
        $pelapoarn->pendidikan       = $request->pendidikan;
        $pelapoarn->foto             = $url;
        $pelapoarn->slug             =  Str::slug($request->nama_lengkap);


        $pelapoarn->save();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('admin.pelapoarn');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pelapoarn  $pelapoarn
     * @return \Illuminate\Http\Response
     */
    public function show(pelapoarn $pelapoarn)
    {
        return view('admin.pages.profil.pelapoarn.detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pelapoarn  $pelapoarn
     * @return \Illuminate\Http\Response
     */
    public function edit_2021()
    {
        $data =DB::select("SELECT * FROM lppd_pelaporan WHERE tahun = '2021' ");
        return view('admin.pages.profil.pelapoarn.ubah',['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pelapoarn  $pelapoarn
     * @return \Illuminate\Http\Response
     */
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

        $pelapoarn = new pelapoarn();

        if(!empty($request->file('foto'))){
            $filename  = 'profil-pelapoarn'.'-'.date('Y-m-d-H-i-s').$request->file('foto')->getClientOriginalName();
            $request->file('foto')->storeAs('public/resource/admin/pelapoarn/'.$tahun.'/'.$bulan,$filename);
            $url = ('storage/resource/admin/pelapoarn/'.$tahun.'/'.$bulan.'/'.$filename);
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
        return redirect()->route('admin.pelapoarn');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pelapoarn  $pelapoarn
     * @return \Illuminate\Http\Response
     */
    public function delete($pelapoarn)
    {
        $data =DB::select("SELECT * FROM lppd_pelaporan WHERE slug = '$pelapoarn' ");
        return view('admin.pages.profil.pelapoarn.delete',['data' => $data]);
    }
    public function destroy($id)
    {
        $data = pelapoarn::findOrFail($id);

        //dd($data);
        if($data->foto){
            File::delete($data->foto);
        }

        $data->forceDelete();

        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        return redirect()->route('admin.pelapoarn');
    }
}
