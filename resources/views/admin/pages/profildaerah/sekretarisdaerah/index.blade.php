@extends('admin.layouts.app')
@section('content')
<!-- start page content wrapper-->
<div class="row mb-3">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{asset('admin/beranda')}}">Beranda</a></li>
                    <li class="breadcrumb-item active">Profil Sekretaris Daerah</li>
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
                <h1 class="fw-bold">Profil Sekretaris Daerah</h1>

                <div class="row">

                    <!-- .col start -->
                    <div class="col-lg-8">

                        <table class="table table-bordered fs-4">
                            <tbody>
                                <tr>
                                    <td class="fw-bold">Nama Sekretaris Daerah</td>
                                    <td>{{$data->sekretaris_nama}}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">NIK</td>
                                    <td>{{$data->sekretaris_nik}}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Tanggal Lahir</td>
                                    <td>{{$data->sekretaris_tgl_lahir}}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">NIP</td>
                                    <td>{{$data->sekretaris_nip}}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Nomor Telepon</td>
                                    <td>{{$data->sekretaris_telp}}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Pangkat</td>
                                    <td>{{$data->sekretaris_pangkat}}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Golongan</td>
                                    <td>{{$data->sekretaris_golongan}}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Nomor SK</td>
                                    <td>{{$data->sekretaris_no_sk}}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">File SK</td>
                                    <td>{{$data->sekretaris_file_sk}}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">TMT</td>
                                    <td>{{$data->sekretaris_tmt}}</td>
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
                                        <img src="{{ asset('gambar/' . $data->sekretaris_foto) }}" class="img-thumbnail" alt="gambar">
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <!-- .col end -->
                    @if(Auth::user()->hasRole('administrator'))
                    <div class="mb-3">
                        <a href="{{route('admin.profildaerah.sekretarisdaerah.edit')}}"
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
