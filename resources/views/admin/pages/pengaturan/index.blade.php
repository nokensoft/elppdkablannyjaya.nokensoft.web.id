@extends('admin.layouts.app')
@section('content')
<!-- start page content wrapper-->
<div class="row mb-3">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{asset('admin/beranda')}}">Beranda</a></li>
                    <li class="breadcrumb-item active">Pengaturan</li>
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
                <h1 class="fw-bold mb-4">Pengaturan</h1>

                <div class="row">

                    <!-- .col start -->
                    <div class="col-lg-8">

                        <table class="table table-bordered fs-4">
                            <tbody>
                                <tr>
                                    <td class="fw-bold" width="200px">Judul Situs</td>
                                    <td>{!! $data->judul_situs !!}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Desktripsi</td>
                                    <td>{!! $data->deskripsi_situs !!}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Logo Small Dark</td>
                                    <td>
                                        <img src="{{ asset('gambar/'. $data->logo_sm_dark) }}" alt="Logo sm dark">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Logo Large Dark</td>
                                    <td>
                                        <img src="{{ asset('gambar/'. $data->logo_lg_dark) }}" alt="Logo large dark">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Logo Small Light</td>
                                    <td>
                                        <img src="{{ asset('gambar/'. $data->logo_sm_light) }}" alt="Logo sm light">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Logo Large Dark</td>
                                    <td>
                                        <img src="{{ asset('gambar/'. $data->logo_lg_light) }}" alt="Logo lg light">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Favicon</td>
                                    <td>
                                        <img src="{{ asset('gambar/'. $data->favicon) }}" alt="Favicon" width="50px">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Tentang Aplikasi</td>
                                    <td>{!! $data->tentang_aplikasi !!}</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <!-- .col end -->

                    <div class="mb-3">
                        <a href="{{asset('admin/pengaturan/ubah')}}"
                            class="btn btn-outline-info border-0 waves-effect waves-light fs-4">
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
