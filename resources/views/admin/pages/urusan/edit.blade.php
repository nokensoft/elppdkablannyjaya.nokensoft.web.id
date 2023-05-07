@extends('admin.layouts.app')
@section('content')
<!-- start page content wrapper-->
<div class="row mb-3">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{asset('admin/beranda')}}">Beranda</a></li>
                    <li class="breadcrumb-item">Master Data</li>
                    <li class="breadcrumb-item"><a href="{{asset('admin/urusan')}}">Urusan</a></li>
                    <li class="breadcrumb-item active">Edit</li>
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
                        <form action="{{ route('admin.urusan.update',['id' => $data->id]) }}" method="POST" >
                            @csrf
                            @method('put')
                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">Judul Urusan</label>
                                <input type="text" class="form-control" name="judul_urusan"
                                value="{{ old('judul_urusan',$data->judul_urusan) }}" placeholder="Misal: Pendidikan">

                                @if($errors->has('judul_urusan'))
                                    <label class="text-danger"> {{ $errors->first('judul_urusan') }} </label>
                                @endif
                            </div>


                            <div class="border-top border-1 pt-3 mt-4">
                                <button type="submit" class="btn btn-success waves-effect waves-light fs-4">
                                    <i class="fas fa-save me-1"></i> Simpan
                                </button>
                                <a href="{{URL::previous()}}"
                                    class="btn btn-outline-light waves-effect waves-light fs-4">
                                    <i class="fas fa-arrow-left me-1"></i> Tidak
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
