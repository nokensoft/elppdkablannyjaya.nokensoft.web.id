@extends('admin.layouts.app')
@section('content')
    <!-- start page content wrapper-->
        <div class="row mb-3">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{asset('admin/beranda')}}">Beranda</a></li>
                            <li class="breadcrumb-item active">Pengguna</li>
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
                        <h1 class="fw-bold">Pengguna</h1>
                        <div class="mb-3">
                            <a href="{{ route('pengguna.create') }}" class="btn btn-info waves-effect waves-light fs-4">
                                <i class="fas fa-plus me-1"></i> Tambah Data
                            </a>
                        </div>

                        <div class="row">

                            <!-- .col start -->
                            <div class="col">
                                <table class="table table-bordered fs-4">
                                    <thead class="bg-dark text-light">
                                        <tr>
                                            <th>Foto</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($datas as $user )
                                            <tr>
                                                <td>
                                                    @if (!$user->avatar)
                                                        <img src="{{asset('assets/images/1.jpg')}}" alt="Logo" width="80px" class="img-thumbnail">
                                                    @else
                                                     <img src="{{ url($user->avatar)}}" alt="{{asset($user->name)}}" class="img-fluid img-thumbnail" width="80px"></td>
                                                    @endif
                                                </td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>
                                                    {{ implode('',$user->roles()->pluck('display_name')->toArray()) }}
                                                </td>

                                                <td class="d-flex justify-content-between gap-1">


                                                    @if (Auth::id() == $user->id)
                                                    <a href="{{route('pengguna.show',$user->slug)}}"
                                                        class="btn btn-sm btn-dark border-0  waves-effect waves-light fs-4">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a href="{{route('pengguna.edit',$user->slug)}}"
                                                        class="btn btn-sm btn-outline-dark border-0 waves-effect waves-light fs-4">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    @else
                                                    <a href="{{route('pengguna.show',$user->slug)}}"
                                                        class="btn btn-sm btn-dark border-0  waves-effect waves-light fs-4">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a href="{{route('pengguna.edit',$user->slug)}}"
                                                        class="btn btn-sm btn-outline-dark border-0 waves-effect waves-light fs-4">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="{{route('pengguna.delete',$user->slug)}}" class="btn btn-sm btn-outline-dark border-0 waves-effect waves-light fs-4">
                                                        <i class="fas fa-trash"></i>
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

  @endpush
