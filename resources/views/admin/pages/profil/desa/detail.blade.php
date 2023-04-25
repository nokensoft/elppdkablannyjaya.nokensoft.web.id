@extends('admin.layouts.app')
@section('content')
    <!-- start page content wrapper-->
        <div class="row mb-3">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{asset('admin/beranda')}}">Beranda</a></li>
                            <li class="breadcrumb-item active">Desa</li>
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
                                <h1 class="fw-bold">Detail Desa {{ $data->nama_desa}} </h1>
                                <p>{{ $data->ikk}}</p>
                                <form>
                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Nama Distrik</label>
                                        <input type="text" class="form-control form-control-lg"
                                        value="{{$data->distrik->nama_distrik ?? 'Nama distrik belum ada'}}" readonly>
                                    </div>
                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Nama Kepala Desa</label>
                                        <input type="text" class="form-control form-control-lg"
                                        value="{{$data->nama_kepala_desa}}" readonly>
                                    </div>
                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Telf</label>
                                        <input type="text" class="form-control form-control-lg"
                                        value="{{ $data->telp }}" readonly>
                                    </div>
                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Email</label>
                                        <input type="text" class="form-control form-control-lg"
                                        value="{{$data->email}}" readonly>
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Alamat</label>
                                        <textarea  rows="2" class="form-control form-control-lg" readonly>{{$data->alamat}}</textarea>

                                    </div>

                                    <div class="border-top border-1 pt-3 mt-4">
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
