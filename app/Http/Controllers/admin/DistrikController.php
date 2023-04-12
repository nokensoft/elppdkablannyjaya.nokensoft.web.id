<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Distrik;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use Alert;
use Storage;
use Illuminate\Support\Facades\DB;

class DistrikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all =DB::select('SELECT * FROM profil_distrik ORDER BY id DESC  ');
        return view('admin.pages.profil.distrik.index', ['all' => $all]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.profil.distrik.tambah');
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
            'nama_distrik' => 'required'
        ],
        [
            'nama_distrik.required' => 'Nama tidak boleh kosong',
        ]);


        $distrik = new Distrik();

        $distrik->nama_distrik         = $request->nama_distrik;
        $distrik->nama_kepala_distrik  = $request->nama_kepala_distrik;
        $distrik->alamat               = $request->alamat;
        $distrik->telp                 = $request->telp;
        $distrik->email                = $request->email;

        $distrik->slug             =  Str::slug($request->nama_lengkap);


        $distrik->save();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('admin.distrik');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Distrik  $distrik
     * @return \Illuminate\Http\Response
     */
    public function show(Distrik $id)
    {
        return view('admin.pages.profil.distrik.detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\disDistriktrik  $distrik
     * @return \Illuminate\Http\Response
     */
    public function edit(Distrik $distrik)
    {
        return view('admin.pages.profil.distrik.ubah');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\distrik  $distrik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Distrik $distrik)
    {
        //
    }

    // DELETE
    public function delete(Distrik $id)
    {
        $data = Distrik::findOrFail($id);
        return view('admin.pages.profil.distrik.delete', compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Distrik  $distrik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Distrik $distrik)
    {
        //
    }
}
