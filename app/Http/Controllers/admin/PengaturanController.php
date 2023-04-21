<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Pengaturan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use Alert;
use Storage;
use Illuminate\Support\Facades\DB;

class PengaturanController extends Controller
{
    // INDEX
    public function index()
    {
        $data = Pengaturan::whereId(1)->first();
        return view('admin.pages.pengaturan.index', compact('data'));
    }
    
    // EDIT
    public function edit()
    {
        $data = Pengaturan::whereId(1)->first();
        return view('admin.pages.pengaturan.edit', compact('data'));
    }
    
    // UPDATE
    public function update(Request $request, $id)
    {
        $request->validate([
           'judul_situs' => 'required'
       ],
       [
           'judul_situs.required' => 'Judul situs tidak boleh kosong',
       ]);

       $pengaturan = new pengaturan();

       $data['judul_situs']     = $request->judul_situs;
       $data['deskripsi_situs'] = $request->deskripsi_situs;

       Pengaturan::whereId($id)->update($data);

       alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
       return redirect()->route('admin.pengaturan');       
    }
}
