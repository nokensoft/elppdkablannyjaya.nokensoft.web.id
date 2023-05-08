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

                <div class="row">
                    <div class="col-md-6">
                        <h1 class="fw-bold">IKK <span class="text-capitalize">@if(!empty($judul_urusan)) {{$judul_urusan}}</span> @endif</h1>
                        Tanggal : <span class="fw-bold">{{ today()->toDateString() }}</span>
                    </div>
                    <div class="col-md-6 text-md-end">
                        @if(Auth::user()->hasRole('administrator'))

                        <a href="{{ route('admin.ikk.create') }}" class="btn btn-info waves-effect waves-light fs-4">
                            <i class="fas fa-plus me-1"></i> Tambah Data
                        </a>
                        @endif

                        <a href="{{ route('admin.ikk.print') }}" target="_blank"
                            class="btn btn-outline-info waves-effect waves-light fs-4">
                            <i class="fas fa-print me-1"></i> Print
                        </a>

                        {{-- <a href="{{ route('admin.ikk.download_excel') }}" target="_blank" class="btn btn-outline-info waves-effect waves-light fs-4">
                            <i class="fas fa-file me-1"></i> Download Excel
                        </a> --}}

                    </div>
                </div>

                <div class="row">

                    <!-- .col start -->
                    <div class="col">

                        <table class="table table-bordered fs-4">
                            <thead class="bg-dark text-light">
                                <tr>
                                    <th>Urusan</th>
                                    <th>No IKK</th>
                                    <th>IKK Output</th>
                                    <th>IKK Outcome</th>
                                    <th>Capaian</th>
                                    <th>Keterangan</th>
                                    <th>File Bukti</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($all as $data )
                                <tr class="fw-bold bg-secondary text-light">
                                    <td colspan="8">
                                        {{ $data->judul_urusan }}
                                    </td>
                                </tr>
                                @foreach ($data->ikk as $ikk )
                                <tr>
                                    <td></td>
                                    <td> {{$ikk->no_ikk}} </td>
                                    <td> {{$ikk->ikk_output}} </td>
                                    <td> {{$ikk->ikk_outcome}} </td>
                                    <td>
                                        {{$ikk->capaian_kinerja}}
                                        <a href="{{ route('admin.ikk.capaian_kinerja',['id' => $ikk->id]) }}"
                                            class="btn btn-sm btn-info border-0  waves-effect waves-light">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </td>
                                    <td> {{$ikk->keterangan}} </td>
                                    <td>
                                        @if(!$ikk->file_bukti)
                                        <a href="{{ route('admin.ikk.upload',['id' => $ikk->id]) }}" class="link-info">
                                            <i class="fas fa-file"></i> Upload File
                                        </a>
                                        @else
                                        <a href="{{ asset('file/ikk/' . $ikk->file_bukti) }}" class="link-info" target="_blank">
                                            <i class="fas fa-file"></i> File Bukti
                                        </a>
                                        @endif
                                    </td>
                                    {{-- <td>
                                        <a class=" " href="{{route('admin.ikk.show',$ikk->id)  }}">Detail</a> |
                                        <form action="{{ url('admin/ikk',$ikk->id) }}" method="POST" class="d-flex">

                                            <a class="" href="{{ url('admin/ikk/'.$ikk->id.'/edit') }}">Edit</a> |

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn text-primary">Delete</button>
                                    </td> --}}
                                    <td class="d-flex justify-content-between gap-1">
                                        @if(Cache::has('user-is-online-' . $ikk->id))
                                        <a href="{{route('admin.ikk.show',$ikk->id)}}" class="btn btn-sm btn-info border-0  waves-effect waves-light fs-4">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{route('admin.ikk.edit',$ikk->id)}}" class="btn btn-sm btn-outline-info border-0 waves-effect waves-light fs-4">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        @else
                                        <a href="{{route('admin.ikk.show',$ikk->id)}}" class="btn btn-sm btn-info border-0  waves-effect waves-light fs-4">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{route('admin.ikk.edit',$ikk->id)}}" class="btn btn-sm btn-outline-info border-0 waves-effect waves-light fs-4">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="{{route('admin.ikk.delete',$ikk->id)}}" class="btn btn-sm btn-outline-info border-0 waves-effect waves-light fs-4">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                                @endforeach
                            </tbody>

                            {{-- <tbody>
                                @foreach ($all as $data )
                                <tr>
                                    <td>
                                      {{ $data->judul_urusan }}
                                    </td>
                                    <td>
                                        @foreach ($data->ikk as $ikk )
                                           <ul>
                                                <li> {{$ikk->no_ikk}}</li>
                                           </ul>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($data->ikk as $ikk )
                                        <ul>
                                             <li> {{$ikk->ikk}}</li>
                                        </ul>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($data->ikk as $ikk )
                                        <ul>
                                             <li> {{$ikk->rumus}}</li>
                                        </ul>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($data->ikk as $ikk )
                                        <ul>
                                             <li> {{$ikk->capaian_kinerja}} %</li>
                                        </ul>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($data->ikk as $ikk )
                                        <ul>
                                             <li> {{$ikk->keterangan}} %</li>
                                        </ul>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($data->ikk as $ikk )
                                        <ul>
                                             <li>
                                                @if($ikk->status == 'revisi')
                                                Revisi
                                                @elseif ($ikk->status == 'approved')
                                                Disetujui
                                                @else
                                                Review
                                                @endif
                                             </li>
                                        </ul>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($data->ikk as $ikk )
                                            @if(Auth::user()->hasRole('supervisor'))
                                                <a href="{{ route('admin.ikk.show',$ikk->id) }}"
                                                    class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4"> Detail
                                                </a>
                                                <a href="{{ route('admin.ikk.status',$ikk->id) }}"
                                                    class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4"> Ubah
                                                </a>

                                            @elseif(Auth::user()->hasRole('opd'))
                                                <a href="{{ route('admin.ikk.show',$ikk->id) }}"
                                                    class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4"> Detail
                                                </a>
                                                <a href="{{ route('admin.ikk.status',$data->id) }}"
                                                    class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4"> Ubah
                                                </a>

                                            @else
                                            @if($data->status == 'approved')
                                                <a href="{{ route('admin.ikk.show',$ikk->id) }}"
                                                    class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4"> Detail
                                                </a>
                                            @elseif ($data->status == 'revisi')
                                                <a href="{{ route('admin.ikk.show',$ikk->id) }}"
                                                    class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4"> Detail
                                                </a>
                                                <a href="{{route('admin.ikk.edit',$ikk->id)}}"
                                                    class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4"> Ubah </a>
                                                <a href="{{route('admin.ikk.delete',$ikk->id)}}"
                                                    class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4"> Hapus
                                                </a>

                                            @else
                                            <hr>
                                                <a href="{{ route('admin.ikk.show',$ikk->id) }}"
                                                    class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4"> Detail
                                                </a>
                                                <a href="{{route('admin.ikk.edit',$ikk->id)}}"
                                                    class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4"> Ubah </a>
                                                <a href="{{route('admin.ikk.delete',$ikk->id)}}"
                                                    class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4"> Hapus
                                                </a>
                                            @endif
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                                @endforeach
                            </tbody> --}}
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
