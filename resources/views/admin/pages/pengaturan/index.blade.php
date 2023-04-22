@extends('admin.layouts.app')
@section('content')
    <!-- start page content wrapper-->
        <div class="row mb-3">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{asset('admin/beranda')}}">Beranda</a></li>
                            <li class="breadcrumb-item active">Pengaturan</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h1 class="fw-bold">Pengaturan</h1>

                        <div class="row">

                            <!-- .col start -->
                            <div class="col-lg-6">

                                <table class="table table-bordered fs-4">
                                    <tbody>
                                        <tr>
                                            <td>Informasi Situs</td>
                                            <td class="fw-bold">{!! $data->judul_situs !!}</td>
                                        </tr>
                                        <tr>
                                            <td>Desktripsi</td>
                                            <td class="fw-bold">{!! $data->deskripsi_situs !!}</td>
                                        </tr>
                                        <tr>
                                            <td>Logo</td>
                                            <td class="fw-bold">
                                                <img src="{{ asset($data->logo) }}" alt="Logo" width="250px">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Favicon</td>
                                            <td class="fw-bold">
                                                <img src="{{ asset($data->favicon) }}" alt="Favicon" width="50px">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tentang Aplikasi</td>
                                            <td class="fw-bold">{!! $data->tentang_aplikasi !!}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                            </div>
                            <!-- .col end -->
                        
                        <div class="mb-3">
                            <a href="{{asset('admin/pengaturan/ubah')}}" class="btn btn-outline-info border-0 waves-effect waves-light fs-4">
                                <i class="fas fa-edit me-1"></i> Ubah
                            </a>
                        </div>

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
