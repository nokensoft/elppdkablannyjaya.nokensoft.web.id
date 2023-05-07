@extends('admin.layouts.app')
@section('content')
    <!-- start page content wrapper-->

        <!-- row -->
        <div class="row mb-3">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{asset('admin/beranda')}}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="{{asset('admin/ppid')}}">PPID</a></li>
                            <li class="breadcrumb-item active">Pelaporan</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <!-- row -->
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h1 class="fw-bold">LPPD Pelaporan</h1>

                        <div class="row">

                            <!-- .col start -->
                            <div class="col">

                                <table class="table table-bordered fs-4">
                                    <thead class="bg-dark text-light">
                                        <tr>
                                            <th>Judul Dokumen</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach ($all as $data )
                                            <tr class="@if ($data->cover != '') bg-success text-light @endif">
                                                <td>{{$data->cover}}</td>
                                                <td class="text-center">
                                                    @if ($data->cover != '') <i class="fas fa-check mr-1"></i> @else <i class="fas fa-check mr-1"></i> @endif
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                        <i class="fas fa-download mr-1"></i>
                                                        Unduh Dokumen
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>{{$data->babi}}</td>
                                                <td class="text-center">
                                                    <i class="fas fa-times"></i>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                        <i class="fas fa-upload mr-1"></i>
                                                        Unggah Dokumen
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>{{$data->babii}}</td>
                                                <td class="text-center">
                                                    <i class="fas fa-times"></i>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                        <i class="fas fa-upload mr-1"></i>
                                                        Unggah Dokumen
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>{{$data->babiii}}</td>
                                                <td class="text-center">
                                                    <i class="fas fa-times"></i>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                        <i class="fas fa-upload mr-1"></i>
                                                        Unggah Dokumen
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>{{$data->babiv}}</td>
                                                <td class="text-center">
                                                    <i class="fas fa-times"></i>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                        <i class="fas fa-upload mr-1"></i>
                                                        Unggah Dokumen
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>{{$data->babv}}</td>
                                                <td class="text-center">
                                                    <i class="fas fa-times"></i>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                        <i class="fas fa-upload mr-1"></i>
                                                        Unggah Dokumen
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>{{$data->lampiran}}</td>
                                                <td class="text-center">
                                                    <i class="fas fa-times"></i>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                        <i class="fas fa-upload mr-1"></i>
                                                        Unggah Dokumen
                                                    </a>
                                                </td>
                                            </tr>


                                        @endforeach
                                    </tbody>

                                </table>
                                
                            </div>
                            <!-- .col end -->

                        </div>

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
