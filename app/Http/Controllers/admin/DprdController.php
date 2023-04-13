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
            'nama_lengkap' => 'required'
        ],
        [
            'nama_lengkap.required' => 'Nama tidak boleh kosong',
        ]);

        $tahun = date("Y");
        $bulan = date("M");

        $filename  = 'profil-dprd'.'-'.date('Y-m-d-H-i-s').$request->file('foto')->getClientOriginalName();

        $request->file('foto')->storeAs('public/resource/admin/dprd/'.$tahun.'/'.$bulan,$filename);
        $url = ('storage/resource/admin/dprd/'.$tahun.'/'.$bulan.'/'.$filename);

        $dprd = new Dprd();

        $dprd->nama_lengkap     = $request->nama_lengkap;
        $dprd->jabatan          = $request->jabatan;
        $dprd->nik              = $request->nik;
        $dprd->alamat           = $request->alamat;
        $dprd->ttl              = $request->ttl;
        $dprd->nama_partai      = $request->nama_partai;
        $dprd->pendidikan       = $request->pendidikan;
        $dprd->foto             = $url;
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
    public function edit($id)
    {
        $data =DB::select("SELECT * FROM profil_dprd WHERE id = '$id' ");
        return view('admin.pages.profil.dprd.ubah',['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dprd  $dprd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validate([
            'nama_lengkap' => 'required'
        ],
        [
            'nama_lengkap.required' => 'Nama tidak boleh kosong',
        ]);

        $tahun = date("Y");
        $bulan = date("M");

        $dprd = new Dprd();

        if(!empty($request->file('foto'))){
            $filename  = 'profil-dprd'.'-'.date('Y-m-d-H-i-s').$request->file('foto')->getClientOriginalName();
            $request->file('foto')->storeAs('public/resource/admin/dprd/'.$tahun.'/'.$bulan,$filename);
            $url = ('storage/resource/admin/dprd/'.$tahun.'/'.$bulan.'/'.$filename);
            $datalama =DB::select("SELECT * FROM profil_dprd WHERE id = '$id' ");
            if($datalama[0]->foto){
             \File::delete($datalama[0]->foto);
            }
            $data['foto']             = $url;
        };

        $data['nama_lengkap']     = $request->nama_lengkap;
        $data['jabatan']          = $request->jabatan;
        $data['nik']              = $request->nik;
        $data['alamat']           = $request->alamat;
        $data['ttl']              = $request->ttl;
        $data['nama_partai']      = $request->nama_partai;
        $data['pendidikan']       = $request->pendidikan;

        $user = DB::table('profil_dprd')
            ->where('id', $id)
            ->update($data);

        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('admin.dprd');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dprd  $dprd
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data =DB::select("SELECT * FROM profil_dprd WHERE id = '$id' ");
        return view('admin.pages.profil.dprd.delete',['data' => $data]);
    }
    public function destroy($id)
    {
        $data = Dprd::findOrFail($id);

        //dd($data);
        if($data->foto){
            \File::delete($data->foto);
        }

        $data->forceDelete();

        alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
        return redirect()->route('admin.dprd');
    }
}
