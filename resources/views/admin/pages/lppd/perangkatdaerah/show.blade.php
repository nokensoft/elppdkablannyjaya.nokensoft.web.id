@extends('admin.layouts.app')
@section('content')
    <!-- start page content wrapper-->
        <div class="row mb-3">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{asset('admin/beranda')}}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="{{asset('admin/lppd/perangkatdaerah')}}">Perangkat Daerah</a></li>
                            <li class="breadcrumb-item active">Detail</li>
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

                                <h3 class="text-center fw-bold">Detail Data {{ $data->perangkatdaerah->nama_organisasi ?? '' }}</h3>
                                <br>
                                <form>
                                    <div class="mb-3 fs-4 text-center">
                                        @if(!$data->perangkatdaerah->foto_gedung)
                                        <img src="{{asset('assets/admin/assets/images/users/user-default.png')}}"
                                        alt="Logo" width="250px" class="img-thumbnail mb-1">
                                        @else
                                        <img src="{{asset('file/foto/perangkatdaerah')}}/{{ $data->perangkatdaerah->foto_gedung }}"
                                        alt="Logo" width="250px" class="img-thumbnail mb-1">
                                        @endif
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Nama Organisasi</label>
                                        <input type="text" class="form-control form-control-lg" readonly value="{{ $data->perangkatdaerah->nama_organisasi ?? '' }}" >
                                    </div>
                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Urusan</label>
                                        <input type="text" class="form-control form-control-lg" readonly value="{{ $data->perangkatdaerah->urusan ?? '' }}" >
                                    </div>
                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Tipe Kantor</label>
                                        <input type="text" class="form-control form-control-lg" readonly value="{{ $data->perangkatdaerah->tipe_kantor ?? '' }}" >
                                    </div>
                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Alamat</label>
                                        <textarea ows="5" class="form-control form-control-lg" readonly>{{ $data->perangkatdaerah->alamat ?? ''}}</textarea>
                                    </div>


                                    <div class="mb-2 fs-4">
                                        <label for="" class="fw-bold">Nama Pimpinan</label>
                                        <input type="text" class="form-control form-control-lg" readonly value="{{ $data->perangkatdaerah->nama_pimpinan ?? '' }}" >
                                    </div>
                                    <div class="mb-2 fs-4">
                                        <label for="" class="fw-bold">Jumlah Pegawai</label>
                                        <input type="text" class="form-control form-control-lg" readonly value="{{ $data->perangkatdaerah->jumlah_pegawai ?? '' }}" >
                                    </div>
                                    <div class="border-top border-1 pt-3 mt-4"></div>
                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Nama Pengguna</label>
                                        <input type="text" class="form-control form-control-lg" readonly value="{{ $data->name ?? '' }}">
                                    </div>
                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Email Pengguna</label>
                                        <input type="text" class="form-control form-control-lg" readonly value="{{ $data->email ?? '' }}" >
                                    </div>




                                    <div class="border-top border-1 pt-3 mt-4">
                                        <a href="{{route('admin.perangkatdaerah.edit',$data->id)}}" class="btn btn-outline-warning waves-effect waves-light fs-4">
                                            <i class="fas fa-edit me-1"></i> Ubah
                                        </a>
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
