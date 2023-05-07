<?php

namespace App\Http\Controllers\Admin;

use App\Models\Urusan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class UrusanController extends Controller
{
    public function index(Request $request)
    {
        $data = Urusan::orderBy('id','desc')->paginate(5);
        return view('admin.pages.urusan.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);

    }

    public function create()
    {
        return view('admin.pages.urusan.create');
    }

    public function edit($id)
    {
        $data = Urusan::where('slug',$id)->first();
        return view('admin.pages.urusan.edit',compact('data'));
    }
    public function delete($id)
    {
        $data = Urusan::where('slug',$id)->first();
        return view('admin.pages.urusan.delete',compact('data'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'judul_urusan' => 'required',
        ],[
            'judul_urusan.required'        => 'Judul Urusan tidak boleh kosong',
        ]);

        if($validator->fails()){
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $urusan = new Urusan();
                $urusan->judul_urusan = $request->judul_urusan;
                $urusan->slug = Str::slug($request->judul_urusan);
                $urusan->save();
                Alert::toast('Urusan Berhasil disimpan!', 'success');
                return redirect()->route('admin.urusan');
            } catch (\Throwable $th) {
                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }

    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(),[
            'judul_urusan' => 'required',
        ],[
            'judul_urusan.required'        => 'Judul Urusan tidak boleh kosong',
        ]);

        if($validator->fails()){
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $urusan = Urusan::find($id);
                $urusan->judul_urusan = $request->judul_urusan;
                $urusan->slug = Str::slug($request->judul_urusan);
                $urusan->update();
                Alert::toast('Urusan Berhasil diperbarui!', 'success');
                return redirect()->route('admin.urusan');
            } catch (\Throwable $th) {
                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }

    public function destroy($id)
    {
        try {
            $data = Urusan::find($id);
            $data->delete();
            Alert::toast('Urusan Berhasil dihapus!', 'success');
            return redirect()->route('admin.urusan');
        } catch (\Throwable $e) {
            Alert::toast('Gagal', ['error' => $e->getMessage()], 'error');
            return redirect()->back();
        }

    }

}
