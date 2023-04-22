@extends('admin.layouts.app')
@section('content')
    <!-- start page content wrapper-->
        <div class="row mb-3">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{asset('admin/beranda')}}">Beranda</a></li>
                            <li class="breadcrumb-item active">Profil Sekretaris Daerah</li>
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

                        <div class="row">

                            <!-- .col start -->
                            <div class="col-lg-8">

                                <table class="table table-bordered fs-4">
                                    <tbody>
                                        <tr>
                                            <td>Nama Sekretaris Daerah</td>
                                            <td class="fw-bold">{{$data->sekretaris_nama}}</td>
                                        </tr>
                                        <tr>
                                            <td>NIK</td>
                                            <td class="fw-bold">{{$data->sekretaris_nik}}</td>
                                        </tr>
                                        <tr>
                                            <td>NP</td>
                                            <td class="fw-bold">{{$data->sekretaris_nip}}</td>
                                        </tr>
                                        <tr>
                                            <td>Nomor Telepon</td>
                                            <td class="fw-bold">{{$data->sekretaris_telp}}</td>
                                        </tr>
                                        <tr>
                                            <td>Pangkat</td>
                                            <td class="fw-bold">{{$data->sekretaris_pangkat}}</td>
                                        </tr>
                                        <tr>
                                            <td>Golongan</td>
                                            <td class="fw-bold">{{$data->sekretaris_golongan}}</td>
                                        </tr>
                                        <tr>
                                            <td>Nomor SK</td>
                                            <td class="fw-bold">{{$data->sekretaris_no_sk}}</td>
                                        </tr>
                                        <tr>
                                            <td>File SK</td>
                                            <td class="fw-bold">{{$data->sekretaris_file_sk}}</td>
                                        </tr>
                                        <tr>
                                            <td>TMT</td>
                                            <td class="fw-bold">{{$data->sekretaris_tmt}}</td>
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
                                            <td class="fw-bold text-center">
                                                <img src="{{ asset($data->sekretaris_foto) }}" class="img-thumbnail" alt="Foto">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                            </div>
                            <!-- .col end -->
                        
                        <div class="mb-3">
                            <a href="{{route('admin.profildaerah.sekretarisdaerah.edit')}}" class="btn btn-outline-info border-0 waves-effect waves-light fs-4">
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
