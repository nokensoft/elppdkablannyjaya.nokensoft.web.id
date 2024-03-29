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
                    <li class="breadcrumb-item active">IKK</li>
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

                        <h1 class="fw-bold">Ubah IKK</h1>

                        <form action="{{route('admin.ikk.update',$data->id)}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">No IKK</label>
                                <input type="text" class="form-control form-control-lg" name="no_ikk"
                                    value="{{old('no_ikk') ? old('no_ikk') : $data->no_ikk }}">
                                @if($errors->has('no_ikk'))
                                <label class="text-danger"> {{ $errors->first('no_ikk') }} </label>
                                @endif
                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">Urusan</label>
                                <select name="urusan_id" class="form-select form-select-lg">
                                    <option hidden>Pilih</option>
                                    @foreach ($urusan as $u)
                                        @if($u->id == $data->urusan_id)
                                            <option selected value="{{ $u->id }}">{{ $u->judul_urusan }}</option>
                                        @else
                                            <option  value="{{ $u->id }}">{{ $u->judul_urusan }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">IKK Output</label>
                                <textarea name="ikk_output" id="" rows="5"
                                    class="form-control form-control-lg">{{old('ikk_output') ? old('ikk_output') : $data->ikk_output }}</textarea>
                                @if($errors->has('ikk_output'))
                                <label class="text-danger"> {{ $errors->first('ikk_output') }} </label>
                                @endif
                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">IKK Outcome</label>
                                <textarea name="ikk_outcome" id="" rows="5"
                                    class="form-control form-control-lg">{{old('ikk_outcome') ? old('ikk_outcome') : $data->ikk_outcome }}</textarea>
                                @if($errors->has('ikk_outcome'))
                                <label class="text-danger"> {{ $errors->first('ikk_outcome') }} </label>
                                @endif
                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">Rumus</label>
                                <textarea name="rumus" id="" rows="5"
                                    class="form-control form-control-lg">{{old('rumus') ? old('rumus') : $data->rumus }}</textarea>
                                @if($errors->has('rumus'))
                                <label class="text-danger"> {{ $errors->first('rumus') }} </label>
                                @endif
                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">{{ $data->ket_jml1 }}</label>
                                <input type="text" class="form-control form-control-lg" name="jml1"
                                    value="{{old('jml1') ? old('jml1') : $data->jml1 }}">
                                @if($errors->has('jml1'))
                                <label class="text-danger"> {{ $errors->first('jml1') }} </label>
                                @endif
                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">{{ $data->ket_jml2 }}</label>
                                <input type="text" class="form-control form-control-lg" name="jml2"
                                    value="{{old('jml2') ? old('jml2') : $data->jml2 }}">
                                @if($errors->has('jml2'))
                                <label class="text-danger"> {{ $errors->first('jml2') }} </label>
                                @endif
                            </div>
                            <!-- input item end -->

                            {{-- <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">Capaian Kinerja</label>
                                <?php
                                            $kali = $data->jml1 / $data->jml2;
                                            $hasil = $kali * 100;
                                        ?>
                                <input type="text" class="form-control form-control-lg" name="capaian_kinerja"
                                    value="<?php echo number_format($hasil,'2')?>">
                            </div> --}}

                            <div class="mb-3 fs-4">
                                <label for="" class="fw-bold">Keterangan</label>
                                <textarea name="keterangan" id="" rows="5"
                                    class="form-control form-control-lg">{{old('keterangan') ? old('keterangan') : $data->keterangan }}</textarea>
                                @if($errors->has('keterangan'))
                                <label class="text-danger"> {{ $errors->first('keterangan') }} </label>
                                @endif
                            </div>
                            <!-- input item end -->

                            <div class="mb-3 fs-4">
                                
                                <label for="" class="fw-bold d-block">File Bukti</label>

                                @if(!$data->file_bukti)
                                
                                <input type="file" class="form-control" name="file_bukti" value="{{ old('file_bukti',$data->file_bukti) }}" >
                                <small class="text-muted">File harus berupda file dengan extensi PDF</small>
                                @if($errors->has('file_bukti'))
                                    <label class="text-danger"> {{ $errors->first('file_bukti') }} </label>
                                @endif

                                @else
                                <a href="{{ asset('file/ikk/' . $data->file_bukti) }}" class="link-info" target="_blank">
                                    <i class="fas fa-file"></i> Tampilkan 
                                </a> |

                                <a href="{{ asset('admin/ikk/hapus_file_bukti/' . $data->id) }}" class="link-danger">
                                    <i class="fas fa-trash"></i> Hapus 
                                </a>

                                @endif
                            </div>
                            <!-- input item end -->

                            <div class="border-top border-1 pt-3 mt-4">
                                <button type="submit" class="btn btn-info waves-effect waves-light fs-4">
                                    <i class="fas fa-save me-1"></i> Simpan & Hitung
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
