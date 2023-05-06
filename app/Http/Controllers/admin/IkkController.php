<?php

namespace App\Http\Controllers\admin;

use App\Exports\IkkExport;
use App\Http\Controllers\Controller;
use App\Models\Ikk;
use App\Models\PerangkatDaerah;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class IkkController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('administrator')){
            $all = Ikk::orderBy('no_ikk','asc')->get();
            return view('admin.pages.ikk.makro.index', ['all' => $all]);
        } elseif (Auth::user()->hasRole('supervisor')){
            $all = Ikk::orderBy('no_ikk','asc')->get();
            return view('admin.pages.ikk.makro.index', ['all' => $all]);
        } else {
            $all = Ikk::orderBy('no_ikk','asc')->where('user_id',Auth::user()->id)->get();
            return view('admin.pages.ikk.makro.index', ['all' => $all]);
        }


    }

    public function pendidikan()
    {
        // $all = DB::select('SELECT * FROM ikk WHERE urusan="pendidikan" ORDER BY id DESC');

        // $all = DB::table('ikk')->get()->where('id', 'pendidikan');
        $all = Ikk::where('urusan','pendidikan')->get();
        return view('admin.pages.ikk.makro.index', ['all' => $all, 'bidang_ikk' => 'pendidikan']);
    }

    public function kesehatan()
    {
        $all = DB::table('ikk')->get()->where('urusan', 'kesehatan');
        return view('admin.pages.ikk.makro.index', ['all' => $all, 'bidang_ikk' => 'kesehatan']);
    }

    public function pekerjaanumum()
    {

        $all = DB::table('ikk')->get()->where('urusan', 'pekerjaanumum');
        return view('admin.pages.ikk.makro.index', ['all' => $all, 'bidang_ikk' => 'pekerjaanumum']);
    }

    public function print()
    {
        // $all = DB::select('SELECT * FROM ikk ORDER BY id DESC  ');
        $all = Ikk::orderBy('id','desc')->get();
        return view('admin.pages.ikk.makro.print', ['all' => $all]);
    }
    public function download_excel()
    {
        return Excel::download(new IkkExport, 'ikk.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $opd = User::all();
        return view('admin.pages.ikk.makro.tambah',compact('opd'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            'no_ikk'                    => 'required',
            'user_id'                   => 'required',
            'capaian_kinerja'           => 'required',
            'ikk'                       => 'required',
            'jml2'                      => 'required',
            'keterangan'                => 'required',
            'rumus'                     => 'required',
            'urusan'                    => 'required',
        ],
        [
            'no_ikk.required'          => 'Nomor IKK tidak boleh kosong',
            // 'no_ikk.unique'            => 'Nomor IKK sudah ada',
            'user_id.required'         => 'OPD tidak boleh kosong',
            'keterangan.required'      => 'Keterangan tidak boleh kosong',
            'rumus.required'           => 'Rumus tidak boleh kosong',
            'urusan.required'          => 'Urusan tidak boleh kosong',
            'ikk.required'             => 'ikk tidak boleh kosong',
            'jml2.required'            => 'Jumlah tidak boleh kosong',

        ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $ikk = new Ikk();
                $ikk->user_id        = $request->user_id;
                $ikk->no_ikk        = $request->no_ikk;
                $ikk->urusan        = $request->urusan;
                $ikk->ikk           = $request->ikk;
                $ikk->rumus         = $request->rumus;
                // $ikk->ket_jml1   = $request->ket_jml1;
                $ikk->jml1          = $request->jml1;
                // $ikk->ket_jml2   = $request->ket_jml2;
                $ikk->jml2          = $request->jml2;
                $ikk->capaian_kinerja    = $request->capaian_kinerja;
                $ikk->keterangan    = $request->keterangan;
                $ikk->save();
                alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
                return redirect()->route('admin.ikk');
            } catch (\Throwable $th) {
                alert()->error('Gagal', 'Sukses!!')->autoclose(1100);
                return redirect()->back();
            }
        }
    }


    public function show($id)
    {
        $data = Ikk::where('id',$id)->first();
        return view('admin.pages.ikk.makro.detail',compact('data'));
    }



     public function edit($id)
     {
        $opd = User::all();
         $data = Ikk::where('id',$id)->first();
         return view('admin.pages.ikk.makro.ubah',compact('data','opd'));
     }


    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),
        [
            'no_ikk'                    => 'required',
            'user_id'                   => 'required',
            'capaian_kinerja'           => 'required',
            'ikk'                       => 'required',
            'jml2'                      => 'required',
            'keterangan'                => 'required',
            'rumus'                     => 'required',
            'urusan'                    => 'required',
        ],
        [
            'no_ikk.required'          => 'Nomor IKK tidak boleh kosong',
            // 'no_ikk.unique'            => 'Nomor IKK sudah ada',
            'user_id.required'         => 'OPD tidak boleh kosong',
            'keterangan.required'      => 'Keterangan tidak boleh kosong',
            'rumus.required'           => 'Rumus tidak boleh kosong',
            'urusan.required'          => 'Urusan tidak boleh kosong',
            'ikk.required'             => 'ikk tidak boleh kosong',
            'jml2.required'            => 'Jumlah tidak boleh kosong',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $ikk                = Ikk::find($id);
                $ikk->user_id       = $request->user_id;
                $ikk->no_ikk        = $request->no_ikk;
                $ikk->urusan        = $request->urusan;
                $ikk->ikk           = $request->ikk;
                $ikk->rumus         = $request->rumus;
                // $ikk->ket_jml1   = $request->ket_jml1;
                $ikk->jml1          = $request->jml1;
                // $ikk->ket_jml2   = $request->ket_jml2;
                $ikk->jml2          = $request->jml2;
                $ikk->capaian_kinerja    = $request->capaian_kinerja;
                $ikk->keterangan    = $request->keterangan;
                $ikk->update();
                alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
                return redirect()->route('admin.ikk');
            } catch (\Throwable $th) {
                alert()->error('Gagal', 'Sukses!!')->autoclose(1100);
                return redirect()->back();
            }
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ikk  $ikk
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = Ikk::where('id',$id)->first();
        return view('admin.pages.ikk.makro.delete',compact('data'));
    }

    public function destroy($id)
    {
        $data = Ikk::findOrFail($id);

        //dd($data);
        // if($data->foto){
        //     \File::delete($data->foto);
        // }

        $data->forceDelete();

        alert()->success('Berhasil', 'Data terhapus!!')->autoclose(1500);
        return redirect()->route('admin.ikk');
    }

    // Status
    public function statusIndex($id)
    {
        $data = Ikk::where('id',$id)->first();
        return view('admin.pages.ikk.makro.status',['data' => $data]);
    }
    public function statusUpdate(Request $request, $id)
    {
        $validator = Validator::make($request->only('status'),
        [
            'status' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                 Ikk::where('id',$id)->update([
                    'status' => $request->status
                ]);
                alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
                return redirect()->route('admin.ikk');
            } catch (\Throwable $th) {
                alert()->error('Gagal', 'Sukses!!')->autoclose(1100);
                return redirect()->back();
            }
        }
    }
}
