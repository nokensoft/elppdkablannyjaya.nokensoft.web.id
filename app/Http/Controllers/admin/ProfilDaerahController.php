<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ProfilDaerah;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use Alert;
use Storage;
use Illuminate\Support\Facades\DB;

class ProfilDaerahController extends Controller
{

    // PEMERINTAH DAERAH
    public function pemerintahdaerah()
    {
        $data = ProfilDaerah::whereId(1)->first();
        return view('admin.pages.profildaerah.pemerintahdaerah.index', compact('data'));
    }

    // EDIT PEMERINTAH DAERAH
    public function edit_pemerintahdaerah()
    {
        $data = ProfilDaerah::whereId(1)->first();
        return view('admin.pages.profildaerah.pemerintahdaerah.edit', compact('data'));
    }

    // UPDATE PEMERINTAH DAERAH
    public function update_pemerintahdaerah(Request $request, $id)
    {
        $request->validate([
           'pemda_namainstansi' => 'required',
           'pemda_lambang' => 'required',
        ],
        [
            'pemda_namainstansi.required' => 'Nama Instansi tidak boleh kosong',
            'pemda_lambang.required' => 'Lambang Pemerintah Daerah tidak boleh kosong',
        ]);

        $pengaturan = new ProfilDaerah();

        $data['pemda_namainstansi']     = $request->pemda_namainstansi;
        $data['pemda_lambang']          = $request->pemda_lambang;
        $data['pemda_peta']             = $request->pemda_peta;

        ProfilDaerah::whereId($id)->update($data);

        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('admin.profildaerah.pemerintahdaerah');   
    }

    // KEPALA DAERAH
    public function kepaladaerah()
    {
        $data = ProfilDaerah::whereId(1)->first();
        return view('admin.pages.profildaerah.kepaladaerah.index', compact('data'));
    }

    // EDIT KEPALA DAERAH
    public function edit_kepaladaerah()
    {
        $data = ProfilDaerah::whereId(1)->first();
        return view('admin.pages.profildaerah.kepaladaerah.edit', compact('data'));
    }

    // WAKIL KEPALA DAERAH
    public function wakilkepaladaerah()
    {
        $data = ProfilDaerah::whereId(1)->first();
        return view('admin.pages.profildaerah.wakilkepaladaerah.index', compact('data'));
    }

    // EDIT WAKIL KEPALA DAERAH
    public function edit_wakilkepaladaerah()
    {
        $data = ProfilDaerah::whereId(1)->first();
        return view('admin.pages.profildaerah.wakilkepaladaerah.edit', compact('data'));
    }

    // SEKRETARIS DAERAH
    public function sekretarisdaerah()
    {
        $data = ProfilDaerah::whereId(1)->first();
        return view('admin.pages.profildaerah.sekretarisdaerah.index', compact('data'));
    }

    // EDIT SEKRETARIS DAERAH
    public function edit_sekretarisdaerah()
    {
        $data = ProfilDaerah::whereId(1)->first();
        return view('admin.pages.profildaerah.sekretarisdaerah.edit', compact('data'));
    }



    
    // EDIT
    public function edit()
    {
        $data = ProfilDaerah::whereId(1)->first();
        return view('admin.pages.profildaerah.ubah', compact('data'));
    }
    
    // UPDATE
    public function update(Request $request,$id)
    {
        $request->validate([
           'judul_situs' => 'required'
       ],
       [
           'judul_situs.required' => 'Judul situs tidak boleh kosong',
       ]);

       $ProfilDaerah = new ProfilDaerah();

    //    $data['judul_situs']     = $request->judul_situs;
    //    $data['deskripsi_situs'] = $request->deskripsi_situs;

       $data = [
            'pemda_namainstansi' => $request->pemda_namainstansi,
            'pemda_lambang' => $request->pemda_lambang,
            'pemda_peta' => $request->pemda_peta,
       ];

       ProfilDaerah::whereId($id)->update($data);

       alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
       return redirect()->route('admin.profildaerah');       
    }
}
