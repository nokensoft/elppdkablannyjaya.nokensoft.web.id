@extends('admin.layouts.app')
@section('content')
<!-- start page content wrapper-->
<div class="row mb-3">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{asset('admin/beranda')}}">Beranda</a></li>
                    <li class="breadcrumb-item">Data Master</li>
                    <li class="breadcrumb-item">DPRD</li>
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

                        <h1 class="fw-bold mb-4">Ubah Profil DPRD</h1>

                        <form action="{{route('admin.dprd.update',$data->id)}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')



                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">Nama Lengkap</label>
                                <input type="text" class="form-control form-control-lg" name="nama_lengkap"
                                    value="{{old('nama_lengkap',$data->nama_lengkap)}}">

                                @if($errors->has('nama_lengkap'))
                                <label class="text-danger"> {{ $errors->first('nama_lengkap') }} </label>
                                @endif
                            </div>
                            <!-- input item end -->
                            
                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">Jabatan</label>
                                <input type="text" class="form-control form-control-lg" name="jabatan"
                                    value="{{old('jabatan', $data->jabatan)}}">

                                @if($errors->has('jabatan'))
                                <label class="text-danger"> {{ $errors->first('jabatan') }} </label>
                                @endif
                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">NIK</label>
                                <input type="text" class="form-control form-control-lg" name="nik"
                                    value="{{old('nik',$data->nik)}}">

                                @if($errors->has('nik'))
                                <label class="text-danger"> {{ $errors->first('nik') }} </label>
                                @endif
                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">TTL</label>
                                <input type="text" class="form-control form-control-lg" value="{{old('',$data->ttl)}}"
                                    name="ttl">

                                @if($errors->has('ttl'))
                                <label class="text-danger"> {{ $errors->first('ttl') }} </label>
                                @endif
                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">Alamat</label>
                                <textarea name="alamat" class="form-control form-control-lg"
                                    rows="2">{{ old('',$data->alamat) }}</textarea>

                                @if($errors->has('alamat'))
                                <label class="text-danger"> {{ $errors->first('alamat') }} </label>
                                @endif
                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">Nama Partai</label>
                                <input type="text" class="form-control form-control-lg"
                                    value="{{old('',$data->nama_partai)}}" name="nama_partai">
                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">Pendidikan</label>
                                <input type="text" class="form-control form-control-lg"
                                    value="{{old('', $data->pendidikan)}}" name="pendidikan">

                                @if($errors->has('pendidikan'))
                                <label class="text-danger"> {{ $errors->first('pendidikan') }} </label>
                                @endif
                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="foto" class="fw-bold d-block mb-2">Foto</label>
                                @if ($data->foto == null)
                                <img src="{{asset('gambar/default.png')}}" alt="gambar" width="250px" class="img-thumbnail">
                                @else
                                <img src="{{ asset('gambar/' . $data->foto)}}" alt="gambar" class="img-fluid img-thumbnail" width="250px" class="img-thumbnail"></td>
                                @endif

                                <input type="text" class="form-control form-control-lg mt-2" id="foto" name="foto" value="{{old('foto') ? old('foto') : $data->foto }}">
                                <small class="text-muted">Gambar diunggah terlebih dahulu pada halaman <a href="{{route('admin.gambar')}}" target="_blank" class="link-info">Kelolah Gambar</a>, kemudian copy & paste alamat gambarnya.</small>

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

                        </form>

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
