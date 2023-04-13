@extends('admin.layouts.app')
@section('content')
    <!-- start page content wrapper-->
        <div class="row mb-3">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Beranda</a></li>
                            <li class="breadcrumb-item active">Starter</li>
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
                        <h1 class="fw-bold display-1">Selamat Datang!</h1>
                        <p class="">Aplikas SIPPID Kabupaten Lanny Jaya dibuat untuk mempermudah Pemerintah Kabupaten Lanny Jaya dalam mengumpulan dan mengelola LPPD secara online.</p>
                        <p>Sistem ini digunakan oleh Pemerintah Daerah Kabupaten Lanny Jaya dengan sistem basis data (database) yang terpusat agar memudahkan petugas dan pejabat dalam mengelola data. Dengan sistem basis data secara online dan terpusat, membuat proses penyampaikan laporan kinerja lebih efisien dan konsisten. Selain itu, data tersebut juga mudah diakses dari mana saja dan kapan saja.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">

            <div class="col-md-6 col-xl-3">
                <div class="card" id="tooltip-container2">
                    <div class="card-body">
                        <i class="fa fa-info-circle text-muted float-end" data-bs-container="#tooltip-container2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="More Info"></i>
                        <h4 class="mt-0 font-16">Jumlah DPRD</h4>
                        <h2 class="text-dark my-3 text-center display-1 fw-bold"><span data-plugin="counterup">{{ $totalDprd }}</span></h2>
                        <a href="#" class="btn btn-lg w-100">
                            <i class="fas fa-arrow-right mr-2"></i> Tampilkan Detail
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card" id="tooltip-container2">
                    <div class="card-body">
                        <i class="fa fa-info-circle text-muted float-end" data-bs-container="#tooltip-container2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="More Info"></i>
                        <h4 class="mt-0 font-16">Jumlah Distrik/Kecamatan</h4>
                        <h2 class="text-dark my-3 text-center display-1 fw-bold"><span data-plugin="counterup">{{ $totalDistrik }}</span></h2>
                        <a href="#" class="btn btn-lg w-100">
                            <i class="fas fa-arrow-right mr-2"></i> Tampilkan Detail
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card" id="tooltip-container2">
                    <div class="card-body">
                        <i class="fa fa-info-circle text-muted float-end" data-bs-container="#tooltip-container2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="More Info"></i>
                        <h4 class="mt-0 font-16">Jumlah Desa/Kelurahan</h4>
                        <h2 class="text-dark my-3 text-center display-1 fw-bold"><span data-plugin="counterup">{{ $totalDesa }}</span></h2>
                        <a href="#" class="btn btn-lg w-100">
                            <i class="fas fa-arrow-right mr-2"></i> Tampilkan Detail
                        </a>
                    </div>
                </div>
            </div>

            {{-- <div class="col-md-6 col-xl-3">
                <div class="card" id="tooltip-container2">
                    <div class="card-body">
                        <i class="fa fa-info-circle text-muted float-end" data-bs-container="#tooltip-container2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="More Info"></i>
                        <h4 class="mt-0 font-16">Jumlah Penduduk</h4>
                        <h2 class="text-dark my-3 text-center display-1 fw-bold"><span data-plugin="counterup">{{ $totalPenduduk }}</span></h2>
                        <a href="#" class="btn btn-lg w-100">
                            <i class="fas fa-arrow-right mr-2"></i> Tampilkan Detail
                        </a>
                    </div>
                </div>
            </div> --}}

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
