@extends('admin.layouts.app')
@section('content')
    <!-- start page content wrapper-->
        <div class="row mb-3">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{asset('admin/beranda')}}">Beranda</a></li>
                            <li class="breadcrumb-item active">Desa</li>
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

                        <div class="row">
                            <div class="col-md-6">
                                <h1 class="fw-bold">Profil Desa </h1>
                                Tanggal : <span class="fw-bold">{{ today()->toDateString() }}</span>
                            </div>
                            <div class="col-md-6 text-md-end">
                                <a href="{{ route('admin.desa.create') }}" class="btn btn-info waves-effect waves-light fs-4">
                                    <i class="fas fa-plus me-1"></i> Tambah Data
                                </a>

                                <a href="{{ route('admin.desa.print') }}" target="_blank" class="btn btn-outline-info border-0 waves-effect waves-light fs-4" title="Cetak file atau export ke file PDF">
                                    <i class="fas fa-print me-1"></i> Print
                                </a>

                                <a target="_blank" class="btn btn-outline-info border-0 waves-effect waves-light fs-4" title="Download file excel">
                                    <i class="fas fa-file me-1"></i> Download Excel
                                </a>

                            </div>
                        </div>

                        <div class="row">

                            <!-- .col start -->
                            <div class="col">

                                <table class="table table-bordered fs-4">
                                    <thead class="bg-dark text-light">
                                        <tr>
                                            <th>Foto Kepala Desa</th>
                                            <th>Nama Distrik</th>
                                            <th>Nama Desa</th>
                                            <th>Nama Kepala Desa</th>
                                            <th>Kontak</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($datas as $data )
                                            <tr>
                                                <td>
                                                    @if(!$data->foto_kepala_desa)
                                                    <img src="{{asset('assets/images/user.png')}}" alt="Logo" class="img-fluid img-thumbnail" width="100">
                                                     @else
                                                    <img src="{{asset('file/foto/kepala/desa')}}/{{ $data->foto_kepala_desa }}" class="img-fluid img-thumbnail" width="150"></td>
                                                    @endif
                                                </td>
                                                <td>{{ $data->distrik->nama_distrik ?? 'Nama distrik belum ada!' }}</td>
                                                <td>{{$data->nama_desa}}</td>
                                                <td>{{$data->nama_kepala_desa}}</td>
                                                <td>
                                                    <i class="mdi mdi-phone-outline"></i> {{$data->telp}}
                                                    <br>
                                                    <i class="mdi mdi-email-outline"></i> {{ Str::limit($data->email, 15) }}
                                                    <br>
                                                    <i class="mdi mdi-map-marker"></i>  {{ Str::limit($data->alamat, 18) }}
                                                </td>

                                                <td class="d-flex justify-content-between gap-1">
                                                    <a href="{{route('admin.desa.show',$data->id)}}" class="btn btn-sm btn-info border-0  waves-effect waves-light fs-4"> <i class="fas fa-eye"></i> </a>
                                                    <a href="{{route('admin.desa.edit',$data->id)}}" class="btn btn-sm btn-outline-info border-0 waves-effect waves-light fs-4"> <i class="fas fa-edit"></i> </a>
                                                    <a href="{{route('admin.desa.delete',$data->id)}}" class="btn btn-sm btn-outline-info border-0 waves-effect waves-light fs-4"> <i class="fas fa-trash"></i> </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                            <!-- .col end -->

                        </div>
                        <!-- .row end -->

                        <!--pagination start-->
                        <div class="row">
                            <div class="col">
                                {{ $datas->links() }}
                            </div>
                        </div>
                        <!--pagination end-->

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
