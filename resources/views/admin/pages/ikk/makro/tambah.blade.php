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

                                <h1 class="fw-bold">Tambah IKK</h1>

                                <form action="{{route('admin.ikk.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    
                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">No IKK</label>
                                        <input type="text" class="form-control form-control-lg" name="no_ikk" value="{{old('no_ikk')}}">
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Urusan</label>
                                        {{-- <input type="text" class="form-control form-control-lg"  name="urusan" value="{{old('urusan')}}"> --}}
                                        <select name="urusan" class="form-select form-select-lg">
                                            <option hidden></option>
                                            <option value="Pendidikan">Pendidikan</option>
                                            <option value="Kesehatan">Kesehatan</option>
                                            <option value="Pekerjaan Umum">Pekerjaan Umum</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Urusan</label>
                                        <input type="text" class="form-control form-control-lg"  name="urusan" value="{{old('urusan')}}">
                                        @if($errors->has('urusan'))
                                            <label class="text-danger"> {{ $errors->first('urusan') }} </label>
                                        @endif
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">IKK</label>
                                        <textarea name="ikk" id="" rows="5" class="form-control form-control-lg">{{old('ikk')}}</textarea>
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Rumus</label>
                                        <textarea name="rumus" id="" rows="5" class="form-control form-control-lg">{{old('rumus')}}</textarea>
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Keterangan Nilai 1</label>
                                        <input type="text" class="form-control form-control-lg"  name="ket_jml1" value="{{old('ket_jml1')}}">
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Nilai 1</label>
                                        <input type="text" class="form-control form-control-lg"  name="jml1" value="{{old('jml1')}}">
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Keterangan Nilai 2</label>
                                        <input type="text" class="form-control form-control-lg"  name="ket_jml2" value="{{old('ket_jml2')}}">
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Nilai 2</label>
                                        <input type="text" class="form-control form-control-lg"  name="jml2" value="{{old('jml2')}}">
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Capaian Kinerja</label>
                                        <input type="text" class="form-control form-control-lg"  name="capaian_kinerja" value="{{old('capaian_kinerja')}}">
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Keterangan</label>
                                        <textarea name="keterangan" id="" rows="5" class="form-control form-control-lg">{{old('keterangan')}}</textarea>
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
