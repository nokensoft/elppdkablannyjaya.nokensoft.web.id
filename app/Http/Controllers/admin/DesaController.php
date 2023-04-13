<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Desa;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use Alert;
use Storage;
use Illuminate\Support\Facades\DB;

class DesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all =DB::select('SELECT * FROM profil_desa ORDER BY id DESC  ');
        return view('admin.pages.profil.desa.index', ['all' => $all]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.profil.desa.tambah');
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
            'nama_desa' => 'required'
        ],
        [
            'nama_desa.required' => 'Nama tidak boleh kosong',
        ]);


        $desa = new Desa();

        $desa->nama_desa         = $request->nama_desa;
        $desa->nama_kepala_desa  = $request->nama_kepala_desa;
        $desa->alamat            = $request->alamat;
        $desa->telp              = $request->telp;
        $desa->email             = $request->email;

        $desa->slug              =  Str::slug($request->nama_desa);


        $desa->save();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('admin.desa');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function show(Desa $id)
    {
        return view('admin.pages.profil.desa.detail');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\disdesatrik  $desa
     * @return \Illuminate\Http\Response
     */

     public function edit($id)
     {
         $data =DB::select("SELECT * FROM profil_desa WHERE id = '$id' ");
         return view('admin.pages.profil.desa.ubah',['data' => $data]);
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_desa' => 'required'
        ],
        [
            'nama_desa.required' => 'Nama tidak boleh kosong',
        ]);


        $desa = new Desa();

        $data['nama_desa']    = $request->nama_desa;
        $data['nama_kepala_desa']    = $request->nama_kepala_desa;
        $data['alamat']    = $request->alamat;
        $data['telp']    = $request->telp;
        $data['email']    = $request->email;
        $data['email']    = $request->email;

        $data['slug']                 =  Str::slug($request->nama_desa);

        $user = DB::table('profil_desa')
            ->where('id', $id)
            ->update($data);

        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('admin.desa');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data =DB::select("SELECT * FROM profil_desa WHERE id = '$id' ");
        return view('admin.pages.profil.desa.delete',['data' => $data]);
    }

    public function destroy($id)
    {
        $data = Desa::findOrFail($id);

        //dd($data);
        // if($data->foto){
        //     \File::delete($data->foto);
        // }

        $data->forceDelete();

        alert()->success('Berhasil', 'Data terhapus!!')->autoclose(1500);
        return redirect()->route('admin.desa');
    }
}
