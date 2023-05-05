<?php

namespace App\Http\Controllers\admin;

use App\Models\Gambar;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PerangkatDaerah;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class GambarController extends Controller
{
    // INDEX
    public function index()
    {
        $datas = Gambar::orderBy('id','asc')->paginate(4);
        return view('admin.pages.gambar.index', compact('datas'));
    }

    // CREATE
    public function create()
    {
        return view('admin.pages.gambar.tambah');
    }

    // CREATE
    public function edit($id)
    {
        $data = Gambar::where('slug',$id)->first();
        return view('admin.pages.gambar.edit',compact('data'));
    }

    // STORE
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            'nama_file' => 'required',
            'alamat_file' => 'required|image|mimes:png,jpg,jpeg|max:4028'
        ],
        [
            'nama_file.required'     => 'Judul gambar tidak boleh kosong',
            'alamat_file.required'   => 'Gambar tidak boleh kosong',
            'alamat_file.mimes'      => 'Gambar dengan jenis JPEG,JPG,PNG',
            'alamat_file.max'        => 'Gambar dengan maximal 2MB'
        ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $random = Str::random(15);

                $gambar = new Gambar();
                $gambar->nama_file = $request->nama_file;
                $gambar->slug = $random;

                $posterName = $request->nama_file.'.'.time() . '.' . $request->alamat_file->extension();
                $path = public_path('file/kelolah_gambar');
                if (!empty($gambar->alamat_file) && file_exists($path . '/' . $gambar->alamat_file)) :
                    unlink($path . '/' . $gambar->alamat_file);
                endif;
                $gambar->alamat_file = $posterName;
                $request->alamat_file->move(public_path('file/kelolah_gambar'), $posterName);

                $gambar->save();

                alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
                return redirect()->route('admin.gambar');
            } catch (\Throwable $th) {
                alert()->error('Gagal', 'Gagal!!')->autoclose(1100);
                return redirect()->back();
            }
        }

    }

     // STORE
     public function update(Request $request,$id)
     {
         $validator = Validator::make($request->all(),
         [
             'nama_file' => 'required',
             'alamat_file' => 'required|image|mimes:png,jpg,jpeg|max:4028'
         ],
         [
             'nama_file.required'     => 'Judul gambar tidak boleh kosong',
             'alamat_file.required'   => 'Gambar tidak boleh kosong',
             'alamat_file.mimes'      => 'Gambar dengan jenis JPEG,JPG,PNG',
             'alamat_file.max'        => 'Gambar dengan maximal 2MB'
         ]
         );

         if ($validator->fails()) {
             return redirect()->back()->withInput($request->all())->withErrors($validator);
         } else {
             try {
                 $random = Str::random(15);

                 $gambar = Gambar::find($id);
                 $gambar->nama_file = $request->nama_file;
                 $gambar->slug = $random;
                 if ($request->alamat_file) {

                    $posterName = $request->nama_fille.time() . '.' . $request->alamat_file->extension();
                    $path = public_path('file/kelolah_gambar');
                    if (!empty($gambar->alamat_file) && file_exists($path . '/' . $gambar->alamat_file)) :
                        unlink($path . '/' . $gambar->alamat_file);
                    endif;
                    $gambar->alamat_file = $posterName;
                    $request->alamat_file->move(public_path('file/kelolah_gambar'), $posterName);
                 }
                 $gambar->update();

                 alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
                 return redirect()->route('admin.gambar');
             } catch (\Throwable $th) {
                 alert()->error('Gagal', 'Gagal!!')->autoclose(1100);
                 return redirect()->back();
             }
         }

     }

    // DELETE
    public function delete($id)
    {
        $data = Gambar::where('slug',$id)->first();
        return view('admin.pages.gambar.hapus', compact('data'));
    }

    // DESTROY
    public function destroy($id)
    {
        try {
            $gambar = Gambar::find($id);
            $path = public_path('file/kelolah_gambar' . $gambar->foto_gedung);

            if (file_exists($path)) {
                File::delete($path);
            }
            $gambar->delete();
            alert()->success('Berhasil', 'Sukses!!')->autoclose(1500);
            return redirect()->route('admin.gambar');

        } catch (\Throwable $e) {
            alert()->error('Gagal', 'Gagal!!')->autoclose(1100);
            return redirect()->back();
        }
    }
}
