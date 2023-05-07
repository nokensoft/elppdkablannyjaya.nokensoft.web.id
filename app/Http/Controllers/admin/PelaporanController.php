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
        $all = Pelaporan::where('tahun','2023')->get();
        return view('admin.pages.lppd.pelaporan.index', ['all' => $all]);
    }

    // CREATE
        public function createCover($id)
        {
            $data = Pelaporan::where('id',$id)->first();
            return view('admin.pages.lppd.pelaporan.create.cover',compact('data'));
        }
        public function createBabSatu()
        {
            return view('admin.pages.lppd.pelaporan.create.bab_satu');
        }
        public function createBabDua()
        {
            return view('admin.pages.lppd.pelaporan.create.bab_dua');
        }
        public function createBabTiga()
        {
            return view('admin.pages.lppd.pelaporan.create.bab_tiga');
        }
        public function createBabEmpat()
        {
            return view('admin.pages.lppd.pelaporan.create.bab_empat');
        }
        public function createBabLima()
        {
            return view('admin.pages.lppd.pelaporan.create.bab_empat');
        }
        public function createLampiran()
        {
            return view('admin.pages.lppd.pelaporan.create.lampiran');
        }
    // End

    // STORE
    public function storeCover(Request $request,$id)
    {
        $validator = Validator::make($request->only('cover','cover_file'),[
            'cover' => 'required',
            'cover_file' => 'mimes:pdf',
        ],[
            'cover.required'        => 'Judul Cover tidak boleh kosong',
            'cover_file.required'   => 'File Upload Cover tidak boleh kosong',
            'cover_file.mimes'      => 'File Upload Cover harus dengan extensi pdf',
        ]);

        if($validator->fails()){
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $cover = Pelaporan::find($id);
                $cover->cover = $request->cover;

                if ($request->cover_file) {
                    $fileName = $request->cover_file . '-'.time() . '.' . $request->cover_file->extension();
                    $path = public_path('file/lppd/cover');
                    if (!empty($cover->cover_file) && file_exists($path.$cover->cover_file)) :
                        unlink($path.$cover->cover_file);
                    endif;

                    $cover->cover_file = $fileName;
                    $request->cover_file->move($path, $fileName);
                }

                $cover->update();
                Alert::toast('Cover Berhasil disimpan!', 'success');
                return redirect()->route('admin.pelaporan');

            } catch (\Throwable $th) {
                dd($th);
                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }
    public function storeBabSatu(Request $request)
    {
        $validator = Validator::make($request->only('babi','babi_file'),[
            'babi' => 'required',
            'babi_file' => 'required|image|mimes:pdf',
        ]);

        if($validator->fails()){
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {

        }
    }
    public function storeBabDua(Request $request)
    {
        $validator = Validator::make($request->only('babii','babii_file'),[
            'babii' => 'required',
            'babii_file' => 'required|image|mimes:pdf',
        ]);

        if($validator()->fails()){
             return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {

        }
    }
    public function storeBabTiga(Request $request)
    {
        $validator = Validator::make($request->only('babiii','babiii_file'),[
            'babiii' => 'required',
            'babiii_file' => 'required|image|mimes:pdf',
        ]);

        if($validator->fails()){
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {

        }
    }
    public function storeBabEmpat(Request $request)
    {
       $validator = Validator::make($request->only('babiv','babiv_file'),[
        'babiv' => 'required',
        'babiv_file' => 'required|image|mimes:pdf',
       ]);

       if($validator->fails()){
            return redirect()->back()->withInput($request->all())->withErrors($validator);
       } else {

       }
    }
    public function storeBabLima(Request $request)
    {
        $validator = Validator::make($request->only('babv','babv_file'),[
            'babv' => 'required',
            'babv_file' => 'required|image|mimes:pdf',
        ]);

        if($validator->fails()){
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {

        }
    }
    public function storeLampiran(Request $request)
    {
       $validator = Validator::make($request->only('lampiran','lampiran_file'),[
        'lampiran' => 'required',
        'lampiran_file' => 'required|image|mimes:pdf',
       ]);

       if($validator->fails()){
            return redirect()->back()->withInput($request->all())->withErrors($validator);
       } else {

       }
    }





}
