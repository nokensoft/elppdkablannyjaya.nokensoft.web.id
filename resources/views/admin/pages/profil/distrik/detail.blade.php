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
                    <li class="breadcrumb-item">Distrik</li>
                    <li class="breadcrumb-item active">Detail</li>
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

                        <h1 class="fw-bold">Detaill Distrik {{ $data->nama_distrik }} </h1>
                        <br>
                        <form>
                            <label for="" class="fw-bold">Foto Kantor dan Kepala Distrik</label>
                            <div class="mb-3 fs-4 text-center">

                                @if (!$data->foto_kepala_distrik)
                                <img src="{{asset('assets/admin/assets/images/users/user-man.png')}}"
                                    alt="{{$data->slug}}" width="100px" class="img-thumbnail mb-1">
                                @else
                                <img src="{{asset('file/foto/kepala/distrik')}}/{{ $data->foto_kepala_distrik}}"
                                    class="img-fluid img-thumbnail" width="130px" class="img-thumbnail mb-1"></td>
                                @endif

                                @if (!$data->foto_kantor)
                                <img src="{{asset('assets/images/image1.png')}}" alt="{{$data->slug}}" width="100px"
                                    class="img-thumbnail mb-1">
                                @else
                                <img src="{{asset('file/foto/kantor/distrik')}}/{{ $data->foto_kantor}}"
                                    class="img-fluid img-thumbnail" width="130px" class="img-thumbnail mb-1"></td>
                                @endif
                            </div>
                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">Nama Distrik</label>
                                <input type="text" class="form-control form-control-lg" name="nama_distrik"
                                    value="{{$data->nama_distrik }}" readonly>
                            </div>
                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">Nama ibu kota distrik</label>
                                <input type="text" class="form-control form-control-lg" readonly name="ibu_kota_distrik"
                                    value="{{$data->ibu_kota_distrik }}">
                            </div>

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">Nama Kepala Distrik</label>
                                <input type="text" class="form-control form-control-lg" readonly
                                    value="{{$data->nama_kepala_distrik}}">
                            </div>

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">Alamat</label>
                                <textarea rows="2" class="form-control form-control-lg"
                                    readonly>{{$data->alamat }}</textarea>
                            </div>

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">Telp</label>
                                <input type="text" class="form-control form-control-lg" readonly
                                    value="{{$data->telp }}">
                            </div>

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">Email</label>
                                <input type="email" class="form-control form-control-lg" readonly
                                    value="{{ $data->email}}">
                            </div>

                            <div class="border-top border-1 pt-3 mt-4">
                                <a href="{{ route('admin.distrik.edit',$data->id) }}"
                                    class="btn btn-outline-light waves-effect waves-light fs-4">
                                    <i class="fas fa-edit me-1"></i> Edit
                                </a>
                                <a href="{{URL::previous()}}"
                                    class="btn btn-outline-light waves-effect waves-light fs-4">
                                    <i class="fas fa-arrow-left me-1"></i> Kembali
                                </a>
                            </div>

                        </form>

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
