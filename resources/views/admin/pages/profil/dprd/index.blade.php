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
                        <div class="mb-3">
                            <a href="{{ route('admin.dprd.create') }}" class="btn btn-info waves-effect waves-light fs-4">
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
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($all as $data )
                                            <tr>
                                                <td>{{$data->nama_instansi}}</td>
                                                <td>{{$data->jabatan}}</td>
                                                <td>{{$data->nama_lengkap}}</td>
                                                <td>{{$data->nik}}</td>
                                                <td>{{$data->alamat}}</td>
                                                <td>{{$data->ttl}}</td>
                                                <td>{{$data->nama_partai}}</td>
                                                <td>{{$data->pendidikan}}</td>
                                                <td>
                                                    @if ($data->foto == null)
                                                        <img src="{{asset('assets/admin/assets/images/users/user-man.png')}}" alt="Logo" width="100%" class="img-thumbnail">
                                                    @else
                                                     <img src="{{ url($data->foto)}}" alt="{{$data->slug}}" class="img-fluid img-thumbnail" width="100"></td>
                                                    @endif
                                                </td>
                                                <td>
                                                    {{-- <a href="{{route('admin.dprd.show',$data->id)}}" class="btn btn-sm btn-dark waves-effect waves-light fs-4 mb-1"> Detail </a> --}}
                                                    <a href="{{route('admin.dprd.edit',$data->slug)}}" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4 mb-2"> Ubah </a>
                                                    <a href="{{route('admin.dprd.delete',$data->slug)}}" class="btn btn-sm btn-outline-danger waves-effect waves-light fs-4"> Hapus </a>
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
