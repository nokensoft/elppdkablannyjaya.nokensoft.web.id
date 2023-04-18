@extends('admin.layouts.app')
@section('content')
    <!-- start page content wrapper-->
        <div class="row mb-3">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{asset('admin/beranda')}}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="{{asset('admin/profil')}}">Profil</a></li>
                            <li class="breadcrumb-item active">Perangkat Daerah</li>
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

                                <h1 class="fw-bold">Tambah Perangkat Daerah</h1>

                                <form action="{{route('admin.perangkatdaerah.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    {{-- <div class="mb-3 fs-4">
                                        <img src="{{asset('assets/admin/assets/images/users/user-default.png')}}" alt="Logo" width="250px" class="img-thumbnail mb-1">
                                        <input type="file" name="foto" class="form-control form-control-lg">
                                    </div> --}}

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Nama Organisasi</label>
                                        <input type="text" class="form-control form-control-lg" value="{{ old('nama_organisasi')}}" name="nama_organisasi">
                                        @if($errors->has('nama_organisasi'))
                                            <label class="text-danger"> {{ $errors->first('nama_organisasi') }} </label>
                                        @endif
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Urusan</label>
                                        <input type="text" class="form-control form-control-lg" value="{{ old('urusan')}}" name="urusan">
                                        @if($errors->has('urusan'))
                                            <label class="text-danger"> {{ $errors->first('urusan') }} </label>
                                        @endif
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Rumpun</label>
                                        <input type="text" class="form-control form-control-lg" value="{{ old('rumpun')}}" name="rumpun">
                                        @if($errors->has('rumpun'))
                                            <label class="text-danger"> {{ $errors->first('rumpun') }} </label>
                                        @endif
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Tipe Kantor</label>
                                        <input type="text" class="form-control form-control-lg" value="{{ old('tipe_kantor')}}" name="tipe_kantor">
                                        @if($errors->has('tipe_kantor'))
                                            <label class="text-danger"> {{ $errors->first('tipe_kantor') }} </label>
                                        @endif
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Alamat</label>
                                        <input type="text" class="form-control form-control-lg" placeholder="Jalan Raya, Kelurahan, Kecamatan, Kota/Kabupaten." name="alamat">
                                        @if($errors->has('alamat'))
                                            <label class="text-danger"> {{ $errors->first('alamat') }} </label>
                                        @endif
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Kepala Organisasi</label>
                                        <input type="text" class="form-control form-control-lg" value="{{ old('kepala_organisasi')}}" name="kepala_organisasi">
                                        @if($errors->has('kepala_organisasi'))
                                            <label class="text-danger"> {{ $errors->first('kepala_organisasi') }} </label>
                                        @endif
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Jumlah Pegawai</label>
                                        <input type="text" class="form-control form-control-lg" value="{{ old('jumlah_pegawai')}}" name="jumlah_pegawai">
                                        @if($errors->has('jumlah_pegawai'))
                                            <label class="text-danger"> {{ $errors->first('jumlah_pegawai') }} </label>
                                        @endif
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Status</label>
                                        <input type="text" class="form-control form-control-lg" value="{{ old('status')}}" name="status">
                                        @if($errors->has('status'))
                                            <label class="text-danger"> {{ $errors->first('status') }} </label>
                                        @endif
                                    </div>

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