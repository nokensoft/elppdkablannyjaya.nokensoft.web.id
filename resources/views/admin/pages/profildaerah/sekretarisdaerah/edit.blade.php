@extends('admin.layouts.app')
@section('content')
<!-- start page content wrapper-->
<div class="row mb-3">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{asset('admin/beranda')}}">Beranda</a></li>
                    <li class="breadcrumb-item">Sekretaris Daerah</li>
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

                        <h1 class="fw-bold">Ubah Sekretaris Daerah</h1>

                        <form action="{{route('admin.profildaerah.sekretarisdaerah.update',$data->id)}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3 fs-4">
                                <label for="sekretaris_nama" class="fw-bold d-block mb-2">Nama Sekretaris Daerah</label>
                                <input type="text" class="form-control form-control-lg" id="sekretaris_nama" name="sekretaris_nama" value="{{old('sekretaris_nama') ? old('sekretaris_nama') : $data->sekretaris_nama }}">

                                @if($errors->has('sekretaris_nama'))
                                <small class="text-danger"> {{ $errors->first('sekretaris_nama') }} </small>
                                @endif

                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="sekretaris_nik" class="fw-bold d-block mb-2">NIK</label>
                                <input type="text" class="form-control form-control-lg" id="sekretaris_nik" name="sekretaris_nik" value="{{old('sekretaris_nik') ? old('sekretaris_nik') : $data->sekretaris_nik }}">

                                @if($errors->has('sekretaris_nik'))
                                <small class="text-danger"> {{ $errors->first('sekretaris_nik') }} </small>
                                @endif

                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="sekretaris_tgl_lahir" class="fw-bold d-block mb-2">Tanggal Lahir</label>
                                <input type="text" class="form-control form-control-lg" id="sekretaris_tgl_lahir" name="sekretaris_tgl_lahir" value="{{old('sekretaris_tgl_lahir') ? old('sekretaris_tgl_lahir') : $data->sekretaris_tgl_lahir }}">

                                @if($errors->has('sekretaris_tgl_lahir'))
                                <small class="text-danger"> {{ $errors->first('sekretaris_tgl_lahir') }} </small>
                                @endif

                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="sekretaris_nip" class="fw-bold d-block mb-2">NIP</label>
                                <input type="text" class="form-control form-control-lg" id="sekretaris_nip" name="sekretaris_nip" value="{{old('sekretaris_nip') ? old('sekretaris_nip') : $data->sekretaris_nip }}">

                                @if($errors->has('sekretaris_nip'))
                                <small class="text-danger"> {{ $errors->first('sekretaris_nip') }} </small>
                                @endif

                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="sekretaris_telp" class="fw-bold d-block mb-2">Nomor Telepon</label>
                                <input type="text" class="form-control form-control-lg" id="sekretaris_telp" name="sekretaris_telp" value="{{old('sekretaris_telp') ? old('sekretaris_telp') : $data->sekretaris_telp }}">

                                @if($errors->has('sekretaris_telp'))
                                <small class="text-danger"> {{ $errors->first('sekretaris_telp') }} </small>
                                @endif

                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="sekretaris_pangkat" class="fw-bold d-block mb-2">Pangkat</label>
                                <input type="text" class="form-control form-control-lg" id="sekretaris_pangkat" name="sekretaris_pangkat" value="{{old('sekretaris_pangkat') ? old('sekretaris_pangkat') : $data->sekretaris_pangkat }}">

                                @if($errors->has('sekretaris_pangkat'))
                                <small class="text-danger"> {{ $errors->first('sekretaris_pangkat') }} </small>
                                @endif

                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="sekretaris_golongan" class="fw-bold d-block mb-2">Golongan</label>
                                <input type="text" class="form-control form-control-lg" id="sekretaris_golongan" name="sekretaris_golongan" value="{{old('sekretaris_golongan') ? old('sekretaris_golongan') : $data->sekretaris_golongan }}">

                                @if($errors->has('sekretaris_golongan'))
                                <small class="text-danger"> {{ $errors->first('sekretaris_golongan') }} </small>
                                @endif

                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="sekretaris_no_sk" class="fw-bold d-block mb-2">Nomor SK</label>
                                <input type="text" class="form-control form-control-lg" id="sekretaris_no_sk" name="sekretaris_no_sk" value="{{old('sekretaris_no_sk') ? old('sekretaris_no_sk') : $data->sekretaris_no_sk }}">

                                @if($errors->has('sekretaris_no_sk'))
                                <small class="text-danger"> {{ $errors->first('sekretaris_no_sk') }} </small>
                                @endif

                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="sekretaris_file_sk" class="fw-bold d-block mb-2">File SK</label>
                                <input type="text" class="form-control form-control-lg" id="sekretaris_file_sk" name="sekretaris_file_sk" value="{{old('sekretaris_file_sk') ? old('sekretaris_file_sk') : $data->sekretaris_file_sk }}">

                                @if($errors->has('sekretaris_file_sk'))
                                <small class="text-danger"> {{ $errors->first('sekretaris_file_sk') }} </small>
                                @endif

                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="sekretaris_tmt" class="fw-bold d-block mb-2">TMT</label>
                                <input type="text" class="form-control form-control-lg" id="sekretaris_tmt" name="sekretaris_tmt" value="{{old('sekretaris_tmt') ? old('sekretaris_tmt') : $data->sekretaris_tmt }}">

                                @if($errors->has('sekretaris_tmt'))
                                <small class="text-danger"> {{ $errors->first('sekretaris_tmt') }} </small>
                                @endif

                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="sekretaris_foto" class="fw-bold d-block mb-2">Foto Sekretaris Daerah</label>
                                @if ($data->sekretaris_foto == null)
                                <img src="{{asset('gambar/default.png')}}" alt="gambar" width="250px" class="img-thumbnail">
                                @else
                                <img src="{{ asset('gambar/' . $data->sekretaris_foto)}}" alt="gambar" class="img-fluid img-thumbnail" width="250px" class="img-thumbnail"></td>
                                @endif

                                <input type="text" class="form-control form-control-lg mt-2" id="sekretaris_foto" name="sekretaris_foto" value="{{old('sekretaris_foto') ? old('sekretaris_foto') : $data->sekretaris_foto }}">
                                <small class="text-muted">Gambar diunggah terlebih dahulu pada halaman <a href="{{route('admin.gambar')}}" target="_blank" class="link-info">Kelolah Gambar</a>, kemudian copy & paste alamat gambarnya.</small>

                                {{-- <input type="file" class="form-control form-control-lg mt-2" name="sekretaris_foto"> --}}

                            </div>
                            <!-- input item end -->

                            <div class="border-top border-1 pt-3 mt-4">
                                <button type="submit" class="btn btn-info waves-effect waves-light fs-4">
                                    <i class="fas fa-save me-1"></i> Simpan
                                </button>
                                <a href="{{URL::previous()}}" class="btn btn-outline-light waves-effect waves-light fs-4">
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
