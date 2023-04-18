<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ikk;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use Alert;
use Storage;
use Illuminate\Support\Facades\DB;

class IkkController extends Controller
{
    public function index()
    {
        // $all = DB::select('SELECT * FROM ikk ORDER BY id DESC');

        $all = DB::table('ikk')->orderBy('no_ikk', 'asc')->get();
        return view('admin.pages.ikk.makro.index', ['all' => $all]);
    }

    public function pendidikan()
    {
        // $all = DB::select('SELECT * FROM ikk WHERE urusan="pendidikan" ORDER BY id DESC');

        $all = DB::table('ikk')->get()->where('urusan', 'pendidikan');
        return view('admin.pages.ikk.makro.index', ['all' => $all, 'bidang_ikk' => 'pendidikan']);
    }

    public function kesehatan()
    {
        $all = DB::select('SELECT * FROM ikk WHERE urusan="kesehatan" ORDER BY id DESC');
        return view('admin.pages.ikk.makro.index', ['all' => $all, 'bidang_ikk' => 'kesehatan']);
    }

    public function pekerjaanumum()
    {
        $all = DB::select('SELECT * FROM ikk WHERE urusan="pekerjaanumum" ORDER BY id DESC  ');
        return view('admin.pages.ikk.makro.index', ['all' => $all, 'bidang_ikk' => 'pekerjaanumum']);
    }

    public function print()
    {
        $all = DB::select('SELECT * FROM ikk ORDER BY id DESC  ');
        return view('admin.pages.ikk.makro.print', ['all' => $all]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.ikk.makro.tambah');
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
            'no_ikk' => 'required'
        ],
        [
            'no_ikk.required' => 'Nomor IKK tidak boleh kosong',
        ]);


        $ikk = new ikk();

        $ikk->no_ikk        = $request->no_ikk;
        $ikk->urusan        = $request->urusan;
        $ikk->ikk           = $request->ikk;
        $ikk->rumus         = $request->rumus;
        // $ikk->ket_jml1   = $request->ket_jml1;
        $ikk->jml1          = $request->jml1;
        // $ikk->ket_jml2   = $request->ket_jml2;
        $ikk->jml2          = $request->jml2;
        $ikk->capaian_kinerja    = $request->capaian_kinerja;
        $ikk->keterangan    = $request->keterangan;

        // $ikk->slug       =  Str::slug($request->nama_ikk);

        $ikk->save();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('admin.ikk');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ikk  $ikk
     * @return \Illuminate\Http\Response
     */
    public function show(ikk $id)
    {
        return view('admin.pages.profil.ikk.detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\disikktrik  $ikk
     * @return \Illuminate\Http\Response
     */

     public function edit($id)
     {
         $data =DB::select("SELECT * FROM ikk WHERE id = '$id' ");
         return view('admin.pages.ikk.makro.ubah',['data' => $data]);
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ikk  $ikk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'no_ikk' => 'required'
        ],
        [
            'no_ikk.required' => 'Nomor IKK tidak boleh kosong',
        ]);


        $ikk = new ikk();

        $data['no_ikk']    = $request->no_ikk;
        // $data['urusan']    = $request->urusan;
        $data['ikk']    = $request->ikk;
        $data['rumus']    = $request->rumus;
        // $data['ket_jml1']    = $request->ket_jml1;
        $data['jml1']    = $request->jml1;
        // $data['ket_jml2']    = $request->ket_jml2;
        $data['jml2']    = $request->jml2;
        $data['capaian_kinerja']    = $request->capaian_kinerja;
        $data['keterangan']    = $request->keterangan;

        // $data['slug']                 =  Str::slug($request->nama_ikk);

        $user = DB::table('ikk')
            ->where('id', $id)
            ->update($data);

        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('admin.ikk');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ikk  $ikk
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data =DB::select("SELECT * FROM ikk WHERE id = '$id' ");
        return view('admin.pages.ikk.makro.delete',['data' => $data]);
    }

    public function destroy($id)
    {
        $data = ikk::findOrFail($id);

        //dd($data);
        // if($data->foto){
        //     \File::delete($data->foto);
        // }

        $data->forceDelete();

        alert()->success('Berhasil', 'Data terhapus!!')->autoclose(1500);
        return redirect()->route('admin.ikk');
    }
}
