@extends('admin.layouts.app')
@section('content')
<!-- start page content wrapper-->
<div class="row mb-3">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{asset('admin/beranda')}}">Beranda</a></li>
                    <li class="breadcrumb-item active">Profil Pemerintah Daerah</li>
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
                <h1 class="fw-bold">Profil Pemerintah Daerah</h1>

                <div class="row">

                    <!-- .col start -->
                    <div class="col-md-8">

                        <table class="table table-bordered fs-4">
                            <tbody>
                                <tr>
                                    <td class="fw-bold" width="200px">Nama Instansi</td>
                                    <td>{{ $data->pemda_namainstansi }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Lambang Daerah</td>
                                    <td>
                                        <img src="{{ asset('gambar/' . $data->pemda_lambang) }}" alt="gambar" class="img-thumbnail col-lg-6">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Peta Wilayah</td>
                                    <td>
                                        <img src="{{ asset('gambar/' . $data->pemda_peta) }}" alt="gambar" class="img-thumbnail w-100">
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <!-- .col end -->
                    @if(Auth::user()->hasRole('administrator'))
                    <div class="mb-3">
                        <a href="{{route('admin.profildaerah.pemerintahdaerah.edit')}}"
                            class="btn btn-outline-info border-0 waves-effect waves-light fs-4">
                            <i class="fas fa-edit me-1"></i> Ubah
                        </a>
                    </div>
                    @else

                    @endif


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
