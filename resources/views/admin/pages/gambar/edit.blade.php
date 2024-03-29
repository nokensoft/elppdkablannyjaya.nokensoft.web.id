@extends('admin.layouts.app')
@section('content')
    <!-- start page content wrapper-->
        <div class="row mb-3">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{asset('admin/beranda')}}">Beranda</a></li>
                            <li class="breadcrumb-item active">Manajemen Gambar</li>
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

                                <h1 class="fw-bold">Ubah Gambar</h1>

                                <form action="{{route('admin.gambar.update',['id' => $data->id])}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Judul Gambar</label>
                                        <input type="text" class="form-control form-control-lg" value="{{ old('nama_file',$data->nama_file)}}"  name="nama_file" placeholder="Nama File">
                                        @if($errors->has('nama_file'))
                                            <label class="text-danger"> {{ $errors->first('nama_file') }} </label>
                                        @endif
                                    </div>
                                    <!-- input item end -->

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold d-block">Pilih Gambar</label>
                                        <div class="d-block mb-3">
                                            @if(!$data->alamat_file)
                                            <img src="{{ asset('gambar/' . $data->alamat_file) }}" id="preview-picture"  alt="image" class="img-thumbnail w-100">
                                            @else
                                            <img src="{{ asset('gambar/' . $data->alamat_file) }}" id="preview-picture" alt="image" class="img-thumbnail w-50">
                                            @endif
                                        </div>
                                        <input type="file" name="alamat_file" class="form-control form-control-lg">
                                        @if($errors->has('alamat_file'))
                                            <label class="text-danger"> {{ $errors->first('alamat_file') }} </label>
                                        @endif
                                    </div>
                                    <!-- input item end -->

                                    <div class="border-top border-1 pt-3 mt-4">
                                        <button type="submit" class="btn btn-info waves-effect waves-light fs-4">
                                            <i class="fas fa-save me-1"></i> Simpan
                                        </button>
                                        <a href="{{URL::previous()}}" class="btn btn-outline-light waves-effect waves-light fs-4">
                                            <i class="fas fa-arrow-left me-1"></i> Kembali
                                        </a>
                                    </div>
                                    <!-- input button end -->

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
