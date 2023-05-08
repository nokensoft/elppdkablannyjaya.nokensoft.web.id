<?php

namespace App\Http\Controllers\admin;

use App\Models\Pelaporan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class PelaporanController extends Controller
{
    // INDEX
    public function index()
    {
        $all = Pelaporan::where('tahun', '2023')->get();
        return view('admin.pages.lppd.pelaporan.index', ['all' => $all]);
    }



    // -------------------------------------------------------------
    // COVER
    // -------------------------------------------------------------

    // CREATE
    public function createCover($id)
    {
        $data = Pelaporan::where('id', $id)->first();
        return view('admin.pages.lppd.pelaporan.create.cover', compact('data'));
}

    // STORE
    public function storeCover(Request $request, $id)
    {
        $validator = Validator::make($request->only('cover', 'cover_file'), [
            'cover' => 'required',
            'cover_file' => 'mimes:pdf',
        ], [
            'cover.required'        => 'Judul Cover tidak boleh kosong',
            'cover_file.required'   => 'File Upload Cover tidak boleh kosong',
            'cover_file.mimes'      => 'File Upload Cover harus dengan extensi pdf',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = Pelaporan::find($id);
                $data->cover = $request->cover;

                if ($request->cover_file) {

                    $fileName = 'Cover' . '.' . $request->cover_file->extension();

                    $path = 'file/lppd/';

                    // dd($path  . $cover->cover_file);


                    if (!empty($data->cover_file) && file_exists( $path . $data->cover_file)) :
                        unlink( $path  . $data->cover_file);
                    endif;

                    $data->cover_file = $fileName;
                    $request->cover_file->move(public_path( $path ), $fileName);
                }

                // update table
                $data->update();

                Alert::toast('Berhasil disimpan!', 'success');
                return redirect()->route('admin.pelaporan');
            } catch (\Throwable $th) {
                dd($th);
                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }

    // DELETE
    public function deleteCover($id)
    {
        
        $data = Pelaporan::where('id', $id)->first();
        return view('admin.pages.lppd.pelaporan.delete.cover', compact('data'));
    }

    // UPDATE
    public function emptyCover(Request $request, $id)
    {
        $cover = Pelaporan::find($id);

        if (!empty($cover->cover_file) && file_exists('file/lppd/' . $cover->cover_file)) :
            unlink('file/lppd/' . $cover->cover_file);
        endif;

        $cover->cover_file = '';

        $cover->update();

        Alert::toast('Cover Berhasil disimpan!', 'success');
        return redirect()->route('admin.pelaporan');
    }





    // -------------------------------------------------------------
    // BAB I
    // -------------------------------------------------------------

    // CREATE 
    public function createBabI($id)
    {
        $data = Pelaporan::where('id', $id)->first();
        return view('admin.pages.lppd.pelaporan.create.babi', compact('data'));
    }

    // STORE
    public function storeBabI(Request $request, $id)
    {
        $validator = Validator::make($request->only('babi', 'babi_file'), [
            'babi' => 'required',
            'babi_file' => 'mimes:pdf',
        ], [
            'babi.required'        => 'Judul tidak boleh kosong',
            'babi_file.required'   => 'File Upload tidak boleh kosong',
            'babi_file.mimes'      => 'File Upload harus dengan extensi pdf',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = Pelaporan::find($id);
                $data->babi = $request->babi;

                if ($request->babi_file) {

                    $fileName = 'Bab-I' . '.' . $request->babi_file->extension();

                    $path = 'file/lppd/';

                    if (!empty($data->babi_file) && file_exists( $path . $data->babi_file)) :
                        unlink( $path  . $data->babi_file);
                    endif;

                    $data->babi_file = $fileName;
                    $request->babi_file->move(public_path( $path ), $fileName);
                }

                // update table
                $data->update();

                Alert::toast('Berhasil disimpan!', 'success');
                return redirect()->route('admin.pelaporan');
            } catch (\Throwable $th) {
                dd($th);
                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }

    // DELETE
    public function deleteBabI($id)
    {
        
        $data = Pelaporan::where('id', $id)->first();
        return view('admin.pages.lppd.pelaporan.delete.babi', compact('data'));
    }

    // UPDATE
    public function emptyBabI(Request $request, $id)
    {
        $data = Pelaporan::find($id);

        if (!empty($data->babi_file) && file_exists('file/lppd/' . $data->babi_file)) :
            unlink('file/lppd/' . $data->babi_file);
        endif;

        $data->babi_file = '';

        $data->update();

        Alert::toast('Berhasil disimpan!', 'success');
        return redirect()->route('admin.pelaporan');
    }





    // -------------------------------------------------------------
    // BAB II
    // -------------------------------------------------------------

    // CREATE 
    public function createBabII($id)
    {
        $data = Pelaporan::where('id', $id)->first();
        return view('admin.pages.lppd.pelaporan.create.babii', compact('data'));
    }

    // STORE
    public function storeBabII(Request $request, $id)
    {
        $validator = Validator::make($request->only('babii', 'babii_file'), [
            'babii' => 'required',
            'babii_file' => 'mimes:pdf',
        ], [
            'babii.required'        => 'Judul tidak boleh kosong',
            'babii_file.required'   => 'File Upload tidak boleh kosong',
            'babii_file.mimes'      => 'File Upload harus dengan extensi pdf',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = Pelaporan::find($id);
                $data->babii = $request->babii;

                if ($request->babii_file) {

                    $fileName = 'Bab-II' . '.' . $request->babii_file->extension();

                    $path = 'file/lppd/';

                    if (!empty($data->babii_file) && file_exists( $path . $data->babii_file)) :
                        unlink( $path  . $data->babii_file);
                    endif;

                    $data->babii_file = $fileName;
                    $request->babii_file->move(public_path( $path ), $fileName);
                }

                // update table
                $data->update();

                Alert::toast('Berhasil disimpan!', 'success');
                return redirect()->route('admin.pelaporan');
            } catch (\Throwable $th) {
                dd($th);
                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }

    // DELETE
    public function deleteBabII($id)
    {
        
        $data = Pelaporan::where('id', $id)->first();
        return view('admin.pages.lppd.pelaporan.delete.babii', compact('data'));
    }

    // UPDATE
    public function emptyBabII(Request $request, $id)
    {
        $data = Pelaporan::find($id);

        if (!empty($data->babii_file) && file_exists('file/lppd/' . $data->babii_file)) :
            unlink('file/lppd/' . $data->babii_file);
        endif;

        $data->babii_file = '';

        $data->update();

        Alert::toast('Berhasil disimpan!', 'success');
        return redirect()->route('admin.pelaporan');
    }




    // -------------------------------------------------------------
    // BAB III
    // -------------------------------------------------------------

    // CREATE 
    public function createBabIII($id)
    {
        $data = Pelaporan::where('id', $id)->first();
        return view('admin.pages.lppd.pelaporan.create.babiii', compact('data'));
    }

    // STORE
    public function storeBabIII(Request $request, $id)
    {
        $validator = Validator::make($request->only('babiii', 'babiii_file'), [
            'babiii' => 'required',
            'babiii_file' => 'mimes:pdf',
        ], [
            'babiii.required'        => 'Judul tidak boleh kosong',
            'babiii_file.required'   => 'File Upload tidak boleh kosong',
            'babiii_file.mimes'      => 'File Upload harus dengan extensi pdf',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = Pelaporan::find($id);
                $data->babiii = $request->babiii;

                if ($request->babiii_file) {

                    $fileName = 'Bab-III' . '.' . $request->babiii_file->extension();

                    $path = 'file/lppd/';

                    if (!empty($data->babiii_file) && file_exists( $path . $data->babiii_file)) :
                        unlink( $path  . $data->babiii_file);
                    endif;

                    $data->babiii_file = $fileName;
                    $request->babiii_file->move(public_path( $path ), $fileName);
                }

                // update table
                $data->update();

                Alert::toast('Berhasil disimpan!', 'success');
                return redirect()->route('admin.pelaporan');
            } catch (\Throwable $th) {
                dd($th);
                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }

    // DELETE
    public function deleteBabIII($id)
    {
        
        $data = Pelaporan::where('id', $id)->first();
        return view('admin.pages.lppd.pelaporan.delete.babiii', compact('data'));
    }

    // UPDATE
    public function emptyBabIII(Request $request, $id)
    {
        $data = Pelaporan::find($id);

        if (!empty($data->babiii_file) && file_exists('file/lppd/' . $data->babiii_file)) :
            unlink('file/lppd/' . $data->babiii_file);
        endif;

        $data->babiii_file = '';

        $data->update();

        Alert::toast('Berhasil disimpan!', 'success');
        return redirect()->route('admin.pelaporan');
    }




    // -------------------------------------------------------------
    // BAB IV
    // -------------------------------------------------------------
    
    // CREATE 
    public function createBabIV($id)
    {
        $data = Pelaporan::where('id', $id)->first();
        return view('admin.pages.lppd.pelaporan.create.babiv', compact('data'));
    }

    // STORE
    public function storeBabIV(Request $request, $id)
    {
        $validator = Validator::make($request->only('babiv', 'babiv_file'), [
            'babiv' => 'required',
            'babiv_file' => 'mimes:pdf',
        ], [
            'babiv.required'        => 'Judul tidak boleh kosong',
            'babiv_file.required'   => 'File Upload tidak boleh kosong',
            'babiv_file.mimes'      => 'File Upload harus dengan extensi pdf',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = Pelaporan::find($id);
                $data->babiv = $request->babiv;

                if ($request->babiv_file) {

                    $fileName = 'Bab-IV' . '.' . $request->babiv_file->extension();

                    $path = 'file/lppd/';

                    if (!empty($data->babiv_file) && file_exists( $path . $data->babiv_file)) :
                        unlink( $path  . $data->babiv_file);
                    endif;

                    $data->babiv_file = $fileName;
                    $request->babiv_file->move(public_path( $path ), $fileName);
                }

                // update table
                $data->update();

                Alert::toast('Berhasil disimpan!', 'success');
                return redirect()->route('admin.pelaporan');
            } catch (\Throwable $th) {
                dd($th);
                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }

    // DELETE
    public function deleteBabIV($id)
    {
        
        $data = Pelaporan::where('id', $id)->first();
        return view('admin.pages.lppd.pelaporan.delete.babiv', compact('data'));
    }

    // UPDATE
    public function emptyBabIV(Request $request, $id)
    {
        $data = Pelaporan::find($id);

        if (!empty($data->babiv_file) && file_exists('file/lppd/' . $data->babiv_file)) :
            unlink('file/lppd/' . $data->babiv_file);
        endif;

        $data->babiv_file = '';

        $data->update();

        Alert::toast('Berhasil disimpan!', 'success');
        return redirect()->route('admin.pelaporan');
    }





    // -------------------------------------------------------------
    // BAB V
    // -------------------------------------------------------------
    
    // CREATE 
    public function createBabV($id)
    {
        $data = Pelaporan::where('id', $id)->first();
        return view('admin.pages.lppd.pelaporan.create.babv', compact('data'));
    }

    // STORE
    public function storeBabV(Request $request, $id)
    {
        $validator = Validator::make($request->only('babv', 'babv_file'), [
            'babv' => 'required',
            'babv_file' => 'mimes:pdf',
        ], [
            'babv.required'        => 'Judul tidak boleh kosong',
            'babv_file.required'   => 'File Upload tidak boleh kosong',
            'babv_file.mimes'      => 'File Upload harus dengan extensi pdf',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = Pelaporan::find($id);
                $data->babv = $request->babv;

                if ($request->babv_file) {

                    $fileName = 'Bab-V' . '.' . $request->babv_file->extension();

                    $path = 'file/lppd/';

                    if (!empty($data->babv_file) && file_exists( $path . $data->babv_file)) :
                        unlink( $path  . $data->babv_file);
                    endif;

                    $data->babv_file = $fileName;
                    $request->babv_file->move(public_path( $path ), $fileName);
                }

                // update table
                $data->update();

                Alert::toast('Berhasil disimpan!', 'success');
                return redirect()->route('admin.pelaporan');
            } catch (\Throwable $th) {
                dd($th);
                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }

    // DELETE
    public function deleteBabV($id)
    {
        
        $data = Pelaporan::where('id', $id)->first();
        return view('admin.pages.lppd.pelaporan.delete.babv', compact('data'));
    }

    // UPDATE
    public function emptyBabV(Request $request, $id)
    {
        $data = Pelaporan::find($id);

        if (!empty($data->babv_file) && file_exists('file/lppd/' . $data->babv_file)) :
            unlink('file/lppd/' . $data->babv_file);
        endif;

        $data->babv_file = '';

        $data->update();

        Alert::toast('Berhasil disimpan!', 'success');
        return redirect()->route('admin.pelaporan');
    }






    // -------------------------------------------------------------
    // LAMPIRAN
    // -------------------------------------------------------------

    // CREATE 
    public function createLampiran($id)
    {
        $data = Pelaporan::where('id', $id)->first();
        return view('admin.pages.lppd.pelaporan.create.lampiran', compact('data'));
    }

    // STORE
    public function storeLampiran(Request $request, $id)
    {
        $validator = Validator::make($request->only('lampiran', 'lampiran_file'), [
            'lampiran' => 'required',
            'lampiran_file' => 'mimes:pdf',
        ], [
            'lampiran.required'        => 'Judul tidak boleh kosong',
            'lampiran_file.required'   => 'File Upload tidak boleh kosong',
            'lampiran_file.mimes'      => 'File Upload harus dengan extensi pdf',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = Pelaporan::find($id);
                $data->lampiran = $request->lampiran;

                if ($request->lampiran_file) {

                    $fileName = 'Lampiran' . '.' . $request->lampiran_file->extension();

                    $path = 'file/lppd/';

                    if (!empty($data->lampiran_file) && file_exists( $path . $data->lampiran_file)) :
                        unlink( $path  . $data->lampiran_file);
                    endif;

                    $data->lampiran_file = $fileName;
                    $request->lampiran_file->move(public_path( $path ), $fileName);
                }

                // update table
                $data->update();

                Alert::toast('Berhasil disimpan!', 'success');
                return redirect()->route('admin.pelaporan');
            } catch (\Throwable $th) {
                dd($th);
                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }

    // DELETE
    public function deleteLampiran($id)
    {
        
        $data = Pelaporan::where('id', $id)->first();
        return view('admin.pages.lppd.pelaporan.delete.lampiran', compact('data'));
    }

    // UPDATE
    public function emptyLampiran(Request $request, $id)
    {
        $data = Pelaporan::find($id);

        if (!empty($data->lampiran_file) && file_exists('file/lppd/' . $data->lampiran_file)) :
            unlink('file/lppd/' . $data->lampiran_file);
        endif;

        $data->lampiran_file = '';

        $data->update();

        Alert::toast('Berhasil disimpan!', 'success');
        return redirect()->route('admin.pelaporan');
    }



}
