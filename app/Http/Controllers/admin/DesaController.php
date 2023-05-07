<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Desa;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use Alert;
use App\Models\Distrik;
use Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class DesaController extends Controller
{
    // INDEX
    public function index()
    {
        $datas = Desa::orderBy('nama_desa','asc')->paginate(4);
        return view('admin.pages.profil.desa.index', compact('datas'));
    }

    // PRINT
    public function print()
    {
        $datas = Desa::orderBy('nama_desa','asc')->get();
        $page_title = 'Print - Data Desa';
        return view('admin.pages.profil.desa.print', compact('datas', 'page_title'));
    }

    // CREATE
    public function create()
    {
        $data = Distrik::all();
        return view('admin.pages.profil.desa.tambah',compact('data'));
    }

    // STORE
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            'nama_desa'                 => 'required',
            'distrik_id'                => 'required',
            'nama_kepala_desa'          => 'required',
            'alamat'                    => 'required',
            'telp'                      => 'required',
            'foto_kepala_desa'          => 'mimes:jpeg,png,jpg',
            'foto_kantor'               => 'mimes:jpeg,png,jpg',
        ],
        [
            'nama_desa.required'          => 'Nama desa tidak boleh kosong',
            'distrik_id.required'         => 'Distrik boleh kosong',
            'nama_kepala_desa.required'   => 'Nama kepala desa tidak boleh kosong',
            'alamat.required'             => 'Alamat tidak boleh kosong',
            'telp.required'               => 'Telp tidak boleh kosong',
            'foto_kepala_desa.mimes'      => 'Foto kepala Desa harus dengan jenis JPEG,JPG,PNG',
            'foto_kantor.mimes'           => 'Foto Kantor harus dengan jenis JPEG,JPG,PNG',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $desa = new Desa();
                $desa->distrik_id        = $request->distrik_id;
                $desa->nama_desa         = $request->nama_desa;
                $desa->nama_kepala_desa  = $request->nama_kepala_desa;
                $desa->alamat            = $request->alamat;
                $desa->telp              = $request->telp;
                $desa->email             = $request->email;
                $desa->slug              =  Str::slug($request->nama_desa);

                // kepal distrik upload
                $posterName = time() . '.' . $request->foto_kepala_distrik->extension();
                $path = public_path('file/foto/kepala/desa');
                if (!empty($desa->foto_kepala_desa) && file_exists($path . '/' . $desa->foto_kepala_desa)) :
                    unlink($path . '/' . $desa->foto_kepala_desa);
                endif;
                $desa->foto_kepala_desa = $posterName;
                $request->foto_kepala_desa->move(public_path('file/foto/kepala/desa'), $posterName);

                // Foto kantor Distrik
                $posterName = time() . '.' . $request->foto_kantor->extension();
                $path = public_path('file/foto/kantor/desa');
                if (!empty($desa->foto_kantor) && file_exists($path . '/' . $desa->foto_kantor)) :
                    unlink($path . '/' . $desa->foto_kantor);
                endif;
                $desa->foto_kantor = $posterName;
                $request->foto_kantor->move(public_path('file/foto/kantor/desa'), $posterName);

                $desa->save();
                alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
                return redirect()->route('admin.desa');
            } catch (\Throwable $th) {
                alert()->error('Gagal', 'Sukses!!')->autoclose(1100);
                return redirect()->back();
            }
        }
    }

    // SHOW
    public function show($id)
    {
        $data = Desa::where('slug',$id)->first();
        return view('admin.pages.profil.desa.detail',compact('data'));
    }

    // EDIT
    public function edit($id)
    {
        $data = Desa::where('slug',$id)->first();
        $distriks = Distrik::all();
        return view('admin.pages.profil.desa.ubah', compact('data','distriks'));
    }

    // UPDATE PROCESS
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),
        [
            'nama_desa'                 => 'required',
            'distrik_id'                => 'required',
            'nama_kepala_desa'          => 'required',
            'alamat'                    => 'required',
            'telp'                      => 'required',
            'foto_kepala_desa'          => 'mimes:jpeg,png,jpg',
            'foto_kantor'               => 'mimes:jpeg,png,jpg',
        ],
        [
            'nama_desa.required'          => 'Nama desa tidak boleh kosong',
            'distrik_id.required'         => 'Distrik boleh kosong',
            'nama_kepala_desa.required'   => 'Nama kepala desa tidak boleh kosong',
            'alamat.required'             => 'Alamat tidak boleh kosong',
            'telp.required'               => 'Telp tidak boleh kosong',
            'foto_kepala_desa.mimes'      => 'Foto kepala Desa harus dengan jenis JPEG,JPG,PNG',
            'foto_kantor.mimes'           => 'Foto Kantor harus dengan jenis JPEG,JPG,PNG',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $desa = Desa::find($id);
                $desa->distrik_id        = $request->distrik_id;
                $desa->nama_desa         = $request->nama_desa;
                $desa->nama_kepala_desa  = $request->nama_kepala_desa;
                $desa->alamat            = $request->alamat;
                $desa->telp              = $request->telp;
                $desa->email             = $request->email;
                $desa->slug              =  Str::slug($request->nama_desa);

                if($request->foto_kepala_desa){
                    $posterName = time() . '.' . $request->foto_kepala_desa->extension();
                    $path = public_path('file/foto/kepala/desa');
                    if (!empty($desa->foto_kepala_desa) && file_exists($path . '/' . $desa->foto_kepala_desa)) :
                        unlink($path . '/' . $desa->foto_kepala_desa);
                    endif;
                    $desa->foto_kepala_desa = $posterName;
                    $request->foto_kepala_desa->move(public_path('file/foto/kepala/desa'), $posterName);
                }

                if($request->foto_kantor){
                    $posterName = time() . '.' . $request->foto_kantor->extension();
                    $path = public_path('file/foto/kantor/desa');
                    if (!empty($desa->foto_kantor) && file_exists($path . '/' . $desa->foto_kantor)) :
                        unlink($path . '/' . $desa->foto_kantor);
                    endif;
                    $desa->foto_kantor = $posterName;
                    $request->foto_kantor->move(public_path('file/foto/kantor/desa'), $posterName);
                }

                $desa->update();
                alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
                return redirect()->route('admin.desa');
            } catch (\Throwable $th) {
                alert()->error('Gagal', 'Sukses!!')->autoclose(1100);
                return redirect()->back();
            }
        }
    }


    // DELETE PROCESS
    public function delete($id)
    {
        $data = Desa::where('slug',$id)->first();
        return view('admin.pages.profil.desa.delete', compact('data'));
    }

    // DESTROY
    public function destroy($id)
    {
        try {
            $desa = Desa::find($id);
            $path_kepala_distrik = public_path('file/foto/kepala/desa/' . $desa->foto_kepala_desa);

            if (file_exists($path_kepala_distrik)) {
                File::delete($path_kepala_distrik);
            }
            $path_kantor_distrik = public_path('file/foto/kantor/desa/' . $desa->foto_kantor);
            if (file_exists($path_kantor_distrik)) {
                File::delete($path_kantor_distrik);
            }
            alert()->success('Berhasil', 'Data terhapus!!')->autoclose(1500);
            return redirect()->route('admin.desa');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
