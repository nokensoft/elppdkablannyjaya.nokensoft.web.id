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
                    <li class="breadcrumb-item">Desa</li>
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

                        <h1 class="fw-bold">Ubah Desa</h1>

                        <form action="{{route('admin.desa.update',$data->id)}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <hr class="border my-4">
                            <h4 class="fw-bold text-uppercase mb-3 text-secondary">Upload Foto</h4>

                            <label for="" class="fw-bold">Foto Kantor Desa</label>
                            <div class="mb-3 fs-4 text-center">
                                @if(!$data->foto_kantor)
                                <img src="{{asset('assets/images/image1.png')}}" alt="Logo" width="100px"
                                    class="img-thumbnail mb-1">
                                @else
                                <img src="{{asset('file/foto/kantor/desa')}}/{{ $data->foto_kantor }}" alt="Logo"
                                    width="100px" class="img-thumbnail mb-1">
                                @endif
                                <input type="file" name="foto_kantor" class="form-control form-control-lg">
                                @if($errors->has('foto_kantor'))
                                <label class="text-danger"> {{ $errors->first('foto_kantor') }} </label>
                                @endif
                            </div>
                            <label for="" class="fw-bold">Foto Kepala Desa</label>
                            <div class="mb-3 fs-4 text-center">
                                @if(!$data->foto_kepala_desa)
                                <img src="{{asset('assets/admin/assets/images/users/user-default.png')}}" alt="Logo"
                                    width="100px" class="img-thumbnail mb-1">
                                @else
                                <img src="{{asset('file/foto/kepala/desa')}}/{{ $data->foto_kepala_desa }}" alt="Logo"
                                    width="100px" class="img-thumbnail mb-1">
                                @endif
                                <input type="file" name="foto_kepala_desa" class="form-control form-control-lg">
                                @if($errors->has('foto_kepala_desa'))
                                <label class="text-danger"> {{ $errors->first('foto_kepala_desa') }} </label>
                                @endif
                            </div>
                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">Nama Desa</label>
                                <input type="text" class="form-control form-control-lg" name="nama_desa"
                                    value="{{old('nama_desa') ? old('nama_desa') : $data->nama_desa }}">
                                @if($errors->has('nama_desa'))
                                <label class="text-danger"> {{ $errors->first('nama_desa') }} </label>
                                @endif
                            </div>

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">Nama Kepala Desa</label>
                                <input type="text" class="form-control form-control-lg" name="nama_kepala_desa"
                                    value="{{old('nama_kepala_desa') ? old('nama_kepala_desa') : $data->nama_kepala_desa }}">
                                @if($errors->has('nama_kepala_desa'))
                                <label class="text-danger"> {{ $errors->first('nama_kepala_desa') }} </label>
                                @endif
                            </div>

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">Nama Distrik</label>
                                <select name="distrik_id" class="form-select form-select-lg">
                                    <option hidden selected value="{{ $data->distrik_id }}">{{
                                        $data->distrik->nama_distrik ?? '' }}</option>
                                    @foreach ($distriks as $distrik)
                                    <option value="{{ $distrik->id }}">{{ $distrik->nama_distrik }}</option>
                                    @endforeach

                                </select>
                                @if($errors->has('distrik_id'))
                                <label class="text-danger"> {{ $errors->first('distrik_id') }} </label>
                                @endif
                            </div>

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">Alamat</label>
                                <textarea name="alamat" id="" rows="5"
                                    class="form-control form-control-lg">{{old('alamat') ? old('alamat') : $data->alamat }}</textarea>
                                @if($errors->has('alamat'))
                                <label class="text-danger"> {{ $errors->first('alamat') }} </label>
                                @endif
                            </div>

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">Telp</label>
                                <input type="text" class="form-control form-control-lg" name="telp"
                                    value="{{old('telp') ? old('telp') : $data->telp }}">
                                @if($errors->has('telp'))
                                <label class="text-danger"> {{ $errors->first('telp') }} </label>
                                @endif
                            </div>

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">Email</label>
                                <input type="email" class="form-control form-control-lg" name="email"
                                    value="{{old('email') ? old('email') : $data->email }}">
                                @if($errors->has('email'))
                                <label class="text-danger"> {{ $errors->first('email') }} </label>
                                @endif
                            </div>

                            <div class="border-top border-1 pt-3 mt-4">
                                <button type="submit" class="btn btn-info waves-effect waves-light fs-4">
                                    <i class="fas fa-save me-1"></i> Simpan
                                </button>
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
