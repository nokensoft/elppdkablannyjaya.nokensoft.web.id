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
                            <li class="breadcrumb-item active">Sekretaris Daerah</li>
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
                        <h1 class="fw-bold">Profil Sekretaris Daerah</h1>
                        <p class="text-secondary">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed repudiandae recusandae suscipit eligendi ipsa, amet expedita dicta fugiat. Nihil accusantium beatae harum natus amet repudiandae quae! Consequuntur odio et quae ipsum distinctio, vero magnam necessitatibus, accusamus delectus provident autem minus impedit! Quidem similique dicta ipsam facilis impedit voluptates libero sunt.</p>

                        <div class="mb-3">
                            <a href="{{asset('admin/profil/sekretaris-daerah/ubah')}}" class="btn btn-info waves-effect waves-light fs-4">
                                <i class="fas fa-edit me-1"></i> Ubah
                            </a>
                        </div>

                        <div class="row">

                            <!-- .col start -->
                            <div class="col-lg-8">

                                <table class="table table-bordered fs-4">
                                    <tbody>
                                        <tr>
                                            <td>Nama Lengkap</td>
                                            <td class="fw-bold">............................</td>
                                        </tr>
                                        <tr>
                                            <td>NIK</td>
                                            <td class="fw-bold">............................</td>
                                        </tr>
                                        <tr>
                                            <td>NIP</td>
                                            <td class="fw-bold">............................</td>
                                        </tr>
                                        <tr>
                                            <td>Nomor Handphone</td>
                                            <td class="fw-bold">............................</td>
                                        </tr>
                                        <tr>
                                            <td>Pangkat</td>
                                            <td class="fw-bold">............................</td>
                                        </tr>
                                        <tr>
                                            <td>Golongan</td>
                                            <td class="fw-bold">............................</td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Lahir</td>
                                            <td class="fw-bold">............................</td>
                                        </tr>
                                        <tr>
                                            <td>No. SK Pengangkatan</td>
                                            <td class="fw-bold">............................</td>
                                        </tr>
                                        <tr>
                                            <td>File SK</td>
                                            <td class="fw-bold">............................</td>
                                        </tr>
                                        <tr>
                                            <td>TMT</td>
                                            <td class="fw-bold">............................</td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                            </div>
                            <!-- .col end -->

                            <!-- .col start -->
                            <div class="col-lg-4">

                                <table class="table table-bordered fs-4">
                                    <tbody>
                                        <tr>
                                            <td>Foto Sekretaris Daerah</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-bold">
                                                <img src="{{asset('assets/admin/assets/images/users/user-man.png')}}" alt="Logo" width="100%" class="img-thumbnail p-5">
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
