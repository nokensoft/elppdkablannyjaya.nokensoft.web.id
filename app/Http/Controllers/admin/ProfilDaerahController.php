<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ProfilDaerah;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use Alert;
use Storage;
use Illuminate\Support\Facades\DB;

class ProfilDaerahController extends Controller
{

    // PEMERINTAH DAERAH
    public function pemerintahdaerah()
    {
        $data = ProfilDaerah::whereId(1)->first();
        return view('admin.pages.profildaerah.pemerintahdaerah.index', compact('data'));
    }

    // EDIT PEMERINTAH DAERAH
    public function edit_pemerintahdaerah()
    {
        $data = ProfilDaerah::whereId(1)->first();
        return view('admin.pages.profildaerah.pemerintahdaerah.edit', compact('data'));
    }

    // UPDATE PEMERINTAH DAERAH
    public function update_pemerintahdaerah(Request $request, $id)
    {
        $request->validate([
           'pemda_namainstansi'             => 'required',
           'pemda_lambang'                  => 'required',
        ],
        [
            'pemda_namainstansi.required'   => 'Nama Instansi tidak boleh kosong',
            'pemda_lambang.required'        => 'Lambang Pemerintah Daerah tidak boleh kosong',
        ]);

        $pengaturan = new ProfilDaerah();

        $data['pemda_namainstansi']         = $request->pemda_namainstansi;
        $data['pemda_lambang']              = $request->pemda_lambang;
        $data['pemda_peta']                 = $request->pemda_peta;

        ProfilDaerah::whereId($id)->update($data);

        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('admin.profildaerah.pemerintahdaerah');
    }

    /*
    --------------------------------------------------------------------------
    */

    // KEPALA DAERAH
    public function kepaladaerah()
    {
        $data = ProfilDaerah::whereId(1)->first();
        return view('admin.pages.profildaerah.kepaladaerah.index', compact('data'));
    }

    // EDIT KEPALA DAERAH
    public function edit_kepaladaerah()
    {
        $data = ProfilDaerah::whereId(1)->first();
        return view('admin.pages.profildaerah.kepaladaerah.edit', compact('data'));
    }

    // UPDATE KEPALA DAERAH
    public function update_kepaladaerah(Request $request, $id)
    {
        $request->validate([
           'kepala_nama' => 'required',
        ],
        [
            'kepala_nama.required' => 'Nama kepala daerah tidak boleh kosong',
        ]);

        $pengaturan = new ProfilDaerah();

        $data['kepala_nama']                = $request->kepala_nama;
        $data['kepala_nik']                 = $request->kepala_nik;
        $data['kepala_tgl_lahir']           = $request->kepala_tgl_lahir;
        $data['kepala_tgl_pelantikan']      = $request->kepala_tgl_pelantikan;
        $data['kepala_no_sk']               = $request->kepala_no_sk;
        $data['kepala_file_sk']             = $request->kepala_file_sk;
        $data['kepala_asal_partai']         = $request->kepala_asal_partai;
        $data['kepala_visi_misi']           = $request->kepala_visi_misi;
        $data['kepala_riwayat']             = $request->kepala_riwayat;
        $data['kepala_foto']                = $request->kepala_foto;

        ProfilDaerah::whereId($id)->update($data);

        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('admin.profildaerah.kepaladaerah');
    }

    /*
    --------------------------------------------------------------------------
    */

    // WAKIL KEPALA DAERAH
    public function wakilkepaladaerah()
    {
        $data = ProfilDaerah::whereId(1)->first();
        return view('admin.pages.profildaerah.wakilkepaladaerah.index', compact('data'));
    }

    // EDIT WAKIL KEPALA DAERAH
    public function edit_wakilkepaladaerah()
    {
        $data = ProfilDaerah::whereId(1)->first();
        return view('admin.pages.profildaerah.wakilkepaladaerah.edit', compact('data'));
    }

    // UPDATE WAKIL KEPALA DAERAH
    public function update_wakilkepaladaerah(Request $request, $id)
    {
        $request->validate([
           'wakil_nama' => 'required',
        ],
        [
            'wakil_nama.required' => 'Nama wakil kepala daerah tidak boleh kosong',
        ]);

        $pengaturan = new ProfilDaerah();

        $data['wakil_nama']                 = $request->wakil_nama;
        $data['wakil_nik']                  = $request->wakil_nik;
        $data['wakil_tgl_lahir']            = $request->wakil_tgl_lahir;
        $data['wakil_tgl_pelantikan']       = $request->wakil_tgl_pelantikan;
        $data['wakil_no_sk']                = $request->wakil_no_sk;
        $data['wakil_file_sk']              = $request->wakil_file_sk;
        $data['wakil_asal_partai']          = $request->wakil_asal_partai;
        $data['wakil_visi_misi']            = $request->wakil_visi_misi;
        $data['wakil_riwayat']              = $request->wakil_riwayat;
        $data['wakil_foto']                 = $request->wakil_foto;

        ProfilDaerah::whereId($id)->update($data);

        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('admin.profildaerah.wakilkepaladaerah');
    }

    /*
    --------------------------------------------------------------------------
    */

    // SEKRETARIS DAERAH
    public function sekretarisdaerah()
    {
        $data = ProfilDaerah::whereId(1)->first();
        return view('admin.pages.profildaerah.sekretarisdaerah.index', compact('data'));
    }

    // EDIT SEKRETARIS DAERAH
    public function edit_sekretarisdaerah()
    {
        $data = ProfilDaerah::whereId(1)->first();
        return view('admin.pages.profildaerah.sekretarisdaerah.edit', compact('data'));
    }

    // UPDATE WAKIL KEPALA DAERAH
    public function update_sekretarisdaerah(Request $request, $id)
    {
        $request->validate([
           'sekretaris_nama' => 'required',
        ],
        [
            'sekretaris_nama.required' => 'Nama sekretaris daerah tidak boleh kosong',
        ]);

        $pengaturan = new ProfilDaerah();

        $data['sekretaris_nama']            = $request->sekretaris_nama;
        $data['sekretaris_nik']             = $request->sekretaris_nik;
        $data['sekretaris_tgl_lahir']       = $request->sekretaris_tgl_lahir;
        $data['sekretaris_nip']             = $request->sekretaris_nip;
        $data['sekretaris_telp']            = $request->sekretaris_telp;
        $data['sekretaris_pangkat']         = $request->sekretaris_pangkat;
        $data['sekretaris_golongan']        = $request->sekretaris_golongan;
        $data['sekretaris_no_sk']           = $request->sekretaris_no_sk;
        $data['sekretaris_file_sk']         = $request->sekretaris_file_sk;
        $data['sekretaris_tmt']             = $request->sekretaris_tmt;
        $data['sekretaris_foto']            = $request->sekretaris_foto;

        ProfilDaerah::whereId($id)->update($data);

        alert()->success('Berhasil', 'Sukses!!')->autoclose(1100);
        return redirect()->route('admin.profildaerah.sekretarisdaerah');
    }

    /*
    --------------------------------------------------------------------------
    */

}
