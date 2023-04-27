@extends('admin.layouts.app')
@section('content')
    <!-- start page content wrapper-->
        <div class="row mb-3">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{asset('admin/beranda')}}">Beranda</a></li>
                            <li class="breadcrumb-item active">Pemerintah Daerah</li>
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
                                <h1 class="fw-bold text-center">Detail Profil DPRD</h1>
                                <div class="border-top border-1 pt-3 mt-1"></div>
                                <form>
                                    <div class="mb-3 fs-4 text-center">
                                        @if (!$data->foto)
                                            <img src="{{asset('assets/admin/assets/images/users/user-man.png')}}" alt="{{$data->slug}}"  width="250px" class="img-thumbnail mb-1">
                                        @else
                                            <img src="{{asset('file/foto/dprd')}}/{{ $data->foto}}" class="img-fluid img-thumbnail"  width="250px" class="img-thumbnail mb-1"></td>
                                        @endif
                                    </div>
                                    <br>
                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Nama Lengkap</label>
                                        <input type="text" class="form-control form-control-lg" readonly value="{{$data->nama_lengkap }}">
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Jabatan</label>
                                        <input type="text" class="form-control form-control-lg" readonly value="{{$data->jabatan }}">
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">NIK</label>
                                        <input type="text" class="form-control form-control-lg" readonly value="{{$data->nik }}">
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Alamat</label>
                                        <textarea class="form-control form-control-lg"  rows="2" readonly>{{ $data->alamat }}</textarea>
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">TTL</label>
                                        <input type="text" class="form-control form-control-lg" value="{{$data->ttl }}" readonly>
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Nama Partai</label>
                                        <input type="text" class="form-control form-control-lg" value="{{$data->nama_partai }}" readonly>
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Pendidikan</label>
                                        <input type="text" class="form-control form-control-lg" value="{{$data->pendidikan}}" readonly>
                                    </div>


                                    <div class="border-top border-1 pt-3 mt-4">
                                        <a href="{{ route('admin.dprd.edit',$data->id) }}" class="btn btn-outline-light waves-effect waves-light fs-4">
                                            <i class="fas fa-edit me-1"></i> Edit
                                        </a>
                                        <a href="{{URL::previous()}}" class="btn btn-outline-light waves-effect waves-light fs-4">
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
