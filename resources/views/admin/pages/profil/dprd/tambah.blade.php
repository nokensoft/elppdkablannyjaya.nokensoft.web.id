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

                                <h1 class="fw-bold">Tambah Data Profil DPRD</h1>

                                <form action="{{route('admin.dprd.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3 fs-4">
                                        <img src="{{asset('assets/admin/assets/images/users/user-default.png')}}" alt="Logo" width="250px" class="img-thumbnail mb-1">

                                        <input type="file" name="foto" class="form-control form-control-lg">

                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Nama Lengkap</label>
                                        <input type="text" class="form-control form-control-lg" placeholder="Nama Lengkap" name="nama_lengkap">
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Jabatan</label>
                                        <input type="text" class="form-control form-control-lg" placeholder="Jabatan" name="jabatan">
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">NIK</label>
                                        <input type="text" class="form-control form-control-lg" placeholder="1234332234" name="nik">
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Alamat</label>
                                        <input type="text" class="form-control form-control-lg" placeholder="Jalan Raya, Kelurahan, Kecamatan, Kota/Kabupaten." name="alamat">
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">TTL</label>
                                        <input type="text" class="form-control form-control-lg"  name="ttl" value="Nama Tempat, 01 Bulan 1970">
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Nama Partai</label>
                                        <input type="text" class="form-control form-control-lg" name="nama_partai"  value="Nama Partai">
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Pendidikan</label>
                                        <input type="text" class="form-control form-control-lg" name="pendidikan" value="Strata Satu (S1)">
                                    </div>

                                    {{-- <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Perjalanan Dinas</label>
                                        <input type="text" class="form-control form-control-lg bg-secondary text-light" value="33 Kali" disabled>
                                        <a href="#" class="link-info mt-1 d-block">Olah Data</a>
                                    </div> --}}

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
