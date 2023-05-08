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
                    <li class="breadcrumb-item active">IKK</li>
                    <li class="breadcrumb-item active">Pencapaian Kerja</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row" id="ubah">
    <div class="col">
        <div class="card">
            <div class="card-body">

                <div class="row">

                    <!-- .col start -->
                    <div class="col-lg-6  mx-auto border border-4 border-info rounded shadow-lg p-5 my-5">

                        <h1 class="fw-bold">Pencapaian Kerja {{ $data->urusan->judul_urusan }} </h1>
                        <br>
                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">No IKK</label>
                                <input type="text" class="form-control form-control-lg" readonly value="{{$data->no_ikk}}" >
                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">IKK Output</label>
                                <textarea name="ikk_output" id="" rows="5" class="form-control form-control-lg" readonly>{{$data->ikk_output}}</textarea>
                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">IKK Outcome</label>
                                <textarea name="ikk_outcome" id="" rows="5" class="form-control form-control-lg" readonly>{{$data->ikk_outcome}}</textarea>
                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">Rumus</label>
                                <textarea readonly id="" rows="5"
                                    class="form-control form-control-lg">{{$data->rumus}}</textarea>
                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">Keterangan Nilai 1</label>
                                <input type="text" readonly class="form-control form-control-lg"
                                    value="{{$data->ket_jml1}}">
                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">Nilai 1</label>
                                <input type="text" class="form-control form-control-lg" readonly  value="{{$data->ket_jml1}}">
                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">Keterangan Nilai 2</label>
                                <input type="text" class="form-control form-control-lg"  readonly  value="{{$data->ket_jml2}}">
                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">Nilai 2</label>
                                <input type="text" class="form-control form-control-lg" name=""  readonly  value="{{$data->jml2}}">
                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">Capaian Kinerja</label>
                                <input type="text" class="form-control form-control-lg" name="" readonly  value="{{$data->capaian_kinerja}}" >
                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">Keterangan</label>
                                <textarea name="keterangan" id="" rows="5" class="form-control form-control-lg">{{$data->keterangan}}</textarea>
                            </div>
                            <!-- input item end -->

                            <div class="border-top border-1 pt-3 mt-4">
                                <a href="{{URL::previous()}}" class="btn btn-outline-light waves-effect waves-light fs-4"> <i class="fas fa-arrow-left me-1"></i> Kembali </a>

                            </div>
                            <!-- input item end -->


                    </div>
                    <!-- .col end -->

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
