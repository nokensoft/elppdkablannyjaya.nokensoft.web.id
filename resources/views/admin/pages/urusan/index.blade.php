@extends('admin.layouts.app')
@section('content')
<!-- start page content wrapper-->
<div class="row mb-3">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{asset('admin/beranda')}}">Beranda</a></li>
                    <li class="breadcrumb-item">Master Data</li>
                    <li class="breadcrumb-item active">Urusan</li>
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
                <h1 class="fw-bold">Urusan</h1>
                <div class="mb-3">
                    <a href="{{ route('admin.urusan.create') }}" class="btn btn-info waves-effect waves-light fs-4">
                        <i class="fas fa-plus me-1"></i> Tambah Data
                    </a>
                </div>

                <div class="row">

                    <!-- .col start -->
                    <div class="col">
                        <table class="table table-bordered fs-4">
                            <thead class="bg-dark text-light">
                                <tr>
                                    <th>NO</th>
                                    <th>Judul Urusan</th>
                                    <th>Slug</th>
                                    <th>NO IKK</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $urusan )
                                <tr>
                                    <td>#</td>
                                    <td>{{$urusan->judul_urusan}}</td>
                                    <td>{{$urusan->slug}}</td>

                                    <td>
                                        @foreach ($urusan->ikk as $ikk )
                                            <ul>
                                                <li>{{ $ikk->no_ikk }}</li>
                                            </ul>
                                        @endforeach
                                    </td>
                                    <td class="text-center">

                                        <a href="{{route('admin.urusan.edit',$urusan->slug)}}"
                                            class="btn btn-sm btn-outline-info border-0 waves-effect waves-light fs-4">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="{{route('admin.urusan.delete',$urusan->slug)}}"
                                            class="btn btn-sm btn-outline-info border-0 waves-effect waves-light fs-4">
                                            <i class="fas fa-trash"></i>
                                        </a>

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
                        {{ $data->links() }}
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
