@extends('admin.layouts.app')
@section('content')
    <!-- start page content wrapper-->
        <div class="row mb-3">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{asset('admin/beranda')}}">Beranda</a></li>
                            <li class="breadcrumb-item active">Pengaturan</li>
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

                                <h1 class="fw-bold">Ubah Pengaturan</h1>


                                <form action="{{route('admin.pengaturan.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')

                                    {{-- <div class="mb-3 fs-4">
                                        @if ($data->foto == null)
                                            <img src="{{asset('assets/admin/assets/images/users/user-man.png')}}" alt="{{$data->slug}}"  width="250px" class="img-thumbnail mb-1">
                                        @else
                                                <img src="{{ url($data->foto)}}" alt="{{$data->foto}}" class="img-fluid img-thumbnail"  width="250px" class="img-thumbnail mb-1"></td>
                                        @endif
                                        <input type="file" class="form-control form-control-lg" name="foto">
                                    </div> --}}

                                    <div class="mb-3 fs-4">
                                        <label for="judul_situs" class="fw-bold">Judl Situs</label>
                                        <input type="text" class="form-control form-control-lg" name="judul_situs" value="{{old('judul_situs') ? old('judul_situs') : $data->judul_situs }}">

                                        @if($errors->has('judul_situs'))
                                            <small class="text-danger"> {{ $errors->first('judul_situs') }} </small>
                                        @endif

                                    </div>
                                    <!-- input item end -->

                                    <div class="mb-3 fs-4">
                                        <label for="deskripsi_situs" class="fw-bold">Deskripsi Situs</label>
                                        <input type="text" class="form-control form-control-lg" name="deskripsi_situs" value="{{old('deskripsi_situs') ? old('deskripsi_situs') : $data->deskripsi_situs }}">

                                        @if($errors->has('deskripsi_situs'))
                                            <small class="text-danger"> {{ $errors->first('deskripsi_situs') }} </small>
                                        @endif

                                    </div>
                                    <!-- input item end -->
                                    
                                    <div class="mb-3 fs-4">
                                        @if ($data->logo == null)
                                            <img src="{{asset('assets/images/profildaerah/kepala.png')}}" alt="{{$data->logo}}"  width="250px" class="img-thumbnail">
                                        @else
                                            <img src="{{ url($data->logo)}}" alt="{{$data->logo}}" class="img-fluid img-thumbnail"  width="250px" class="img-thumbnail"></td>
                                        @endif
                                       
                                        <input type="text" class="form-control form-control-lg mt-2" name="logo" value="{{old('logo') ? old('logo') : $data->logo }}">

                                        {{-- <input type="file" name="logo_situs" class="form-control form-control-lg"> --}}

                                        @if($errors->has('logo'))
                                            <label class="text-danger"> {{ $errors->first('logo') }} </label>
                                        @endif
                                        
                                    </div>
                                    <!-- input item end -->
                                    
                                    <div class="mb-3 fs-4">
                                        @if ($data->favicon == null)
                                            <img src="{{asset('assets/images/profildaerah/kepala.png')}}" alt="{{$data->favicon}}"  width="100px" class="img-thumbnail">
                                        @else
                                            <img src="{{ url($data->favicon)}}" alt="{{$data->favicon}}" class="img-fluid img-thumbnail"  width="100px" class="img-thumbnail"></td>
                                        @endif

                                        <input type="text" class="form-control form-control-lg mt-2" name="favicon" value="{{old('favicon') ? old('favicon') : $data->favicon }}">

                                        {{-- <input type="file" name="logo" class="form-control form-control-lg mt-2" name="favicon"> --}}

                                    </div>
                                    <!-- input item end -->

                                    <div class="mb-3 fs-4">
                                        <label for="tentang_aplikasi" class="fw-bold">Tentang Aplikasi</label>
                                        <textarea name="tentang_aplikasi" id="tentang_aplikasi" cols="30" rows="10" class="form-control form-control-lg">{{old('tentang_aplikasi') ? old('tentang_aplikasi') : $data->tentang_aplikasi }}</textarea>

                                        @if($errors->has('tentang_aplikasi'))
                                            <small class="text-danger"> {{ $errors->first('tentang_aplikasi') }} </small>
                                        @endif

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
                                    <!-- button end -->
                                </form>
                                <!-- form end -->
                            </div>
                            <!-- .col end -->
                        </div>
                        <!-- .row end -->

                    </div>
                    <!-- .card-body end -->
                </div>
                <!-- .body end -->
            </div>
            <!-- .col end -->
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
