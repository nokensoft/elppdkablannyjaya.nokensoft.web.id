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
                            <li class="breadcrumb-item active">Kepala DPRD</li>
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
                        <h1 class="fw-bold">Profil DPRD</h1>
                        <p class="text-secondary">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed repudiandae recusandae suscipit eligendi ipsa, amet expedita dicta fugiat. Nihil accusantium beatae harum natus amet repudiandae quae! Consequuntur odio et quae ipsum distinctio, vero magnam necessitatibus, accusamus delectus provident autem minus impedit! Quidem similique dicta ipsam facilis impedit voluptates libero sunt.</p>

                        <div class="mb-3">
                            <a href="{{asset('admin/profil/dprd#tambah')}}" class="btn btn-dark waves-effect waves-light fs-4">
                                <i class="fas fa-plus me-1"></i> Tambah Data
                            </a>
                        </div>

                        <div class="row">

                            <!-- .col start -->
                            <div class="col">

                                <table class="table table-bordered fs-4">
                                    <thead class="bg-dark text-light">
                                        <tr>
                                            <th>Instansi</th>
                                            <th>Jabatan</th>
                                            <th>Nama Lengkap</th>
                                            <th>NIK</th>
                                            <th>Alamat</th>
                                            <th>TTL</th>
                                            <th>Partai</th>
                                            <th>Pendidikan</th>
                                            <th>Foto</th>
                                            <th>Perjalanan Dinas</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nama Instansi</td>
                                            <td>Jabatan</td>
                                            <td>Nama Lengkap</td>
                                            <td>1234567890</td>
                                            <td>Jalan Raya, Kelurahan, Kecamatan, Kota/Kabupaten.</td>
                                            <td>Nama Tempat, 01 Bulan 1970</td>
                                            <td>Nama Partai</td>
                                            <td>Strata Satu (1)</td>
                                            <td>
                                                <img src="{{asset('assets/admin/assets/images/users/user-man.png')}}" alt="Logo" width="100%" class="img-thumbnail">
                                            </td>
                                            <td>
                                                33 Kali
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                    Detail
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nama Instansi</td>
                                            <td>Jabatan</td>
                                            <td>Nama Lengkap</td>
                                            <td>1234567890</td>
                                            <td>Jalan Raya, Kelurahan, Kecamatan, Kota/Kabupaten.</td>
                                            <td>Nama Tempat, 01 Bulan 1970</td>
                                            <td>Nama Partai</td>
                                            <td>Strata Satu (1)</td>
                                            <td>
                                                <img src="{{asset('assets/admin/assets/images/users/user-women.png')}}" alt="Logo" width="100%" class="img-thumbnail">
                                            </td>
                                            <td>
                                                23 Kali
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                    Detail
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nama Instansi</td>
                                            <td>Jabatan</td>
                                            <td>Nama Lengkap</td>
                                            <td>1234567890</td>
                                            <td>Jalan Raya, Kelurahan, Kecamatan, Kota/Kabupaten.</td>
                                            <td>Nama Tempat, 01 Bulan 1970</td>
                                            <td>Nama Partai</td>
                                            <td>Strata Satu (1)</td>
                                            <td>
                                                <img src="{{asset('assets/admin/assets/images/users/user-admin.png')}}" alt="Logo" width="100%" class="img-thumbnail">
                                            </td>
                                            <td>
                                                11 Kali
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                    Detail
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
