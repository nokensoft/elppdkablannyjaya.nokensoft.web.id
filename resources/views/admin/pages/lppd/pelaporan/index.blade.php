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
                        Tanggal : <span class="fw-bold">{{ today()->toDateString() }}</span>

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

                                        <tr class="@if (!empty($data->cover_file)) bg-success text-light @endif">
                                            <td>{{$data->cover}}</td>
                                                <td class="text-center">
                                                    @if(empty($data->cover_file))
                                                    <i class="fas fa-times"></i>
                                                    @else
                                                    <i class="fas fa-check"></i>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if (!$data->cover_file)
                                                    <a href="{{ route('admin.pelaporan.createCover',['id' => $data->id]) }}" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                        <i class="fas fa-upload mr-1"></i> Upload
                                                    </a>
                                                    @else
                                                    <a href="{{ asset('file/lppd/' . $data->cover_file) }}" target="_blank" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                        <i class="fas fa-download mr-1"></i> Download
                                                    </a>
                                                    
                                                    <a href="{{ route('admin.pelaporan.createCover',['id' => $data->id]) }}" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                        <i class="fas fa-edit mr-1"></i>
                                                    </a>
                                                    <a href="{{ route('admin.pelaporan.deleteCover',['id' => $data->id]) }}" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                        <i class="fas fa-trash mr-1"></i>
                                                    </a>
                                                    @endif

                                                </td>
                                            </tr> 
                                            
                                            <tr class="@if (!empty($data->babi_file)) bg-success text-light @endif">
                                                <td>{{$data->babi}}</td>
                                                    <td class="text-center">
                                                        @if(empty($data->babi_file))
                                                        <i class="fas fa-times"></i>
                                                        @else
                                                        <i class="fas fa-check"></i>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if (!$data->babi_file)
                                                        <a href="{{ route('admin.pelaporan.createBabI',['id' => $data->id]) }}" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                            <i class="fas fa-upload mr-1"></i> Upload
                                                        </a>
                                                        @else
                                                        <a href="{{ asset('file/lppd/' . $data->babi_file) }}" target="_blank" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                            <i class="fas fa-download mr-1"></i> Download
                                                        </a>
                                                        
                                                        <a href="{{ route('admin.pelaporan.createBabI',['id' => $data->id]) }}" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                            <i class="fas fa-edit mr-1"></i>
                                                        </a>
                                                        <a href="{{ route('admin.pelaporan.deleteBabI',['id' => $data->id]) }}" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                            <i class="fas fa-trash mr-1"></i>
                                                        </a>
                                                        @endif
    
                                                    </td>
                                                </tr> 
                                            
                                                <tr class="@if (!empty($data->babii_file)) bg-success text-light @endif">
                                                    <td>{{$data->babii}}</td>
                                                    <td class="text-center">
                                                        @if(empty($data->babii_file))
                                                        <i class="fas fa-times"></i>
                                                        @else
                                                        <i class="fas fa-check"></i>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if (!$data->babii_file)
                                                        <a href="{{ route('admin.pelaporan.createBabII',['id' => $data->id]) }}" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                            <i class="fas fa-upload mr-1"></i> Upload
                                                        </a>
                                                        @else
                                                        <a href="{{ asset('file/lppd/' . $data->babii_file) }}" target="_blank" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                            <i class="fas fa-download mr-1"></i> Download
                                                        </a>
                                                        
                                                        <a href="{{ route('admin.pelaporan.createBabII',['id' => $data->id]) }}" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                            <i class="fas fa-edit mr-1"></i>
                                                        </a>
                                                        <a href="{{ route('admin.pelaporan.deleteBabII',['id' => $data->id]) }}" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                            <i class="fas fa-trash mr-1"></i>
                                                        </a>
                                                        @endif
    
                                                    </td>
                                                </tr> 

                                                <tr class="@if (!empty($data->babiii_file)) bg-success text-light @endif">
                                                    <td>{{$data->babiii}}</td>
                                                    <td class="text-center">
                                                        @if(empty($data->babiii_file))
                                                        <i class="fas fa-times"></i>
                                                        @else
                                                        <i class="fas fa-check"></i>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if (!$data->babiii_file)
                                                        <a href="{{ route('admin.pelaporan.createBabIII',['id' => $data->id]) }}" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                            <i class="fas fa-upload mr-1"></i> Upload
                                                        </a>
                                                        @else
                                                        <a href="{{ asset('file/lppd/' . $data->babiii_file) }}" target="_blank" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                            <i class="fas fa-download mr-1"></i> Download
                                                        </a>
                                                        
                                                        <a href="{{ route('admin.pelaporan.createBabIII',['id' => $data->id]) }}" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                            <i class="fas fa-edit mr-1"></i>
                                                        </a>
                                                        <a href="{{ route('admin.pelaporan.deleteBabIII',['id' => $data->id]) }}" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                            <i class="fas fa-trash mr-1"></i>
                                                        </a>
                                                        @endif
    
                                                    </td>
                                                </tr> 

                                                <tr class="@if (!empty($data->babiv_file)) bg-success text-light @endif">
                                                    <td>{{$data->babiv}}</td>
                                                    <td class="text-center">
                                                        @if(empty($data->babiv_file))
                                                        <i class="fas fa-times"></i>
                                                        @else
                                                        <i class="fas fa-check"></i>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if (!$data->babiv_file)
                                                        <a href="{{ route('admin.pelaporan.createBabIV',['id' => $data->id]) }}" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                            <i class="fas fa-upload mr-1"></i> Upload
                                                        </a>
                                                        @else
                                                        <a href="{{ asset('file/lppd/' . $data->babiv_file) }}" target="_blank" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                            <i class="fas fa-download mr-1"></i> Download
                                                        </a>
                                                        
                                                        <a href="{{ route('admin.pelaporan.createBabIV',['id' => $data->id]) }}" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                            <i class="fas fa-edit mr-1"></i>
                                                        </a>
                                                        <a href="{{ route('admin.pelaporan.deleteBabIV',['id' => $data->id]) }}" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                            <i class="fas fa-trash mr-1"></i>
                                                        </a>
                                                        @endif
    
                                                    </td>
                                                </tr> 

                                                <tr class="@if (!empty($data->babv_file)) bg-success text-light @endif">
                                                    <td>{{$data->babv}}</td>
                                                    <td class="text-center">
                                                        @if(empty($data->babv_file))
                                                        <i class="fas fa-times"></i>
                                                        @else
                                                        <i class="fas fa-check"></i>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if (!$data->babv_file)
                                                        <a href="{{ route('admin.pelaporan.createBabV',['id' => $data->id]) }}" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                            <i class="fas fa-upload mr-1"></i> Upload
                                                        </a>
                                                        @else
                                                        <a href="{{ asset('file/lppd/' . $data->babv_file) }}" target="_blank" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                            <i class="fas fa-download mr-1"></i> Download
                                                        </a>
                                                        
                                                        <a href="{{ route('admin.pelaporan.createBabV',['id' => $data->id]) }}" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                            <i class="fas fa-edit mr-1"></i>
                                                        </a>
                                                        <a href="{{ route('admin.pelaporan.deleteBabV',['id' => $data->id]) }}" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                            <i class="fas fa-trash mr-1"></i>
                                                        </a>
                                                        @endif
    
                                                    </td>
                                                </tr> 

                                                <tr class="@if (!empty($data->lampiran_file)) bg-success text-light @endif">
                                                    <td>{{$data->lampiran}}</td>
                                                    <td class="text-center">
                                                        @if(empty($data->lampiran_file))
                                                        <i class="fas fa-times"></i>
                                                        @else
                                                        <i class="fas fa-check"></i>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if (!$data->lampiran_file)
                                                        <a href="{{ route('admin.pelaporan.createLampiran',['id' => $data->id]) }}" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                            <i class="fas fa-upload mr-1"></i> Upload
                                                        </a>
                                                        @else
                                                        <a href="{{ asset('file/lppd/' . $data->lampiran_file) }}" target="_blank" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                            <i class="fas fa-download mr-1"></i> Download
                                                        </a>
                                                        
                                                        <a href="{{ route('admin.pelaporan.createLampiran',['id' => $data->id]) }}" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                            <i class="fas fa-edit mr-1"></i>
                                                        </a>
                                                        <a href="{{ route('admin.pelaporan.deleteLampiran',['id' => $data->id]) }}" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                                            <i class="fas fa-trash mr-1"></i>
                                                        </a>
                                                        @endif
    
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
