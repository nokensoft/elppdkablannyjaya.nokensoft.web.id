@extends('admin.layouts.app')
@section('content')
<!-- start page content wrapper-->
<div class="row mb-3">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{asset('admin/beranda')}}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{asset('admin/profil')}}">IKK</a></li>
                    <li class="breadcrumb-item active">Makro</li>
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
                <h1 class="fw-bold">IKK @if(!empty($bidang_ikk)) {{$bidang_ikk}} @endif</h1>
                <div class="mb-3">
                    @if(Auth::user()->hasRole('administrator'))

                    <a href="{{ route('admin.ikk.create') }}" class="btn btn-info waves-effect waves-light fs-4">
                        <i class="fas fa-plus me-1"></i> Tambah Data
                    </a>
                    @endif

                    <a href="{{ route('admin.ikk.print') }}" target="_blank"
                        class="btn btn-outline-info waves-effect waves-light fs-4">
                        <i class="fas fa-print me-1"></i> Print
                    </a>

                    <a href="{{ route('admin.ikk.download_excel') }}" target="_blank"
                        class="btn btn-outline-info waves-effect waves-light fs-4">
                        <i class="fas fa-file me-1"></i> Download Excel
                    </a>

                </div>

                <div class="row">

                    <!-- .col start -->
                    <div class="col">

                        <table class="table table-bordered fs-4">
                            <thead class="bg-dark text-light">
                                <tr>
                                    <th>No IKK</th>
                                    <th>OPD</th>
                                    <th>IKK</th>
                                    <th>Rumus</th>
                                    <th>Capaian Kinerja</th>
                                    <th>Keterangan</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all as $data )
                                <tr>
                                    <td>{{$data->no_ikk}}</td>
                                    <td>{{$data->user->name ?? ''}}</td>
                                    <td>{{$data->ikk}}</td>
                                    <td>{{$data->rumus}}</td>
                                    <td>{{$data->capaian_kinerja}} %</td>
                                    <td>{{$data->keterangan}}</td>
                                    <td>
                                        @if($data->status == 'revisi')
                                        Revisi
                                        @elseif ($data->status == 'approved')
                                        Disetujui
                                        @else
                                        Review
                                        @endif

                                    </td>
                                    <td>
                                        @if(Auth::user()->hasRole('supervisor'))
                                        <a href="{{ route('admin.ikk.show',$data->id) }}"
                                            class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4"> Detail
                                        </a>
                                        <a href="{{ route('admin.ikk.status',$data->id) }}"
                                            class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4"> Ubah </a>

                                        @elseif(Auth::user()->hasRole('opd'))
                                        <a href="{{ route('admin.ikk.show',$data->id) }}"
                                            class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4"> Detail
                                        </a>
                                        <a href="{{ route('admin.ikk.status',$data->id) }}"
                                            class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4"> Ubah </a>

                                        @else
                                        @if($data->status == 'approved')
                                        <a href="{{ route('admin.ikk.show',$data->id) }}"
                                            class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4"> Detail
                                        </a>
                                        @elseif ($data->status == 'revisi')
                                        <a href="{{ route('admin.ikk.show',$data->id) }}"
                                            class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4"> Detail
                                        </a>
                                        <a href="{{route('admin.ikk.edit',$data->id)}}"
                                            class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4"> Ubah </a>
                                        <a href="{{route('admin.ikk.delete',$data->id)}}"
                                            class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4"> Hapus
                                        </a>
                                        @else
                                        <a href="{{ route('admin.ikk.show',$data->id) }}"
                                            class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4"> Detail
                                        </a>
                                        <a href="{{route('admin.ikk.edit',$data->id)}}"
                                            class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4"> Ubah </a>
                                        <a href="{{route('admin.ikk.delete',$data->id)}}"
                                            class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4"> Hapus
                                        </a>
                                        @endif
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
