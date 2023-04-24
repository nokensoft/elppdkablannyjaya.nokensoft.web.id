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
                        <h1 class="fw-bold">Perangkat Daerah</h1>
                        <div class="mb-3">
                            <a href="{{asset('admin/lppd/perangkatdaerah/create')}}" class="btn btn-info waves-effect waves-light fs-4">
                                <i class="fas fa-plus me-1"></i> Tambah Data
                            </a>
                        </div>

                        <div class="row">

                            <!-- .col start -->
                            <div class="col">

                                <table class="table table-bordered fs-4">
                                    <thead class="bg-dark text-light">
                                        <tr>
                                            <th>Nama Organisasi</th>
                                            <th>Urusan</th>
                                            <th>Rumpun</th>
                                            <th>Tipe Kantor</th>
                                            <th>Alamat</th>
                                            <th>Nama Pimpinan</th>
                                            <th>Jumlah Pegawai</th>
                                            <th>Email</th>
                                            <th>Foto Kantor</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($datas as $data )
                                            <tr>
                                                <td>{{$data->nama_organisasi}}</td>
                                                <td>{{$data->urusan}}</td>
                                                <td>{{$data->rumpun}}</td>
                                                <td>{{$data->user->name ?? ''}}</td>
                                                <td>{{$data->alamat}}</td>
                                                <td>{{$data->nama_pimpinan}}</td>
                                                <td>{{$data->jumlah_pegawai}}</td>
                                                <td>{{$data->user->email ?? ''}}</td>
                                                <td>
                                                    @if (!$data->foto)
                                                        <img src="{{asset('assets/images/1.jpg')}}" alt="Logo" width="150px" class="img-thumbnail">
                                                    @else
                                                     <img src="{{ url($data->foto)}}" alt="{{asset($data->foto)}}" class="img-fluid img-thumbnail" width="150px"></td>
                                                    @endif
                                                </td>
                                                <td class="d-flex justify-content-between gap-1">
                                                    <a href="{{route('admin.perangkatdaerah.show',$data->id)}}" class="btn btn-sm btn-dark border-0  waves-effect waves-light fs-4"> <i class="fas fa-eye"></i> </a>
                                                    <a href="{{route('admin.perangkatdaerah.edit',$data->id)}}" class="btn btn-sm btn-outline-dark border-0 waves-effect waves-light fs-4"> <i class="fas fa-edit"></i> </a>
                                                    <a href="{{route('admin.perangkatdaerah.delete',$data->id)}}" class="btn btn-sm btn-outline-dark border-0 waves-effect waves-light fs-4"> <i class="fas fa-trash"></i> </a>
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

  @endpush
