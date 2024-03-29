@extends('admin.layouts.app')
@section('content')
<!-- start page content wrapper-->
<div class="row mb-3">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{asset('admin/beranda')}}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{asset('admin/lppd/perangkatdaerah')}}">Perangkat Daerah</a>
                    </li>
                    <li class="breadcrumb-item active">Tambah</li>
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

                        <h3 class="fw-bold mb-4">Tambah Perangkat Daerah</h3>

                        <form action="{{route('admin.perangkatdaerah.store')}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3 fs-4">
                                <label for="nama_organisasi" class="fw-bold mb-2 d-block">Nama Organisasi</label>
                                <input type="text" class="form-control form-control-lg" placeholder="Nama Instansi atau Organisasi" value="{{ old('nama_organisasi') }}" name="nama_organisasi">

                                @if($errors->has('nama_organisasi'))
                                <label class="text-danger"> {{ $errors->first('nama_organisasi') }} </label>
                                @endif

                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="foto_gedung" class="fw-bold d-block mb-2">Foto Gedung</label>
                                <img src="{{asset('gambar/default.png')}}" alt="gambar" width="250px" class="img-thumbnail">

                                <input type="text" class="form-control form-control-lg mt-2" id="foto_gedung" name="foto_gedung" value="{{old('foto_gedung') ? old('foto_gedung') : '' }}" placeholder="Isi nama file (contoh : foto-gedung.png)">
                                <small class="text-muted">Gambar diunggah terlebih dahulu pada halaman <a href="{{route('admin.gambar')}}" target="_blank" class="link-info">Kelolah Gambar</a>, kemudian copy & paste alamat gambarnya.</small>

                            </div>
                            <!-- input item end -->


                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold mb-2 d-block">Alamat</label>
                                <textarea name="alamat" id="" rows="5" class="form-control form-control-lg" placeholder="Alamat Kantor">{{ old('alamat') }}</textarea>

                                @if($errors->has('alamat'))
                                <label class="text-danger"> {{ $errors->first('alamat') }} </label>
                                @endif

                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold mb-2 d-block">Nama Pimpinan</label>
                                <input type="text" class="form-control form-control-lg" placeholder="Nama Pimpinan Dinas" value="{{ old('nama_pimpinan') }}" name="nama_pimpinan">

                                @if($errors->has('nama_pimpinan'))
                                <label class="text-danger"> {{ $errors->first('nama_pimpinan') }} </label>
                                @endif

                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold mb-2 d-block">Jumlah Pegawai</label>
                                <input type="text" class="form-control form-control-lg" placeholder="Jumlah Pegawai" value="{{ old('jumlah_pegawai') }}" name="jumlah_pegawai">

                                @if($errors->has('jumlah_pegawai'))
                                <label class="text-danger"> {{ $errors->first('jumlah_pegawai') }} </label>
                                @endif

                            </div>
                            <!-- input item end -->

                            <div class="border-top border-1 pt-3 mt-4"></div>

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold mb-2 d-block">Alamat Email</label>
                                <input type="text" class="form-control form-control-lg" placeholder="Alamat email" value="{{ old('email') }}" name="email">

                                @if($errors->has('email'))
                                <label class="text-danger"> {{ $errors->first('email') }} </label>
                                @endif

                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold mb-2 d-block">Kata Sandi</label>
                                {!! Form::password('password',['id'=>'password','class'=>'form-control
                                form-control-lg','placeholder'=>'Kata sandi pengguna']) !!}

                                @if($errors->has('password'))
                                <label class="text-danger"> {{ $errors->first('password') }} </label>
                                @endif

                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold mb-2 d-block">Konfirmasi Kata Sandi</label>
                                {!! Form::password('confirm-password',['id'=>'confirm-password','class'=>'form-control
                                form-control-lg','placeholder'=>'Konfirmasi kata sandi pengguna']) !!}

                                @if($errors->has('confirm-password'))
                                <label class="text-danger"> {{ $errors->first('confirm-password') }} </label>
                                @endif

                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="foto_gedung" class="fw-bold d-block mb-2">Foto Gedung</label>
                                <img src="{{ asset('gambar/default.png') }}" alt="gambar" width="250px" class="img-thumbnail">

                                <input type="text" class="form-control form-control-lg mt-2" id="foto_gedung" name="foto_gedung" value="{{old('foto_gedung') ? old('foto_gedung') : '' }}">
                                <small class="text-muted">Gambar diunggah terlebih dahulu pada halaman <a href="{{route('admin.gambar')}}" target="_blank" class="link-info">Kelolah Gambar</a>, kemudian copy & paste alamat gambarnya.</small>

                            </div>
                            <!-- input item end -->

                            <div class="border-top border-1 pt-3 mt-4">
                                <button type="submit" class="btn btn-info waves-effect waves-light fs-4">
                                    <i class="fas fa-save me-1"></i> Simpan
                                </button>
                                <a href="{{URL::previous()}}"
                                    class="btn btn-outline-light border-0 waves-effect waves-light fs-4">
                                    <i class="fas fa-arrow-left me-1"></i> Kembali
                                </a>
                            </div>
                            <!-- input item end -->

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
