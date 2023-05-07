@extends('admin.layouts.app')
@section('content')
<!-- start page content wrapper-->
<div class="row mb-3">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{asset('admin/beranda')}}">Beranda</a></li>
                    <li class="breadcrumb-item">Kepala Daerah</li>
                    <li class="breadcrumb-item active">Ubah</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row" id="ubah">
    <div class="col">
        <div class="card">
            <div class="card-body">

                <div class="row">

                    <!-- .col start -->
                    <div class="col-lg-6  mx-auto border border-4 border-info rounded shadow-lg p-5 my-5">

                        <h1 class="fw-bold">Ubah Kepala Daerah</h1>

                        <form action="{{route('admin.profildaerah.kepaladaerah.update',$data->id)}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3 fs-4">
                                <label for="kepala_nama" class="fw-bold d-block mb-2">Nama Kepala Daerah</label>
                                <input type="text" class="form-control form-control-lg" id="kepala_nama"
                                    name="kepala_nama"
                                    value="{{old('kepala_nama') ? old('kepala_nama') : $data->kepala_nama }}">

                                @if($errors->has('kepala_nama'))
                                <small class="text-danger"> {{ $errors->first('kepala_nama') }} </small>
                                @endif

                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="kepala_nik" class="fw-bold d-block mb-2">NIK</label>
                                <input type="text" class="form-control form-control-lg" id="kepala_nik" name="kepala_nik" value="{{old('kepala_nik') ? old('kepala_nik') : $data->kepala_nik }}">

                                @if($errors->has('kepala_nik'))
                                <small class="text-danger"> {{ $errors->first('kepala_nik') }} </small>
                                @endif

                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="kepala_tgl_lahir" class="fw-bold d-block mb-2">Tanggal Lahir</label>
                                <input type="text" class="form-control form-control-lg" id="kepala_tgl_lahir" name="kepala_tgl_lahir" value="{{old('kepala_tgl_lahir') ? old('kepala_tgl_lahir') : $data->kepala_tgl_lahir }}">

                                @if($errors->has('kepala_tgl_lahir'))
                                <small class="text-danger"> {{ $errors->first('kepala_tgl_lahir') }} </small>
                                @endif

                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="kepala_tgl_pelantikan" class="fw-bold d-block mb-2">Tanggal Pelantikan</label>
                                <input type="text" class="form-control form-control-lg" id="kepala_tgl_pelantikan"
                                    name="kepala_tgl_pelantikan"
                                    value="{{old('kepala_tgl_pelantikan') ? old('kepala_tgl_pelantikan') : $data->kepala_tgl_pelantikan }}">

                                @if($errors->has('kepala_tgl_pelantikan'))
                                <small class="text-danger"> {{ $errors->first('kepala_tgl_pelantikan') }} </small>
                                @endif

                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="kepala_no_sk" class="fw-bold d-block mb-2">Nomor SK</label>
                                <input type="text" class="form-control form-control-lg" id="kepala_no_sk"
                                    name="kepala_no_sk"
                                    value="{{old('kepala_no_sk') ? old('kepala_no_sk') : $data->kepala_no_sk }}">

                                @if($errors->has('kepala_no_sk'))
                                <small class="text-danger"> {{ $errors->first('kepala_no_sk') }} </small>
                                @endif

                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="kepala_file_sk" class="fw-bold d-block mb-2">File SK</label>
                                <input type="text" class="form-control form-control-lg" id="kepala_file_sk"
                                    name="kepala_file_sk"
                                    value="{{old('kepala_file_sk') ? old('kepala_file_sk') : $data->kepala_file_sk }}">

                                @if($errors->has('kepala_file_sk'))
                                <small class="text-danger"> {{ $errors->first('kepala_file_sk') }} </small>
                                @endif

                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="kepala_asal_partai" class="fw-bold d-block mb-2">Asal Partai</label>
                                <input type="text" class="form-control form-control-lg" id="kepala_asal_partai" name="kepala_asal_partai" value="{{old('kepala_asal_partai') ? old('kepala_asal_partai') : $data->kepala_asal_partai }}">

                                @if($errors->has('kepala_asal_partai'))
                                <small class="text-danger"> {{ $errors->first('kepala_asal_partai') }} </small>
                                @endif

                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="kepala_visi_misi" class="fw-bold d-block mb-2">Visi & Misi</label>
                                <textarea name="kepala_visi_misi" id="kepala_visi_misi" cols="30" rows="10" class="form-control form-control-lg">{{old('kepala_visi_misi') ? old('kepala_visi_misi') : $data->kepala_visi_misi }}</textarea>

                                @if($errors->has('kepala_visi_misi'))
                                <small class="text-danger"> {{ $errors->first('kepala_visi_misi') }} </small>
                                @endif

                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="kepala_riwayat" class="fw-bold d-block mb-2">Riwayat Hidup</label>
                                <textarea name="kepala_riwayat" id="kepala_riwayat" cols="30" rows="10" class="form-control form-control-lg">{{old('kepala_riwayat') ? old('kepala_riwayat') : $data->kepala_riwayat }}</textarea>

                                @if($errors->has('kepala_riwayat'))
                                <small class="text-danger"> {{ $errors->first('kepala_riwayat') }} </small>
                                @endif

                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="kepala_foto" class="fw-bold d-block mb-2">Foto Kepala Daerah</label>
                                @if ($data->kepala_foto == null)
                                <img src="{{asset('gambar/default.png')}}" alt="gambar" width="250px" class="img-thumbnail">
                                @else
                                <img src="{{ asset('gambar/' . $data->kepala_foto)}}" alt="gambar" class="img-fluid img-thumbnail" width="250px" class="img-thumbnail"></td>
                                @endif

                                <input type="text" class="form-control form-control-lg mt-2" id="kepala_foto" name="kepala_foto" value="{{old('kepala_foto') ? old('kepala_foto') : $data->kepala_foto }}">
                                <small class="text-muted">Gambar diunggah terlebih dahulu pada halaman <a href="{{route('admin.gambar')}}" target="_blank" class="link-info">Kelolah Gambar</a>, kemudian copy & paste alamat gambarnya.</small>

                                {{-- <input type="file" class="form-control form-control-lg mt-2" name="kepala_foto"> --}}
                            </div>
                            <!-- input item end -->

                            <div class="border-top border-1 pt-3 mt-4">
                                <button type="submit" class="btn btn-info waves-effect waves-light fs-4">
                                    <i class="fas fa-save me-1"></i> Simpan
                                </button>
                                <a href="{{URL::previous()}}"
                                    class="btn btn-outline-light waves-effect waves-light fs-4">
                                    <i class="fas fa-arrow-left me-1"></i> Kembali
                                </a>
                            </div>
                            <!-- submit button end -->

                        </form>
                        <!-- form end -->

                    </div>
                    <!-- .col end -->

                </div>
                <!-- .row end -->

            </div>
        </div>
    </div>
</div>
<!-- end row -->

<!--end wrapper-->

@stop

@push('script-footer')
<!-- Chart JS -->
<script src="{{ asset('assets/admin/assets/libs/chart.js/Chart.bundle.min.js')}}"></script>

<script src="{{ asset('assets/admin/assets/libs/moment/min/moment.min.js')}}"></script>
<script src="{{ asset('assets/admin/assets/libs/jquery.scrollto/jquery.scrollTo.min.js')}}"></script>

<!-- Chat app -->
<script src="{{ asset('assets/admin/assets/js/pages/jquery.chat.js')}}"></script>

<!-- Todo app -->
<script src="{{ asset('assets/admin/assets/js/pages/jquery.todo.js')}}"></script>

<!-- Dashboard init JS -->
<script src="{{ asset('assets/admin/assets/js/pages/dashboard-3.init.js')}}"></script>
@endpush
