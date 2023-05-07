@extends('admin.layouts.app')
@section('content')
<!-- start page content wrapper-->
<div class="row mb-3">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{asset('admin/beranda')}}">Beranda</a></li>
                    <li class="breadcrumb-item">Data Master</li>
                    <li class="breadcrumb-item active">Perangkat Daerah</li>
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
                        <h1 class="fw-bold">Perangkat Daerah</h1>
                        Tanggal : <span class="fw-bold">{{ today()->toDateString() }}</span>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <a href="{{ route('admin.perangkatdaerah.create') }}" class="btn btn-info waves-effect waves-light fs-4">
                            <i class="fas fa-plus me-1"></i> Tambah Data
                        </a>

                        <a href="{{ route('admin.perangkatdaerah.print') }}" target="_blank"
                            class="btn btn-outline-info border-0 waves-effect waves-light fs-4"
                            title="Cetak file atau export ke file PDF">
                            <i class="fas fa-print me-1"></i> Print
                        </a>

                        {{-- <a target="_blank" class="btn btn-outline-info border-0 waves-effect waves-light fs-4"
                            title="Download file excel">
                            <i class="fas fa-file me-1"></i> Download Excel
                        </a> --}}

                    </div>
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
                                        @if (empty($data->perangkatdaerah->foto_gedung))
                                        <img src="{{ asset('assets/images/image1.png') }}" alt="Foto Kantor"
                                            width="150px" class="img-thumbnail">
                                        @else
                                        <img src="{{asset('file/foto/perangkatdaerah')}}/{{ $data->perangkatdaerah->foto_gedung ?? '' }}"
                                            class="img-fluid img-thumbnail" width="100px">
                                    </td>
                                    @endif
                                    </td>
                                    <td>{{$data->perangkatdaerah->nama_organisasi ?? ''}} </td>
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
