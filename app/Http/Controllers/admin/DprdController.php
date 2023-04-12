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

class DprdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all =DB::select('SELECT * FROM profil_dprd ORDER BY id DESC  ');
        return view('admin.pages.profil.dprd.index', ['all' => $all]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.profil.dprd.tambah');
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

        $filename  = 'profil-dprd'.'-'.date('Y-m-d-H-i-s').$request->file('foto')->getClientOriginalName();

        $request->file('foto')->storeAs('public/resource/admin/dprd/',$filename);
        $url = ('storage/resource/admin/dprd/'.$tahun.'/'.$bulan.'/'.$filename);

        $dprd = new Dprd();

        $dprd->nama_instansi    = $request->nama_instansi;
        $dprd->jabatan          = $request->jabatan;
        $dprd->nama_lengkap     = $request->nama_lengkap;
        $dprd->nik              = $request->nik;
        $dprd->alamat           = $request->alamat;
        $dprd->ttl              = $request->ttl;
        $dprd->nama_partai      = $request->nama_partai;
        $dprd->pendidikan       = $request->pendidikan;
        $dprd->foto             = $filename;
        $dprd->slug             =  Str::slug($request->nama_lengkap);


        $dprd->save();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('admin.dprd');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dprd  $dprd
     * @return \Illuminate\Http\Response
     */
    public function show(Dprd $dprd)
    {
        return view('admin.pages.profil.dprd.detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dprd  $dprd
     * @return \Illuminate\Http\Response
     */
    public function edit(Dprd $dprd)
    {
        return view('admin.pages.profil.dprd.ubah');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dprd  $dprd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dprd $dprd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dprd  $dprd
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dprd $dprd)
    {
        //
    }
}
