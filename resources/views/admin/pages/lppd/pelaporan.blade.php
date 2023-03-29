@extends('admin.layouts.app')
@section('content')
    <!-- start page content wrapper-->
        <div class="row mb-3">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{asset('admin/beranda')}}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="{{asset('admin/ppid')}}">PPID</a></li>
                            <li class="breadcrumb-item active">Pelaporan</li>
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
                        <h1 class="fw-bold">LPPD Pelaporan</h1>
                        <p class="text-secondary">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed repudiandae recusandae suscipit eligendi ipsa, amet expedita dicta fugiat. Nihil accusantium beatae harum natus amet repudiandae quae! Consequuntur odio et quae ipsum distinctio, vero magnam necessitatibus, accusamus delectus provident autem minus impedit! Quidem similique dicta ipsam facilis impedit voluptates libero sunt.</p>

                        <div class="mb-3">
                            <a href="#" class="btn btn-info waves-effect waves-light fs-4">
                                <i class="fas fa-file me-1"></i> 2019
                            </a>
                            
                            <a href="#" class="btn btn-outline-info waves-effect waves-light fs-4">
                                <i class="fas fa-file me-1"></i> 2020
                            </a>
                            
                            <a href="#" class="btn btn-outline-info waves-effect waves-light fs-4">
                                <i class="fas fa-file me-1"></i> 2021
                            </a>
                            
                            <a href="#" class="btn btn-outline-info waves-effect waves-light fs-4">
                                <i class="fas fa-file me-1"></i> 2022
                            </a>
                            
                            <a href="#" class="btn btn-outline-info waves-effect waves-light fs-4">
                                <i class="fas fa-file me-1"></i> 2023
                            </a>
                        </div>

                        <div class="row">

                            <!-- .col start -->
                            <div class="col">

                                <table class="table table-bordered fs-4">
                                    <thead class="bg-dark text-light">
                                        <tr>
                                            <th>Judul Dokumen</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="bg-success text-light">
                                            <td>COVER</td>
                                            <td class="text-center">
                                                <i class="fas fa-check"></i>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-dark waves-effect waves-light fs-4">
                                                    <i class="fas fa-download mr-1"></i> Unduh Dokumen
                                                </a>
                                                <a href="#" class="btn btn-sm btn-danger waves-effect waves-light fs-4">
                                                    <i class="fas fa-trash mr-1"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="bg-success text-light">
                                            <td>BAB I PENDAHULUAN</td>
                                            <td class="text-center">
                                                <i class="fas fa-check"></i>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-dark waves-effect waves-light fs-4">
                                                    <i class="fas fa-download mr-1"></i> Unduh Dokumen
                                                </a>
                                                <a href="#" class="btn btn-sm btn-danger waves-effect waves-light fs-4">
                                                    <i class="fas fa-trash mr-1"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>BAB II CAPAIAN KINERJA PENYELENGGARAAN PEMERINTAHAN DAERAH</td>
                                            <td class="text-center">
                                                <i class="fas fa-times"></i>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                    <i class="fas fa-upload mr-1"></i>
                                                    Unggah Dokumen
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>BAB III CAPAIAN KINERJA PELAKSANAAN TUGAS PEMBANTUAN</td>
                                            <td class="text-center">
                                                <i class="fas fa-times"></i>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                    <i class="fas fa-upload mr-1"></i>
                                                    Unggah Dokumen
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>BAB IV PENERAPAN DAN PENCAPAIAN STANDAR PELAYANAN MINIMAL</td>
                                            <td class="text-center">
                                                <i class="fas fa-times"></i>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                    <i class="fas fa-upload mr-1"></i>
                                                    Unggah Dokumen
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>BAB V PENUTUP</td>
                                            <td class="text-center">
                                                <i class="fas fa-times"></i>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                    <i class="fas fa-upload mr-1"></i>
                                                    Unggah Dokumen
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>LAMPIRAN-LAMPIRAN</td>
                                            <td class="text-center">
                                                <i class="fas fa-times"></i>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                    <i class="fas fa-upload mr-1"></i>
                                                    Unggah Dokumen
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                            </div>
                            <!-- .col end -->

                        </div>

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
