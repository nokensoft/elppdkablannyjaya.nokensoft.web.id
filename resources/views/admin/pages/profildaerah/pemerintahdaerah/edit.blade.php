@extends('admin.layouts.app')
@section('content')
<!-- start page content wrapper-->
<div class="row mb-3">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{asset('admin/beranda')}}">Beranda</a></li>
                    <li class="breadcrumb-item">Pemerintah Daerah</li>
                    <li class="breadcrumb-item active">Ubah</li>
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

                        <h1 class="fw-bold">Ubah Pemerintah Daerah</h1>

                        <form action="{{route('admin.profildaerah.pemerintahdaerah.update',$data->id)}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3 fs-4">
                                <label for="pemda_namainstansi" class="fw-bold">Nama Instansi</label>
                                <input type="text" class="form-control form-control-lg" id="pemda_namainstansi"
                                    name="pemda_namainstansi"
                                    value="{{old('pemda_namainstansi') ? old('pemda_namainstansi') : $data->pemda_namainstansi }}">

                                @if($errors->has('pemda_namainstansi'))
                                <small class="text-danger"> {{ $errors->first('pemda_namainstansi') }} </small>
                                @endif

                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="pemda_lambang" class="fw-bold d-block">Lambang Pemerintah Darah</label>

                                @if (empty($data->pemda_peta))
                                <img src="{{ asset('gambar/default.png') }}" alt="{{$data->pemda_lambang}}"
                                    class="img-thumbnail">
                                @else
                                <img src="{{ asset('gambar/'. $data->pemda_lambang)}}" alt="{{$data->pemda_lambang}}"
                                    class="img-fluid img-thumbnail mt-2"></td>
                                @endif

                                <input type="text" class="form-control form-control-lg mt-2" id="pemda_lambang"
                                    name="pemda_lambang"
                                    value="{{old('pemda_lambang') ? old('pemda_lambang') : $data->pemda_lambang }}">

                                @if($errors->has('pemda_lambang'))
                                <small class="text-danger"> {{ $errors->first('pemda_lambang') }} </small>
                                @endif
                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="pemda_peta" class="fw-bold d-block">Gambar Peta Wilayah</label>

                                @if (empty($data->pemda_peta))
                                <img src="{{ asset('gambar/default.png') }}" alt="{{$data->pemda_peta}}"
                                    class="img-thumbnail">
                                @else
                                <img src="{{ asset('gambar/'. $data->pemda_peta)}}" alt="{{$data->pemda_peta}}"
                                    class="img-fluid img-thumbnail mt-2"></td>
                                @endif

                                <input type="text" class="form-control form-control-lg mt-2" id="pemda_peta"
                                    name="pemda_peta"
                                    value="{{old('pemda_peta') ? old('pemda_peta') : $data->pemda_peta }}">

                                @if($errors->has('pemda_peta'))
                                <small class="text-danger"> {{ $errors->first('pemda_peta') }} </small>
                                @endif
                            </div>
                            <!-- input item end -->

                            <div class="border-top border-1 pt-3 mt-4">
                                <button type="submit" class="btn btn-info waves-effect waves-light fs-4">
                                    <i class="fas fa-save me-1"></i> Simpan
                                </button>
                                <a href="{{URL::previous()}}"
                                    class="btn btn-outline-light waves-effect waves-light fs-4">
                                    <i class="fas fa-arrow-left me-1"></i> Kembali
                                </a>
                            </div>
                            <!-- submit button end -->

                        </form>
                        <!-- form end -->

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
