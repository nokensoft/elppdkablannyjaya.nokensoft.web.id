<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\pengaturan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use Alert;
use Storage;
use Illuminate\Support\Facades\DB;

class PengaturanController extends Controller
{
    public function index()
    {
        $data =DB::select("SELECT * FROM pengaturan WHERE id = '1' ");
        return view('admin.pages.pengaturan.index',['data' => $data]);
    }
    
    public function edit()
    {
        $data =DB::select("SELECT * FROM pengaturan WHERE id = '1' ");
        return view('admin.pages.pengaturan.ubah',['data' => $data]);
    }
    
    public function update(Request $request,$id)
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
    //    $data['logo']            = $request->logo;
    //    $data['favicon']         = $request->favicon;

       $user = DB::table('pengaturan')
           ->where('id', $id)
           ->update($data);

       alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
       return redirect()->route('admin.pengaturan');       
    }
}
