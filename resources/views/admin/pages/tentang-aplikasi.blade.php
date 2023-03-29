@extends('admin.layouts.app')
@section('content')
    <!-- start page content wrapper-->
        <div class="row mb-3">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{asset('admin/beranda')}}">Beranda</a></li>
                            <li class="breadcrumb-item active">Tentang Aplikasi</li>
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
                        <h1 class="fw-bold">Tentang Aplikasi</h1>
                        <p>Aplikas SIPPID Kabupaten Lanny Jaya dibuat untuk mempermudah Pemerintah Kabupaten Lanny Jaya dalam mengumpulan dan mengelola LPPD secara online.</p>
                        <p>Sistem ini digunakan oleh Pemerintah Daerah Kabupaten Lanny Jaya dengan sistem basis data (database) yang terpusat agar memudahkan petugas dan pejabat dalam mengelola data. Dengan sistem basis data secara online dan terpusat, membuat proses penyampaikan laporan kinerja lebih efisien dan konsisten. Selain itu, data tersebut juga mudah diakses dari mana saja dan kapan saja.</p>
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
