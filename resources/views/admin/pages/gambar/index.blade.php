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
                                <h1 class="fw-bold">Kelolah Gambar</h1>
                            </div>
                            <div class="col-md-6 text-md-end">
                                <a href="{{ route('admin.gambar.create') }}" class="btn btn-info waves-effect waves-light fs-4">
                                    <i class="fas fa-plus me-1"></i> Gambar Baru
                                </a>

                            </div>
                        </div>

                        <div class="row mt-4">
                            @foreach ($datas as $data )
                            <div class="col-md-3">

                                    <div class="card shadow border p-3">
                                        <div class="card-image-top">
                                            @if(empty($data->alamat_file))
                                                <img src="{{asset('assets/images/image1.jpg')}}" alt="image" class="img-fluid img-thumbnail p-3">
                                            @else
                                                <a @if(!empty($data->alamat_file)) href="{{ asset('gambar/' . $data->alamat_file) }} "
                                                    target="_blank" @endif>
                                                    <img src="{{ asset('gambar/' . $data->alamat_file) }} " class="img-fluid img-thumbnail p-3">
                                                </a>
                                            <span class="d-block mt-2 fw-bold">
                                                {{$data->nama_file}}
                                            </span>
                                            <input type="text" class="form-control form-control-sm mt-2" value="{{ $data->alamat_file }}" readonly>

                                            <a href="{{ route('admin.gambar.delete',['id' => $data->slug]) }}" class="btn btn-outline-light mt-2">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                            <a href="{{ route('admin.gambar.edit',['id' => $data->slug]) }}" class="btn btn-outline-light mt-2">
                                                <i class="fas fa-edit"></i>
                                            </a>

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
