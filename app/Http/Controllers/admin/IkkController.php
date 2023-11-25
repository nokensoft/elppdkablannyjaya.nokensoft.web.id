<?php

namespace App\Http\Controllers\admin;

use App\Models\Ikk;
use App\Models\User;
use App\Models\Urusan;
use App\Exports\IkkExport;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PerangkatDaerah;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class IkkController extends Controller
{
    public function index()
    {
        if (Auth::user()->hasRole('administrator')) {

            $all = Urusan::paginate(10);

            return view('admin.pages.ikk.makro.index', ['all' => $all]);
        } elseif (Auth::user()->hasRole('supervisor')) {

            $all = Ikk::orderBy('no_ikk', 'asc')->get();
            return view('admin.pages.ikk.makro.index', ['all' => $all]);
        } else {
            $all = Ikk::orderBy('no_ikk', 'asc')->where('user_id', Auth::user()->id)->get();
            return view('admin.pages.ikk.makro.index', ['all' => $all]);
        }
    }

    public function ikkMethod(Request $request, $slug)
    {

        $all = Urusan::where('slug', $slug)->get();

        return view('admin.pages.ikk.makro.index', ['all' => $all, 'judul_urusan' => $slug]);
    }

    public function print()
    {
        // $all = DB::select('SELECT * FROM ikk ORDER BY id DESC  ');
        $all = Ikk::orderBy('id', 'desc')->get();
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
        $data = Urusan::all();
        // $user  = User::all();
        return view('admin.pages.ikk.makro.tambah', compact('data'));
    }

    public function upload($id)
    {
        $data = Ikk::where('id',$id)->first();
        return view('admin.pages.ikk.makro.upload',compact('data'));
    }
    public function capaian_kinerja($id)
    {
        $data = Ikk::where('id',$id)->first();
        return view('admin.pages.ikk.makro.capaian_kinerja',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'no_ikk'                    => 'required',
                'urusan_id'                 => 'required',

                //     'user_id'                   => 'required',
                //     'capaian_kinerja'           => 'required',
                //     'ikk'                       => 'required',
                //     'jml2'                      => 'required',
                //     'keterangan'                => 'required',
                //     'rumus'                     => 'required',
            ],
            [
                'no_ikk.required'          => 'Nomor IKK tidak boleh kosong',
                // 'capaian_kinerja.required' => 'capaian kinerja tidak boleh kosong',

                'urusan_id.required'         => 'Urusan tidak boleh kosong',
                // 'user_id.required'         => 'Perangkat Daerah tidak boleh kosong',
                // 'keterangan.required'      => 'Keterangan tidak boleh kosong',
                // 'rumus.required'           => 'Rumus tidak boleh kosong',
                // 'urusan.required'          => 'Urusan tidak boleh kosong',
                // 'ikk.required'             => 'ikk tidak boleh kosong',
                // 'jml2.required'            => 'Jumlah tidak boleh kosong',

            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $ikk = new Ikk();
                $ikk->urusan_id             = $request->urusan_id;
                $ikk->user_id               = $request->user_id;
                $ikk->no_ikk                = $request->no_ikk;
                $ikk->ikk_output            = $request->ikk_output;
                $ikk->ikk_outcome           = $request->ikk_outcome;
                $ikk->rumus                 = $request->rumus;
                $ikk->ket_jml1              = $request->ket_jml1;
                $ikk->jml1                  = $request->jml1;
                $ikk->ket_jml2              = $request->ket_jml2;
                $ikk->jml2                  = $request->jml2;
                $ikk->capaian_kinerja       = $request->capaian_kinerja;
                $ikk->keterangan            = $request->keterangan;

                $fileName = Str::randim(12) . '-' . time() . '.' . $request->file_bukti->extension();
                $path = public_path('file/ikk');

                $ikk->file_bukti = $fileName;
                $request->file_bukti->move($path, $fileName);

                $ikk->save();

                alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
                return redirect()->route('admin.ikk');
            } catch (\Throwable $th) {
                dd($th);
                alert()->error('Gagal', 'Sukses!!')->autoclose(1100);
                return redirect()->back();
            }
        }
    }

    // upload file bukti
    public function uploadFile(Request $request,$id){

        $validator = Validator::make(
            $request->only('file_bukti'),
            [
                'file_bukti' => 'mimes:pdf',
            ],
            [
                'file_bukti.mimes'      => 'File Upload Cover harus dengan extensi pdf',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {

            try {
                $data = Ikk::find($id);
                if ($request->file_bukti) {

                    $fileName = Str::random(12) . '.' . $request->file_bukti->extension();
                    $path = 'file/ikk/';
                    if (!empty($data->file_bukti) && file_exists( $path . $data->file_bukti)) :
                        unlink( $path  . $data->file_bukti);
                    endif;
                    $data->file_bukti = $fileName;
                    $request->file_bukti->move(public_path( $path ), $fileName);
                }
                $data->update();
                alert()->success('Data berhasil diupload', 'Sukses!!')->autoclose(1100);
                return redirect()->route('admin.ikk');
            } catch (\Throwable $th) {
                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }

    // detail ikk
    public function show($id)
    {
        $ikk    = Ikk::where('id', $id)->first();
        $data   = Urusan::all();
        return view('admin.pages.ikk.makro.detail', compact('data', 'ikk', 'id'));
    }

    // form edit
    public function edit($id)
    {
        $urusan = Urusan::all();
        $user   = User::all();
        $data   = Ikk::where('id', $id)->first();
        return view('admin.pages.ikk.makro.ubah', compact('data', 'urusan', 'user'));
    }

    // ubah ikk
    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'no_ikk'                    => 'required',
                // 'user_id'                   => 'required',
                'urusan_id'                 => 'required',
                // 'capaian_kinerja'           => 'required',
                'ikk_output'                       => 'required',
                'ikk_outcome'                       => 'required',
                'jml1'                      => 'required',
                'jml2'                      => 'required',
                'keterangan'                => 'required',
                'rumus'                     => 'required',
                // 'urusan'                    => 'required',
            ],
            [
                'no_ikk.required'          => 'Nomor IKK tidak boleh kosong',
                // 'no_ikk.unique'            => 'Nomor IKK sudah ada',
                // 'user_id.required'         => 'Perangkat daerah tidak boleh kosong',
                'urusan_id.required'       => 'Urusan tidak boleh kosong',
                'keterangan.required'      => 'Keterangan tidak boleh kosong',
                'rumus.required'           => 'Rumus tidak boleh kosong',
                // 'urusan.required'          => 'Urusan tidak boleh kosong',
                'ikk.required'             => 'ikk tidak boleh kosong',
                'jml2.required'            => 'Jumlah tidak boleh kosong',
            ]
        );


        $data                = Ikk::find($id);
        // dd($ikk);
        // $ikk->user_id       = $request->user_id;
        $data['urusan_id']       = $request->urusan_id;
        $data['no_ikk']        = $request->no_ikk;
        // $ikk['urusan']        = $request->urusan;
        $data['ikk_output']           = $request->ikk_output;
        $data['ikk_outcome']           = $request->ikk_outcome;
        $data['rumus']         = $request->rumus;
        // $ikk->ket_jml1   = $request->ket_jml1;
        $data['jml1']          = $request->jml1;
        // $ikk->ket_jml2   = $request->ket_jml2;
        $data['jml2']          = $request->jml2;
        // $ikk->capaian_kinerja    = $request->capaian_kinerja;
        $data['keterangan']    = $request->keterangan;


        if ($request->file_bukti) {

            $fileName = Str::random(12) . '.' . $request->file_bukti->extension();
            $path = 'file/ikk/';
            if (!empty($data->file_bukti) && file_exists( $path . $data->file_bukti)) :
                unlink( $path  . $data->file_bukti);
            endif;
            $data->file_bukti = $fileName;
            $request->file_bukti->move(public_path( $path ), $fileName);
        }


        // $affected = DB::table('ikks')
        //     ->where('id', $id)
        //     ->update($data);

        $data->update();
        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('admin.ikk');
    }

    // hapus file bukti



    // -------------------------------------------------------------
    // FILE BUKTI
    // -------------------------------------------------------------

    // CREATE
    public function createFileBukti($id)
    {
        $data = Ikk::where('id', $id)->first();
        return view('admin.pages.ikk.makro.create.file-bukti', compact('data'));
}

    // STORE
    public function storeFileBukti(Request $request, $id)
    {
        $validator = Validator::make($request->only('cover', 'file_bukti'), [
            'file_bukti' => 'mimes:pdf',
        ], [
            'file_bukti.required'   => 'File bukti tidak boleh kosong',
            'file_bukti.mimes'      => 'File bukti harus dengan extensi pdf',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                $data = Ikk::find($id);
                $data->file_bukti = $request->file_bukti;

                if ($request->file_bukti) {

                    $fileName = 'file_bukti_' . time() . '.' . $request->file_bukti->extension();

                    $path = 'file/ikk/file_bukti/';

                    if (!empty($data->file_bukti) && file_exists( $path . $data->file_bukti)) :
                        unlink( $path  . $data->file_bukti);
                    endif;

                    $data->file_bukti = $fileName;
                    $request->file_bukti->move(public_path( $path ), $fileName);
                }

                // update table
                $data->update();

                Alert::toast('Berhasil disimpan!', 'success');
                return redirect()->route('admin.ikk');
            } catch (\Throwable $th) {
                dd($th);
                Alert::toast('Gagal', 'error');
                return redirect()->back();
            }
        }
    }

    // DELETE
    public function deleteFileBukti($id)
    {

        $data = Ikk::where('id', $id)->first();
        return view('admin.pages.ikk.makro.delete.file-bukti', compact('data'));
    }

    // UPDATE
    public function emptyFileBukti(Request $request, $id)
    {
        $data = Ikk::find($id);

        if (!empty($data->file_bukti) && file_exists('file/ikk/file_bukti/' . $data->file_bukti)) :
            unlink('file/ikk/file_bukti/' . $data->file_bukti);
        endif;

        $data->file_bukti = '';

        $data->update();

        Alert::toast('File Berhasil disimpan!', 'success');
        return redirect()->route('admin.ikk');
    }


    // -------------------------------------------------------------
    // FILE BUKTI END
    // -------------------------------------------------------------



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ikk  $ikk
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = Ikk::where('id', $id)->first();
        return view('admin.pages.ikk.makro.delete', compact('data'));
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
        $data = Ikk::where('id', $id)->first();
        return view('admin.pages.ikk.makro.status', ['data' => $data]);
    }
    public function statusUpdate(Request $request, $id)
    {
        $validator = Validator::make(
            $request->only('status'),
            [
                'status' => 'required'
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        } else {
            try {
                Ikk::where('id', $id)->update([
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
