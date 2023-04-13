@extends('admin.layouts.app')
@section('content')
    <!-- start page content wrapper-->
        <div class="row mb-3">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{asset('admin/beranda')}}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="{{asset('admin/profil')}}">Profil</a></li>
                            <li class="breadcrumb-item active">Perangkat Daerah</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->


        <div class="row" id="ubah">
            <div class="col">
                <div class="card">
                    <div class="card-body">

                        <div class="row">

                            <!-- .col start -->
                            <div class="col-lg-6  mx-auto border border-4 border-info rounded shadow-lg p-5 my-5">

                                <h1 class="fw-bold">Ubah Perangkat Daerah</h1>

                                <form action="{{route('admin.perangkatdaerah.update',$data[0]->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Nama Organisasi</label>
                                        <input type="text" class="form-control form-control-lg" name="nama_organisasi" value="{{old('nama_organisasi') ? old('nama_organisasi') : $data[0]->nama_organisasi }}">
                                        @if($errors->has('nama_organisasi'))
                                            <label class="text-danger"> {{ $errors->first('nama_organisasi') }} </label>
                                         @endif
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Urusan</label>
                                        <input type="text" class="form-control form-control-lg" name="urusan" value="{{old('urusan') ? old('urusan') : $data[0]->urusan }}">
                                        @if($errors->has('urusan'))
                                            <label class="text-danger"> {{ $errors->first('urusan') }} </label>
                                         @endif
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Rumpun</label>
                                        <input type="text" class="form-control form-control-lg" name="rumpun" value="{{old('rumpun') ? old('rumpun') : $data[0]->rumpun }}">
                                        @if($errors->has('rumpun'))
                                            <label class="text-danger"> {{ $errors->first('rumpun') }} </label>
                                         @endif
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Tipe Kantor</label>
                                        <input type="text" class="form-control form-control-lg" name="tipe_kantor" value="{{old('tipe_kantor') ? old('tipe_kantor') : $data[0]->tipe_kantor }}">
                                        @if($errors->has('tipe_kantor'))
                                            <label class="text-danger"> {{ $errors->first('tipe_kantor') }} </label>
                                         @endif
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Alamat</label>
                                        <input type="text" class="form-control form-control-lg" value="{{old('alamat') ? old('alamat') : $data[0]->alamat }}" name="alamat">
                                        @if($errors->has('alamat'))
                                            <label class="text-danger"> {{ $errors->first('alamat') }} </label>
                                         @endif
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Nama Pimpinan</label>
                                        <input type="text" class="form-control form-control-lg" name="nama_pimpinan" value="{{old('nama_pimpinan') ? old('nama_pimpinan') : $data[0]->nama_pimpinan }}">
                                        @if($errors->has('nama_pimpinan'))
                                            <label class="text-danger"> {{ $errors->first('nama_pimpinan') }} </label>
                                         @endif
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Jumlah Pegawai</label>
                                        <input type="text" class="form-control form-control-lg" name="jumlah_pegawai" value="{{old('jumlah_pegawai') ? old('jumlah_pegawai') : $data[0]->jumlah_pegawai }}">
                                        @if($errors->has('jumlah_pegawai'))
                                            <label class="text-danger"> {{ $errors->first('jumlah_pegawai') }} </label>
                                         @endif
                                    </div>

                                    <div class="border-top border-1 pt-3 mt-4">
                                        <button type="submit" class="btn btn-info waves-effect waves-light fs-4">
                                            <i class="fas fa-save me-1"></i> Simpan
                                        </button>
                                        <a href="{{URL::previous()}}" class="btn btn-outline-light waves-effect waves-light fs-4">
                                            <i class="fas fa-arrow-left me-1"></i> Kembali
                                        </a>
                                    </div>

                                </form>

                            </div>
                            <!-- .col end -->

                        </div>
                        <!-- .row end -->

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
