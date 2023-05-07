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
                                <input type="text" class="form-control form-control-lg" name="no_ikk"
                                    value="{{old('no_ikk')}}">
                                @if($errors->has('no_ikk'))
                                <label class="text-danger"> {{ $errors->first('no_ikk') }} </label>
                                @endif
                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">Urusan</label>
                                <select name="urusan_id" class="form-select form-select-lg">
                                    <option hidden>Pillih</option>
                                    @foreach ($data as $urusan)
                                    <option value="{{ $urusan->id }}">{{ $urusan->judul_urusan }}</option>
                                    @endforeach

                                </select>
                                @if($errors->has('urusan_id'))
                                <label class="text-danger"> {{ $errors->first('urusan_id') }} </label>
                                @endif
                            </div>
                            <!-- input item end -->
                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">Perangkat Daerah</label>
                                <select name="user_id" class="form-select form-select-lg">
                                    <option hidden>Pillih</option>
                                    @foreach ($user as $data)
                                    @if($data->name == 'Admin')
                                    @elseif ($data->name == 'Supervisor')
                                    @else
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                    @endif
                                    @endforeach

                                </select>
                                @if($errors->has('user_id'))
                                    <label class="text-danger"> {{ $errors->first('user_id') }} </label>
                                @endif
                            </div>
                            <!-- input item end -->



                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">IKK</label>
                                <textarea name="ikk" id="" rows="5"
                                    class="form-control form-control-lg">{{old('ikk')}}</textarea>
                                    @if($errors->has('ikk'))
                                    <label class="text-danger"> {{ $errors->first('ikk') }} </label>
                                @endif
                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">Rumus</label>
                                <textarea name="rumus" id="" rows="5"
                                    class="form-control form-control-lg">{{old('rumus')}}</textarea>

                                    @if($errors->has('rumus'))
                                    <label class="text-danger"> {{ $errors->first('rumus') }} </label>
                                @endif
                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">Keterangan Nilai 1</label>
                                <input type="text" class="form-control form-control-lg" name="ket_jml1"
                                    value="{{old('ket_jml1')}}">
                                    @if($errors->has('ket_jml1'))
                                    <label class="text-danger"> {{ $errors->first('ket_jml1') }} </label>
                                @endif
                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">Nilai 1</label>
                                <input type="text" class="form-control form-control-lg" name="jml1"  value="{{old('jml1')}}">
                                    @if($errors->has('jml1'))
                                    <label class="text-danger"> {{ $errors->first('jml1') }} </label>
                                @endif
                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">Keterangan Nilai 2</label>
                                <input type="text" class="form-control form-control-lg" name="ket_jml2" value="{{old('ket_jml2')}}">
                                @if($errors->has('ket_jml2'))
                                <label class="text-danger"> {{ $errors->first('ket_jml2') }} </label>
                            @endif
                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">Nilai 2</label>
                                <input type="text" class="form-control form-control-lg" name="jml2" value="{{old('jml2')}}">
                                @if($errors->has('jml2'))
                                <label class="text-danger"> {{ $errors->first('jml2') }} </label>
                            @endif
                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">Capaian Kinerja</label>
                                <input type="text" class="form-control form-control-lg" name="capaian_kinerja" value="{{old('capaian_kinerja')}}">
                                @if($errors->has('capaian_kinerja'))
                                    <label class="text-danger"> {{ $errors->first('capaian_kinerja') }} </label>
                                @endif
                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">Keterangan</label>
                                <textarea name="keterangan" id="" rows="5"
                                    class="form-control form-control-lg">{{old('keterangan')}}</textarea>
                                    @if($errors->has('keterangan'))
                                    <label class="text-danger"> {{ $errors->first('keterangan') }} </label>
                                    @endif
                            </div>
                            <!-- input item end -->

                            <div class="border-top border-1 pt-3 mt-4">
                                <button type="submit" class="btn btn-info waves-effect waves-light fs-4">
                                    <i class="fas fa-save me-1"></i> Simpan
                                </button>
                                <a href="{{URL::previous()}}"
                                    class="btn btn-outline-light waves-effect waves-light fs-4">
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
