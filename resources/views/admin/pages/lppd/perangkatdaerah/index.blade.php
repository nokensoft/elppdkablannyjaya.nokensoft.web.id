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
                            <a href="{{route('admin.perangkatdaerah.create')}}" class="btn btn-info waves-effect waves-light fs-4">
                                <i class="fas fa-plus me-1"></i> Tambah Data
                            </a>
                        </div>

                        <div class="row">

                            <!-- .col start -->
                            <div class="col">

                                <table class="table table-bordered fs-4">
                                    <thead class="bg-dark text-light">
                                        <tr>
                                            <th>Foto Kantor</th>
                                            <th>Nama Organisasi</th>
                                            <th>Nama Pimpinan</th>
                                            <th>Rumpun</th>
                                            <th>Email</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($datas as $data )
                                            <tr>
                                                <td>
                                                    @if (!$data->perangkatdaerah->foto_gedung)
                                                        <img src="{{asset('assets/images/image1.png')}}" alt="Logo" width="380px"
                                                         class="img-thumbnail">
                                                    @else
                                                     <img src="{{asset('file/foto/perangkatdaerah')}}/{{ $data->perangkatdaerah->foto_gedung }}"
                                                     class="img-fluid img-thumbnail" width="100px"></td>
                                                    @endif
                                                </td>
                                                <td>{{$data->perangkatdaerah->nama_organisasi ?? ''}}  </td>
                                                <td>{{$data->perangkatdaerah->nama_pimpinan ?? 'Data belum ada' }}</td>
                                                <td>{{$data->perangkatdaerah->urusan ?? 'Data belum ada'}}</td>
                                                <td>{{$data->email ?? ''}}</td>

                                                <td class="d-flex justify-content-between gap-1">
                                                    @if(Cache::has('user-is-online-' . $data->id))
                                                    <a href="{{route('admin.perangkatdaerah.show',$data->id)}}"
                                                        class="btn btn-sm btn-info border-0  waves-effect waves-light fs-4">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a href="{{route('admin.perangkatdaerah.edit',$data->id)}}"
                                                        class="btn btn-sm btn-outline-info border-0 waves-effect waves-light fs-4">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    @else
                                                    <a href="{{route('admin.perangkatdaerah.show',$data->id)}}"
                                                        class="btn btn-sm btn-info border-0  waves-effect waves-light fs-4">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a href="{{route('admin.perangkatdaerah.edit',$data->id)}}"
                                                        class="btn btn-sm btn-outline-info border-0 waves-effect waves-light fs-4">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="{{route('admin.perangkatdaerah.delete',$data->id)}}"
                                                        class="btn btn-sm btn-outline-info border-0 waves-effect waves-light fs-4">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                    @endif
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
