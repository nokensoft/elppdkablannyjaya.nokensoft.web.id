@extends('admin.layouts.app')
@section('content')
    <!-- start page content wrapper-->
        <div class="row mb-3">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{asset('admin/beranda')}}">Beranda</a></li>
                            <li class="breadcrumb-item active">Pemerintah Daerah</li>
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

                                <h1 class="fw-bold mb-4">Tambah Data Profil DPRD</h1>

                                <form action="{{route('admin.dprd.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Foto</label>
                                        <input type="text" class="form-control form-control-lg" placeholder="Alamat file gambar" name="foto" value="{{ old('foto')}}">
                                        <small class="text-muted">Sisipkan alamat file gambar. Gambar diunggah terlebih dahulu  pada halaman <a href="{{route('admin.gambar')}}" target="_blank">Kelolah Gambar</a></small>
                                        
                                        @if($errors->has('foto '))
                                            <label class="text-danger"> {{ $errors->first('foto ') }} </label>
                                        @endif
                                    </div>
                                    <!-- input item end -->

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Nama Lengkap</label>
                                        <input type="text" class="form-control form-control-lg" placeholder="Nama Lengkap" name="nama_lengkap" value="{{ old('nama_lengkap')}}">
                                        
                                        @if($errors->has('nama_lengkap '))
                                            <label class="text-danger"> {{ $errors->first('nama_lengkap ') }} </label>
                                        @endif
                                    </div>
                                    <!-- input item end -->

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Jabatan</label>
                                        <input type="text" class="form-control form-control-lg" placeholder="Jabatan" name="jabatan">
                                        
                                        @if($errors->has('jabatan '))
                                            <label class="text-danger"> {{ $errors->first('jabatan ') }} </label>
                                        @endif
                                    </div>
                                    <!-- input item end -->

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">NIK</label>
                                        <input type="text" class="form-control form-control-lg" placeholder="1234332234" name="nik">
                                        
                                        @if($errors->has('nik '))
                                            <label class="text-danger"> {{ $errors->first('nik ') }} </label>
                                        @endif
                                    </div>
                                    <!-- input item end -->

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Alamat</label>
                                        <input type="text" class="form-control form-control-lg" placeholder="Jalan Raya, Kelurahan, Kecamatan, Kota/Kabupaten." name="alamat">
                                        
                                        @if($errors->has('alamat '))
                                            <label class="text-danger"> {{ $errors->first('alamat ') }} </label>
                                        @endif
                                    </div>
                                    <!-- input item end -->

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">TTL</label>
                                        <input type="text" class="form-control form-control-lg"  name="ttl" placeholder="Tempat, Tanggal Lahir">
                                        
                                        @if($errors->has('ttl '))
                                            <label class="text-danger"> {{ $errors->first('ttl ') }} </label>
                                        @endif
                                    </div>
                                    <!-- input item end -->

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Nama Partai</label>
                                        <input type="text" class="form-control form-control-lg" name="nama_partai"  placeholder="Nama Partai">
                                        
                                        @if($errors->has('nama_partai '))
                                            <label class="text-danger"> {{ $errors->first('nama_partai ') }} </label>
                                        @endif
                                    </div>
                                    <!-- input item end -->

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Pendidikan</label>
                                        <input type="text" class="form-control form-control-lg" name="pendidikan" placeholder="Pendidikan Terakhir">
                                        
                                        @if($errors->has('pendidikan '))
                                            <label class="text-danger"> {{ $errors->first('pendidikan ') }} </label>
                                        @endif
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
