@extends('admin.layouts.app')
@section('content')
    <!-- start page content wrapper-->
        <div class="row mb-3">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{asset('admin/beranda')}}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="{{asset('admin/lppd/perangkatdaerah')}}">Perangkat Daerah</a></li>
                            <li class="breadcrumb-item active">Ubah Perangkat Daerah</li>
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

                                <h3 class="fw-bold">Ubah Perangkat Daerah</h3>
                                <br>
                                <form action="{{route('admin.perangkatdaerah.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')

                                    <label for="" class="fw-bold">Foto Kantor</label>
                                    <div class="mb-3 fs-4 text-center">

                                        <img src="{{asset('file/foto/perangkatdaerah')}}/{{ $data->perangkatdaerah->foto_gedung ?? ''}}"
                                        alt="Logo" width="250px" class="img-thumbnail mb-1">

                                        <input type="file" name="foto_gedung" class="form-control form-control-lg">
                                        @if($errors->has('foto_gedung'))
                                            <label class="text-danger"> {{ $errors->first('foto_gedung') }} </label>
                                        @endif
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Nama Organisasi</label>
                                        <input type="text" class="form-control form-control-lg" placeholder="Nama Instansi atau Organisasi"
                                        value="{{ old('nama_organisasi',$data->perangkatdaerah->nama_organisasi ?? '')}}"  name="nama_organisasi">
                                        @if($errors->has('nama_organisasi'))
                                            <label class="text-danger"> {{ $errors->first('nama_organisasi') }} </label>
                                        @endif
                                    </div>
                                    <!-- input item end -->

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Urusan</label>
                                        <input type="text" class="form-control form-control-lg" placeholder="Urusan"
                                        value="{{ old('urusan',$data->perangkatdaerah->urusan ?? '')}}"  name="urusan">
                                        @if($errors->has('urusan'))
                                            <label class="text-danger"> {{ $errors->first('urusan') }} </label>
                                        @endif
                                    </div>
                                    <!-- input item end -->

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Tipe Kantor</label>
                                        <input type="text" class="form-control form-control-lg" placeholder="Tipe kantor"
                                        value="{{ old('tipe_kantor',$data->perangkatdaerah->tipe_kantor ?? '')}}"  name="tipe_kantor">
                                        @if($errors->has('tipe_kantor'))
                                            <label class="text-danger"> {{ $errors->first('tipe_kantor') }} </label>
                                        @endif
                                    </div>
                                    <!-- input item end -->

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Alamat</label>
                                        <textarea name="alamat" id="" rows="5" class="form-control form-control-lg" placeholder="Alamat Kantor">{{ old('alamat',$data->perangkatdaerah->alamat ?? '')}}</textarea>
                                        @if($errors->has('alamat'))
                                            <label class="text-danger"> {{ $errors->first('alamat') }} </label>
                                        @endif
                                    </div>
                                    <!-- input item end -->


                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Nama Pimpinan</label>
                                        <input type="text" class="form-control form-control-lg" placeholder="Nama Pimpinan Dinas"
                                        value="{{ old('nama_pimpinan',$data->perangkatdaerah->nama_pimpinan ?? '')}}"  name="nama_pimpinan">
                                        @if($errors->has('nama_pimpinan'))
                                            <label class="text-danger"> {{ $errors->first('nama_pimpinan') }} </label>
                                        @endif
                                    </div>
                                    <!-- input item end -->

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Jumlah Pegawai</label>
                                        <input type="text" class="form-control form-control-lg" placeholder="Jumlah Pegawai"
                                        value="{{ old('jumlah_pegawai',$data->perangkatdaerah->jumlah_pegawai ?? '')}}"  name="jumlah_pegawai">
                                        @if($errors->has('jumlah_pegawai'))
                                            <label class="text-danger"> {{ $errors->first('jumlah_pegawai') }} </label>
                                        @endif
                                    </div>
                                    <!-- input item end -->

                                    <div class="border-top border-1 pt-3 mt-4"></div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Alamat Email</label>
                                        <input type="text" class="form-control form-control-lg" placeholder="Alamat email" value="{{ old('email',$data->email ?? '')}}"  name="email">
                                        @if($errors->has('email'))
                                            <label class="text-danger"> {{ $errors->first('email') }} </label>
                                        @endif
                                    </div>
                                    <!-- input item end -->

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Kata Sandi</label>
                                        {!! Form::password('password',['id'=>'password','class'=>'form-control form-control-lg','placeholder'=>'Kata sandi pengguna']) !!}
                                    </div>
                                    <!-- input item end -->

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Konfirmasi Kata Sandi</label>
                                        {!! Form::password('confirm-password',['id'=>'confirm-password','class'=>'form-control form-control-lg','placeholder'=>'Konfirmasi kata sandi pengguna']) !!}
                                    </div>
                                    <!-- input item end -->

                                    <div class="border-top border-1 pt-3 mt-4">
                                        <button type="submit" class="btn btn-info waves-effect waves-light fs-4">
                                            <i class="fas fa-save me-1"></i> Simpan
                                        </button>
                                        <a href="{{URL::previous()}}" class="btn btn-outline-light waves-effect waves-light fs-4">
                                            <i class="fas fa-arrow-left me-1"></i> Kembali
                                        </a>
                                    </div>
                                    <!-- input item end -->

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
