@extends('admin.layouts.app')
@section('content')
    <!-- start page content wrapper-->
        <div class="row mb-3">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{asset('admin/beranda')}}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="{{asset('admin/profil')}}">IKK</a></li>
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
                        <h1 class="fw-bold">IKK</h1>
                        <p class="text-secondary">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed repudiandae recusandae suscipit eligendi ipsa, amet expedita dicta fugiat. Nihil accusantium beatae harum natus amet repudiandae quae! Consequuntur odio et quae ipsum distinctio, vero magnam necessitatibus, accusamus delectus provident autem minus impedit! Quidem similique dicta ipsam facilis impedit voluptates libero sunt.</p>

                        <div class="row">

                            <!-- .col start -->
                            <div class="col">

                                <table class="table table-bordered fs-4">
                                    <thead class="bg-dark text-light">
                                        <tr>
                                            <th>No. IKK</th>
                                            <th>IKK Output</th>
                                            <th>IKK Outcome</th>
                                            <th>Rumus</th>
                                            <th>Capaian 2021</th>
                                            <th>Capaian</th>
                                            <th>Keterangan</th>
                                            <th>File Bukti</th>
                                            <th>Status APIP</th>
                                            <th>Keterangan APIP</th>
                                            <th>Diperbaharui APIP</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="12" class="fw-bold">1. Urusan Pemerintahan Wajib Berkaitan Pelayanan Dasar </td>
                                        </tr>
                                        <tr>
                                            <td colspan="12" class="fw-bold">Pendidikan </td>
                                        </tr>
                                        <tr>
                                            <td>1.a.1</td>
                                            <td>
                                                <ol>
                                                    <li>Jumlah Satuan Pendidikan Anak Usia Dini Terakreditasi</li>
                                                    <li>Jumlah peserta didik PAUD yang menerima perlengkapan dasar peserta didik dari Pemerintah Daerah</li>
                                                    <li>Jumlah peserta didik PAU ..........</li>
                                                </ol>
                                            </td>
                                            <td>Tingkat partisipasi warga negara usia 5-6 tahun yang berpartisipasi dalam PAUD</td>
                                            <td>Jumlah anak usia 5-6 tahun yang sudah tamat atau sedang belajar di satuan PAUD Jumlah anak usia 5-6 tahun pada kab/kota yang bersangkutan</td>
                                            <td>
                                                <a href="#" class="btn btn-outline-dark">Info</a>
                                            </td>
                                            <td>Nilai tidak dapat dihitung karena pembagi = 0</td>
                                            <td>...</td>
                                            <td>...</td>
                                            <td>...</td>
                                            <td>...</td>
                                            <td>...</td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-dark waves-effect waves-light fs-4">
                                                    <i class="fas fa-edit"></i> 
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1...</td>
                                            <td>... </td>
                                            <td>...</td>
                                            <td>...</td>
                                            <td>
                                                <a href="#" class="btn btn-outline-dark">Info</a>
                                            </td>
                                            <td>...</td>
                                            <td>...</td>
                                            <td>...</td>
                                            <td>...</td>
                                            <td>...</td>
                                            <td>...</td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-dark waves-effect waves-light fs-4">
                                                    <i class="fas fa-edit"></i> 
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1...</td>
                                            <td>... </td>
                                            <td>...</td>
                                            <td>...</td>
                                            <td>
                                                <a href="#" class="btn btn-outline-dark">Info</a>
                                            </td>
                                            <td>...</td>
                                            <td>...</td>
                                            <td>...</td>
                                            <td>...</td>
                                            <td>...</td>
                                            <td>...</td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-dark waves-effect waves-light fs-4">
                                                    <i class="fas fa-edit"></i> 
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1...</td>
                                            <td>... </td>
                                            <td>...</td>
                                            <td>...</td>
                                            <td>
                                                <a href="#" class="btn btn-outline-dark">Info</a>
                                            </td>
                                            <td>...</td>
                                            <td>...</td>
                                            <td>...</td>
                                            <td>...</td>
                                            <td>...</td>
                                            <td>...</td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-dark waves-effect waves-light fs-4">
                                                    <i class="fas fa-edit"></i> 
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
