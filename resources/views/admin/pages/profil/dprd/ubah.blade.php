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
                            <li class="breadcrumb-item active">Pemerintah Daerah</li>
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

                                <h1 class="fw-bold">Ubah Profil DPRD</h1>

                                <form action="{{route('admin.dprd.update',$data[0]->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3 fs-4">
                                        @if ($data[0]->foto == null)
                                            <img src="{{asset('assets/admin/assets/images/users/user-man.png')}}" alt="{{$data[0]->slug}}"  width="250px" class="img-thumbnail mb-1">
                                        @else
                                                <img src="{{ url($data[0]->foto)}}" alt="{{$data[0]->foto}}" class="img-fluid img-thumbnail"  width="250px" class="img-thumbnail mb-1"></td>
                                        @endif
                                        <input type="file" class="form-control form-control-lg" name="foto">
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Nama Lengkap</label>
                                        <input type="text" class="form-control form-control-lg" name="nama_lengkap" value="{{old('nama_lengkap') ? old('nama_lengkap') : $data[0]->nama_lengkap }}">
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Jabatan</label>
                                        <input type="text" class="form-control form-control-lg" name="jabatan" value="{{old('jabatan') ? old('jabatan') : $data[0]->jabatan }}">
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">NIK</label>
                                        <input type="text" class="form-control form-control-lg" name="nik" value="{{old('nik') ? old('nik') : $data[0]->nik }}">
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Alamat</label>
                                        <input type="text" class="form-control form-control-lg" value="{{old('alamat') ? old('alamat') : $data[0]->alamat }}" name="alamat">
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">TTL</label>
                                        <input type="text" class="form-control form-control-lg" value="{{old('ttl') ? old('ttl') : $data[0]->ttl }}" name="ttl">
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Nama Partai</label>
                                        <input type="text" class="form-control form-control-lg" value="{{old('nama_partai') ? old('nama_partai') : $data[0]->nama_partai }}" name="nama_partai">
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Pendidikan</label>
                                        <input type="text" class="form-control form-control-lg" value="{{old('pendidikan') ? old('pendidikan') : $data[0]->pendidikan }}" name="pendidikan">
                                    </div>
                                    {{-- <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Perjalanan Dinas</label>
                                        <input type="text" class="form-control form-control-lg bg-secondary text-light" value="33 Kali" disabled>
                                        <a href="#" class="link-info mt-1 d-block">Olah Data</a>
                                    </div> --}}

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
