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
                        <img src="{{ asset( Auth::user()->avatar )}}" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                        <h4 class="mb-0">{{ Auth::user()->name }}</h4>
                        <p class="text-muted">{{ Auth::user()->email }}</p>
                    </div> <!-- end card-box -->
                </div>
                @if(Auth::user()->hasRole('opd'))
                <div class="card">
                    <div class="card-body text-center">
                        @if(!Auth::user()->perangkatdaerah->foto_gedung ?? '')
                        <img src="{{asset('assets/images/image1.png')}}" alt="Logo" width="80px" class="img-thumbnail">
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
                        <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle mr-1"></i> Personal Info</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="firstname">First Name</label>
                                    <input type="text" class="form-control" value="{{  Auth::user()->name }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lastname">Email</label>
                                    <input type="text" class="form-control" value="{{  Auth::user()->email }}" readonly>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                        <br>

                        @if(Auth::user()->hasRole('opd'))

                            <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-office-building mr-1"></i> Data OPD</h5>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="companyname">Nama Pimpinan</label>
                                        <input type="text" class="form-control" value="{{ Auth::user()->perangkatdaerah->nama_pimpinan ?? '' }}" readonly>
                                    </div>
                                </div>
                            </div> <!-- end row -->
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="companyname">Nama OPD</label>
                                        <input type="text" class="form-control" value="{{ Auth::user()->perangkatdaerah->nama_organisasi ?? '' }}" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cwebsite">Urusan</label>
                                        <input type="text" class="form-control"  value="{{ Auth::user()->perangkatdaerah->urusan ?? '' }}" readonly>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="companyname">Tipe Kantor</label>
                                        <input type="text" class="form-control" value="{{ Auth::user()->perangkatdaerah->nama_organisasi ?? '' }}" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cwebsite">Jumlah Pegawai</label>
                                        <input type="text" class="form-control" value="{{ Auth::user()->perangkatdaerah->jumlah_pegawai ?? ''  }}" readonly>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                            <br>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="userbio">Alamat</label>
                                        <textarea class="form-control"  rows="4" readonly>{{  Auth::user()->perangkatdaerah->alamat ?? '' }}</textarea>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->


                            <div class="text-right">
                                <a href="#" class="btn btn-success waves-effect waves-light mt-2">
                                    <i class="mdi mdi-content-save"></i> Edit
                                </a>
                            </div>

                        @endif
                    </form>
                </div> <!-- end card-box-->
               </div>
            </div> <!-- end col -->
        </div>
        </div>


  <!--end wrapper-->

  @stop

