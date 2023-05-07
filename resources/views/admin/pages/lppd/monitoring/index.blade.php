@extends('admin.layouts.app')
@section('content')

<!-- row -->
<div class="row mb-3">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{asset('admin/beranda')}}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{asset('admin/profil')}}">Profil</a></li>
                    <li class="breadcrumb-item active">Monitoring</li>
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
                <h1 class="fw-bold">Monitoring</h1>

                <div class="row">

                    <!-- .col start -->
                    <div class="col">

                        <table class="table table-bordered fs-4 text-center">
                            <thead class="bg-dark text-light">
                                <tr>
                                    <th>Tahun</th>
                                    <th>Cover</th>
                                    <th>BAB 1</th>
                                    <th>BAB 2</th>
                                    <th>BAB 3</th>
                                    <th>BAB 4</th>
                                    <th>BAB 5</th>
                                    <th>SURAT PERNYATAAN</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2022</td>
                                    <td>
                                        <i class="fas fa-times"></i>
                                    </td>
                                    <td class="bg-success text-light">
                                        <i class="fas fa-check"></i>
                                    </td>
                                    <td class="bg-success text-light">
                                        <i class="fas fa-check"></i>
                                    </td>
                                    <td>
                                        <i class="fas fa-times"></i>
                                    </td>
                                    <td>
                                        <i class="fas fa-times"></i>
                                    </td>
                                    <td>
                                        <i class="fas fa-times"></i>
                                    </td>
                                    <td>
                                        <i class="fas fa-times"></i>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-outline-dark waves-effect waves-light fs-4">
                                            Detail
                                        </a>
                                    </td>
                                </tr>
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
