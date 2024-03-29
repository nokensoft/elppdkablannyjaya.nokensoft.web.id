@extends('admin.layouts.app')
@section('content')
    <!-- start page content wrapper-->
      <!-- start page title -->
	  <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">App</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                            <li class="breadcrumb-item active">Slider</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Slider</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">FORM</h5>
                                        {!! Form::model($data,array('url'=>'app/slider/'.$data->id,'method'=>'put','files'=>'true'))!!}
                                @csrf
    

                                        <div class="mb-3">
                                            <label for="product-name" class="form-label">Title <span class="text-danger">*</span></label>
                                            {!! Form::text('title',null,['required','id'=>'title','class'=>'form-control','placeholder'=>'Title']) !!}
                                        </div>

                                        <div class="mb-3">
                                            <label for="product-reference" class="form-label">Sub Title <span class="text-danger">*</span></label>
                                            <!-- <input type="text" id="subtitle" name="subtitle" class="form-control" placeholder="Sub Title" required> -->
                                            {!! Form::text('subtitle',null,['required','id'=>'subtitle','class'=>'form-control','placeholder'=>'Subtitle', 'required']) !!}
                                        </div>

                                        

                                      

                                        <div class="mb-3">
                                            <label for="product-category" class="form-label">Status <span class="text-danger">*</span></label>
                                            <!-- <select class="form-control select2" name="status" id="status" required>
                                                <option>Select</option>
                                                 
                                                    <option value="1">Aktif</option>
                                                    <option value="SH2">Draft</option>
                                                     

                                            </select> -->

                                            {!! Form::select('status', [''=>'Status  ...','1'=>'Aktif','0'=>'draft'], null,['class'=>'form-control select2','id'=>'status','required']) !!}

                                        </div>
 

                                      
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-lg-6">
                                
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Gambar</h5>

                                        <input type="file" name="image"/>
                                                    <p class="text-muted text-center mt-2 mb-0">Max File size 1 MB</p>

                                        <!-- Preview -->
                                        <div class="dropzone-previews mt-3" id="file-previews"></div>
                                    </div>
                                </div> <!-- end col-->

                              

                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->
  <!--end wrapper-->

  <div class="row">
  <div class="card">
                                    <div class="card-body">
                            <div class="col-3">
                                <div class="button-list pe-xl-4 d-grid mb-3">
                                <button  type="submit" class="btn btn-lg btn-primary waves-effect waves-light">Simpan</button>
                                
                                    
                                </div>
                            </div> <!-- end col -->
                        </div>
                        </div>
                        </div>
                        {!! Form::close() !!}

  @stop
@push('script-header')
 <!-- Plugins css-->
 <link href="{{ asset('assets/admin/assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/admin/assets/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
       
        <link href="{{ asset('assets/admin/assets/libs/dropify/css/dropify.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/admin/assets/libs/quill/quill.core.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/admin/assets/libs/quill/quill.snow.css')}}" rel="stylesheet" type="text/css" />
@endpush


  @push('script-footer')
   <!-- Select2 js-->
   <script src="{{ asset('assets/admin/assets/libs/select2/js/select2.min.js')}}"></script>
        <!-- Dropzone file uploads-->
        <script src="{{ asset('assets/admin/assets/libs/dropzone/min/dropzone.min.js')}}"></script>
        <script src="{{ asset('assets/admin/assets/libs/dropify/js/dropify.min.js')}}"></script>
        <!-- Quill js -->
        <script src="{{ asset('assets/admin/assets/libs/quill/quill.min.js')}}"></script>

        <!-- Init js-->
        <script src="{{ asset('assets/admin/assets/js/pages/form-fileuploads.init.js')}}"></script>

        <!-- Init js -->
        <script src="{{ asset('assets/admin/assets/js/pages/add-product.init.js')}}"></script>


  @endpush