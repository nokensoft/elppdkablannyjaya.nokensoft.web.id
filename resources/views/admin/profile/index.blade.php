@extends('admin.layouts.app')
@section('content')
<!-- start page content wrapper-->
<div class="row mb-3">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{asset('admin/beranda')}}">Beranda</a></li>
                    <li class="breadcrumb-item active">Profil {{ Auth::user()->name }} </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-4 col-xl-4">
        <div class="card">
            <div class="card-body text-center">
                <img src="{{ asset( Auth::user()->avatar )}}" class="rounded-circle avatar-lg img-thumbnail"
                    alt="profile-image">
                <h4 class="mb-0">{{ Auth::user()->name }}</h4>
                <p class="text-muted">{{ Auth::user()->email }}</p>
            </div> <!-- end card-box -->
        </div>
        @if(Auth::user()->hasRole('opd'))
        <div class="card">
            <div class="card-body text-center">
                @if(!Auth::user()->perangkatdaerah->foto_gedung ?? '')
                <img src="{{asset('assets/images/image1.png')}}" alt="Logo" class="img-thumbnail">
                @else

                <img src="{{asset('file/foto/perangkatdaerah')}}/{{ Auth::user()->perangkatdaerah->foto_gedung ?? '' }}"
                    class=" img-thumbnail" alt="profile-image">
                @endif
            </div> <!-- end card-box -->
        </div>
        @endif
    </div> <!-- end col-->

    <div class="col-lg-8 col-xl-8">
        <div class="card">
            <div class="card-body">
                <form>
                    <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-account-circle mr-1"></i> Informasi
                        Profil</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="firstname" class="fw-bold">Nama Penggguna</label>
                                <input type="text" class="form-control border-0 p-0" value="{{ Auth::user()->name }}"
                                    readonly>
                            </div>
                            <!-- input item end -->

                            <div class="form-group mb-3">
                                <label for="lastname" class="fw-bold">Alamat Email</label>
                                <input type="text" class="form-control border-0 p-0" value="{{ Auth::user()->email }}"
                                    readonly>
                            </div>
                            <!-- input item end -->

                        </div> <!-- end col -->
                    </div> <!-- end row -->
                    <br>

                    @if(Auth::user()->hasRole('opd'))

                    <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-office-building mr-1"></i> Data OPD
                    </h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="companyname" class="fw-bold">Nama Pimpinan</label>
                                <input type="text" class="form-control border-0 p-0"
                                    value="{{ Auth::user()->perangkatdaerah->nama_pimpinan ?? '' }}" readonly>
                            </div>
                            <!-- input item end -->

                            <div class="form-group mb-3">
                                <label for="companyname" class="fw-bold">Nama OPD</label>
                                <input type="text" class="form-control border-0 p-0"
                                    value="{{ Auth::user()->perangkatdaerah->nama_organisasi ?? '' }}" readonly>
                            </div>
                            <!-- input item end -->

                            <div class="form-group mb-3">
                                <label for="cwebsite" class="fw-bold">Urusan</label>
                                <input type="text" class="form-control border-0 p-0"
                                    value="{{ Auth::user()->perangkatdaerah->urusan ?? '' }}" readonly>
                            </div>
                            <!-- input item end -->

                            <div class="form-group mb-3">
                                <label for="companyname" class="fw-bold">Tipe Kantor</label>
                                <input type="text" class="form-control border-0 p-0"
                                    value="{{ Auth::user()->perangkatdaerah->nama_organisasi ?? '' }}" readonly>
                            </div>
                            <!-- input item end -->

                            <div class="form-group mb-3">
                                <label for="cwebsite" class="fw-bold">Jumlah Pegawai</label>
                                <input type="text" class="form-control border-0 p-0"
                                    value="{{ Auth::user()->perangkatdaerah->jumlah_pegawai ?? ''  }}" readonly>
                            </div>
                            <!-- input item end -->

                            <div class="form-group mb-3">
                                <label for="userbio" class="fw-bold">Alamat</label>
                                <textarea class="form-control border-0 p-0" rows="3"
                                    readonly>{{  Auth::user()->perangkatdaerah->alamat ?? '' }}</textarea>
                            </div>
                            <!-- input item end -->

                        </div> <!-- end col -->
                    </div> <!-- end row -->


                    <div class="text-right">
                        <a href="#" class="btn btn-outline-info border-0 waves-effect waves-light fs-4">
                            <i class="fas fa-edit me-1"></i> Ubah
                        </a>
                    </div>

                    @endif
                </form>
            </div> <!-- end card-box-->
        </div>
    </div> <!-- end col -->
</div>



<!--end wrapper-->

@stop
