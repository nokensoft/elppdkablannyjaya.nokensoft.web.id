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
                            <li class="breadcrumb-item active">Distrik</li>
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
                        <h1 class="fw-bold">Profil Distrik</h1>
                        <div class="mb-3">
                            <a href="{{ route('admin.distrik.create') }}" class="btn btn-info waves-effect waves-light fs-4">
                                <i class="fas fa-plus me-1"></i> Tambah Data
                            </a>
                        </div>

                        <div class="row">

                            <!-- .col start -->
                            <div class="col">
                                

                                <table class="table table-bordered fs-4">
                                    <thead class="bg-dark text-light">
                                        <tr>
                                            <th>Nama Distrik</th>
                                            <th>Ibu Kota</th>
                                            <th>Nama Kepala Distrik</th>
                                            <th>Alamat</th>
                                            <th>Telp</th>
                                            <th>Email</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($all as $data )
                                            <tr>
                                                <td>{{$data->nama_distrik}}</td>
                                                <td>{{$data->ibu_kota_distrik}}</td>
                                                <td>{{$data->nama_kepala_distrik}}</td>
                                                <td>{{$data->alamat}}</td>
                                                <td>{{$data->telp}}</td>
                                                <td>{{$data->email}}</td>
                                                <td>
                                                    <a href="{{route('admin.distrik.show')}}" class="btn btn-sm btn-dark waves-effect waves-light fs-4"> Detail </a>
                                                    <a href="{{route('admin.distrik.edit',$data->id)}}" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4"> Ubah </a>
                                                    <a href="{{route('admin.distrik.delete',$data->id)}}" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4"> Hapus </a>
                                                </td>
                                            </tr>


                                        @endforeach
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
