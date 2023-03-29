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
                            <li class="breadcrumb-item active">Pemerintah Daerah</li>
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
                        <h1 class="fw-bold">Profil Pemerintah Daerah</h1>
                        <p class="text-secondary">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed repudiandae recusandae suscipit eligendi ipsa, amet expedita dicta fugiat. Nihil accusantium beatae harum natus amet repudiandae quae! Consequuntur odio et quae ipsum distinctio, vero magnam necessitatibus, accusamus delectus provident autem minus impedit! Quidem similique dicta ipsam facilis impedit voluptates libero sunt.</p>

                        <div class="mb-3">
                            <a href="{{asset('admin/profil/pemerintah-daerah/ubah')}}" class="btn btn-info waves-effect waves-light fs-4">
                                <i class="fas fa-edit me-1"></i> Ubah
                            </a>
                        </div>

                        <div class="row">

                            <!-- .col start -->
                            <div class="col-lg-6">

                                <table class="table table-bordered fs-4">
                                    <tbody>
                                        <tr>
                                            <td>Nama Instansi</td>
                                            <td class="fw-bold">Pemerintah Kabupaten Lanny Jaya</td>
                                        </tr>
                                        <tr>
                                            <td>Logo / Lambang Daerah</td>
                                            <td class="fw-bold">
                                                <img src="{{asset('assets/admin/assets/images/logo-kab-lanny-jaya.png')}}" alt="Logo" width="250px">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                            </div>
                            <!-- .col end -->

                            <!-- .col start -->
                            <div class="col-lg-6">

                                <table class="table table-bordered fs-4">
                                    <tbody>
                                        <tr>
                                            <td>Distrik/Kecamatan</td>
                                            <td class="fw-bold d-flex justify-content-between">123
                                                <a href="#" class="btn btn-sm btn-outline-dark fs-6"><i class="fas fa-arrow-right me-1"></i>Detail</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Desa/Kelurahan</td>
                                            <td class="fw-bold d-flex justify-content-between">45
                                                <a href="#" class="btn btn-sm btn-outline-dark fs-6"><i class="fas fa-arrow-right me-1"></i>Detail</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Penduduk</td>
                                            <td class="fw-bold d-flex justify-content-between">78
                                                <a href="#" class="btn btn-sm btn-outline-dark fs-6"><i class="fas fa-arrow-right me-1"></i>Detail</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                
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
