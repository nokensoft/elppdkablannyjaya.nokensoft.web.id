@extends('admin.layouts.app')
@section('content')
<!-- start page content wrapper-->
<div class="row mb-3">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{asset('admin/beranda')}}">Beranda</a></li>
                    <li class="breadcrumb-item active">Profil Wakil Wakil Daerah</li>
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
                <h1 class="fw-bold">Profil Wakil Wakil Daerah</h1>

                <div class="row">

                    <!-- .col start -->
                    <div class="col-lg-8">

                        <table class="table table-bordered fs-4">
                            <tbody>
                                <tr>
                                    <td class="fw-bold">Nama Wakil Wakil Daerah</td>
                                    <td>{{$data->wakil_nama}}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">NIK</td>
                                    <td>{{$data->wakil_nik}}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Tanggal Lahir</td>
                                    <td>{{$data->wakil_tgl_lahir}}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Tanggal Pelantikan</td>
                                    <td>{{$data->wakil_tgl_pelantikan}}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Nomor SK</td>
                                    <td>{{$data->wakil_no_sk}}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">File SK</td>
                                    <td>{{$data->wakil_file_sk}}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Asal Partai</td>
                                    <td>{{$data->wakil_asal_partai}}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Visi & Misi</td>
                                    <td>{{$data->wakil_visi_misi}}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Riwayat</td>
                                    <td>{{$data->wakil_riwayat}}</td>
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
                                        <img src="{{ asset('gambar/' . $data->wakil_foto) }}" class="img-thumbnail" alt="Foto">
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <!-- .col end -->
                    @if(Auth::user()->hasRole('administrator'))
                    <div class="mb-3">
                        <a href="{{route('admin.profildaerah.wakilkepaladaerah.edit')}}"
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
