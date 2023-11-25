@extends('admin.layouts.app')
@section('content')
<!-- start page content wrapper-->
<div class="row mb-3">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{asset('admin/beranda')}}">Beranda</a></li>
                    <li class="breadcrumb-item">Pelaporan</li>
                    <li class="breadcrumb-item active">Upload</li>
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

                        <h1 class="fw-bold">File Bukti</h1>

                        <form action="{{route('admin.ikk.uploadFileBukti.store',['id' => $data->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">Upload File</label>
                                <input type="file" class="form-control" name="file_bukti" value="{{ old('file_bukti',$data->file_bukti) }}" >
                                <small class="text-muted">File harus berupda file dengan extensi PDF</small>
                                @if($errors->has('file_bukti'))
                                    <label class="text-danger"> {{ $errors->first('file_bukti') }} </label>
                                @endif
                            </div>
                            <!-- input item end -->

                            <div class="border-top border-1 pt-3 mt-4">
                                <button type="submit" class="btn btn-success waves-effect waves-light fs-4">
                                    <i class="fas fa-save me-1"></i> Simpan
                                </button>
                                <a href="{{URL::previous()}}"
                                    class="btn btn-outline-light waves-effect waves-light fs-4">
                                    <i class="fas fa-arrow-left me-1"></i> Tidak
                                </a>
                            </div>
                            <!-- input buttons end -->

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
