@extends('admin.layouts.app')
@section('content')
    <!-- start page content wrapper-->
        <div class="row mb-3">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{asset('admin/beranda')}}">Beranda</a></li>
                            <li class="breadcrumb-item active">Images</li>
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

                        <div class="row">
                            <div class="col-md-6">
                                <h1 class="fw-bold">Image Manager</h1>
                            </div>
                            <div class="col-md-6 text-md-end">
                                <a href="#" class="btn btn-info waves-effect waves-light fs-4">
                                    <i class="fas fa-plus me-1"></i> Tambah Data
                                </a>

                                <a href="#" target="_blank" class="btn btn-outline-info border-0 waves-effect waves-light fs-4" title="Cetak file atau export ke file PDF">
                                    <i class="fas fa-print me-1"></i> Print
                                </a>

                                <a target="_blank" class="btn btn-outline-info border-0 waves-effect waves-light fs-4" title="Download file excel">
                                    <i class="fas fa-file me-1"></i> Download Excel
                                </a>

                            </div>
                        </div>

                        <div class="row mt-4">
                            @foreach ($datas as $data )
                            <div class="col-md-3">
                                
                                    <div class="card">
                                        <div class="card-image-top">
                                            @if(empty($data->alamat_file))
                                            <img src="{{asset('assets/images/image1.jpg')}}" alt="Logo" class="img-fluid img-thumbnail p-3">
                                            @else
                                            <a @if(!empty($data->alamat_file)) href="{{asset($data->alamat_file)}}" target="_blank" @endif>
                                                <img src="{{asset($data->alamat_file)}}" class="img-fluid img-thumbnail p-3">
                                            </a>
                                            <span class="d-block mt-2 fw-bold">
                                                {{$data->nama_file}}
                                            </span>
                                            <input type="text" class="form-control form-control-sm mt-2" value="{{$data->alamat_file}}">
                                            @endif
                                        </div>
                                    </div>
                                    <!-- .card end -->
                            </div>
                            <!-- .col end -->
                            @endforeach
                        </div>
                        <!-- .row end -->

                        <!--pagination start-->
                        <div class="row">
                            <div class="col">
                                {{ $datas->links() }}
                            </div>
                        </div>
                        <!--pagination end-->

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
