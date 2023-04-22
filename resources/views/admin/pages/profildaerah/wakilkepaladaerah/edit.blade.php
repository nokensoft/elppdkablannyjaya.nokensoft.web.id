@extends('admin.layouts.app')
@section('content')
    <!-- start page content wrapper-->
        <div class="row mb-3">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{asset('admin/beranda')}}">Beranda</a></li>
                            <li class="breadcrumb-item active">Wakil Kepala Daerah</li>
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

                                <h1 class="fw-bold">Ubah Wakil Kepala Daerah</h1>

                                <form action="{{route('admin.profildaerah.wakilkepaladaerah.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="mb-3 fs-4">
                                        <label for="wakil_nama" class="fw-bold">Nama Wakil Kepala Daerah</label>
                                        <input type="text" class="form-control form-control-lg" id="wakil_nama" name="wakil_nama" value="{{old('wakil_nama') ? old('wakil_nama') : $data->wakil_nama }}">
                                        
                                        @if($errors->has('wakil_nama'))
                                            <small class="text-danger"> {{ $errors->first('wakil_nama') }} </small>
                                        @endif

                                    </div>
                                    <!-- input item end -->

                                    <div class="mb-3 fs-4">
                                        <label for="wakil_nik" class="fw-bold">NIK</label>
                                        <input type="text" class="form-control form-control-lg" id="wakil_nik" name="wakil_nik" value="{{old('wakil_nik') ? old('wakil_nik') : $data->wakil_nik }}">
                                        
                                        @if($errors->has('wakil_nik'))
                                            <small class="text-danger"> {{ $errors->first('wakil_nik') }} </small>
                                        @endif
                                    </div>
                                    <!-- input item end -->

                                    <div class="mb-3 fs-4">
                                        <label for="wakil_tgl_lahir" class="fw-bold">Tanggal Lahir</label>
                                        <input type="text" class="form-control form-control-lg" id="wakil_tgl_lahir" name="wakil_tgl_lahir" value="{{old('wakil_tgl_lahir') ? old('wakil_tgl_lahir') : $data->wakil_tgl_lahir }}">
                                        
                                        @if($errors->has('wakil_tgl_lahir'))
                                            <small class="text-danger"> {{ $errors->first('wakil_tgl_lahir') }} </small>
                                        @endif
                                    </div>
                                    <!-- input item end -->

                                    <div class="mb-3 fs-4">
                                        <label for="wakil_tgl_pelantikan" class="fw-bold">Tanggal Pelantikan</label>
                                        <input type="text" class="form-control form-control-lg" id="wakil_tgl_pelantikan" name="wakil_tgl_pelantikan" value="{{old('wakil_tgl_pelantikan') ? old('wakil_tgl_pelantikan') : $data->wakil_tgl_pelantikan }}">
                                        
                                        @if($errors->has('wakil_tgl_pelantikan'))
                                            <small class="text-danger"> {{ $errors->first('wakil_tgl_pelantikan') }} </small>
                                        @endif
                                    </div>
                                    <!-- input item end -->

                                    <div class="mb-3 fs-4">
                                        <label for="wakil_no_sk" class="fw-bold">Nomor SK</label>
                                        <input type="text" class="form-control form-control-lg" id="wakil_no_sk" name="wakil_no_sk" value="{{old('wakil_no_sk') ? old('wakil_no_sk') : $data->wakil_no_sk }}">
                                        
                                        @if($errors->has('wakil_no_sk'))
                                            <small class="text-danger"> {{ $errors->first('wakil_no_sk') }} </small>
                                        @endif
                                    </div>
                                    <!-- input item end -->

                                    <div class="mb-3 fs-4">
                                        <label for="wakil_file_sk" class="fw-bold">File SK</label>
                                        <input type="text" class="form-control form-control-lg" id="wakil_file_sk" name="wakil_file_sk" value="{{old('wakil_file_sk') ? old('wakil_file_sk') : $data->wakil_file_sk }}">
                                        
                                        @if($errors->has('wakil_file_sk'))
                                            <small class="text-danger"> {{ $errors->first('wakil_file_sk') }} </small>
                                        @endif
                                    </div>
                                    <!-- input item end -->

                                    <div class="mb-3 fs-4">
                                        <label for="wakil_asal_partai" class="fw-bold">Asal Partai</label>
                                        <input type="text" class="form-control form-control-lg" id="wakil_asal_partai" name="wakil_asal_partai" value="{{old('wakil_asal_partai') ? old('wakil_asal_partai') : $data->wakil_asal_partai }}">
                                        
                                        @if($errors->has('wakil_asal_partai'))
                                            <small class="text-danger"> {{ $errors->first('wakil_asal_partai') }} </small>
                                        @endif
                                    </div>
                                    <!-- input item end -->

                                    <div class="mb-3 fs-4">
                                        <label for="wakil_visi_misi" class="fw-bold">Visi & Misi</label>
                                        <textarea name="wakil_visi_misi" id="wakil_visi_misi" cols="30" rows="10" class="form-control form-control-lg">{{old('wakil_visi_misi') ? old('wakil_visi_misi') : $data->wakil_visi_misi }}</textarea>
                                        @if($errors->has('wakil_visi_misi'))
                                            <small class="text-danger"> {{ $errors->first('wakil_visi_misi') }} </small>
                                        @endif
                                    </div>
                                    <!-- input item end -->

                                    <div class="mb-3 fs-4">
                                        <label for="wakil_riwayat" class="fw-bold">Riwayat Hidup</label>
                                        <textarea name="wakil_riwayat" id="wakil_riwayat" cols="30" rows="10" class="form-control form-control-lg">{{old('wakil_riwayat') ? old('wakil_riwayat') : $data->wakil_riwayat }}</textarea>
                                        @if($errors->has('wakil_riwayat'))
                                            <small class="text-danger"> {{ $errors->first('wakil_riwayat') }} </small>
                                        @endif
                                    </div>
                                    <!-- input item end -->
                                    
                                    <div class="mb-3 fs-4">
                                        @if ($data->wakil_foto == null)
                                            <img src="{{asset('assets/images/profildaerah/kepala.png')}}" alt="{{$data->slug}}"  width="250px" class="img-thumbnail">
                                        @else
                                            <img src="{{ url($data->wakil_foto)}}" alt="{{$data->wakil_foto}}" class="img-fluid img-thumbnail"  width="250px" class="img-thumbnail"></td>
                                        @endif
                                        <input type="file" class="form-control form-control-lg mt-2" name="wakil_foto">
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
                                    <!-- submit button end -->

                                </form>
                                <!-- form end -->

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
