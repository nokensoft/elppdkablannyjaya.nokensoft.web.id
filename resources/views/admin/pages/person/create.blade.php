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
                                            <li class="breadcrumb-item active">halaman</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">halaman</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Ada Form Yang Belum diisi.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">FORM</h5>
                                        <!-- <form action="{{ url('app/halaman') }}" method="POST" enctype="multipart/form-data"> -->
                                        {!! Form::open(array('url' => 'app/person','files'=>'true')) !!}
                                        @csrf
    

    <div class="mb-3">
        <label for="name" class="form-label">Nama <span class="text-danger">*</span></label>
        {!! Form::text('name',null,['required','id'=>'name','class'=>'form-control','placeholder'=>'Nama']) !!}
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
        {!! Form::text('email',null,['required','id'=>'email','class'=>'form-control','placeholder'=>'Email']) !!}
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Phone <span class="text-danger">*</span></label>
        {!! Form::text('phone',null,['required','id'=>'phone','class'=>'form-control','placeholder'=>'Phone']) !!}
    </div>

    <div class="mb-3">
        <label for="address" class="form-label">Alamat <span class="text-danger">*</span></label>
        {!! Form::text('address',null,['required','id'=>'address','class'=>'form-control','placeholder'=>'Address']) !!}
    </div>

    <div class="mb-3">
        <label for="devisi" class="form-label">Devisi <span class="text-danger">*</span></label>
        {!! Form::text('devisi',null,['required','id'=>'devisi','class'=>'form-control','placeholder'=>'Devisi']) !!}
    </div>


    <div class="mb-3">
        <label for="jabatan" class="form-label">Jabatan <span class="text-danger">*</span></label>
        {!! Form::text('jabatan',null,['required','id'=>'jabatan','class'=>'form-control','placeholder'=>'Jabatan']) !!}
    </div>

    <div class="mb-3">
        <label for="no" class="form-label">No <span class="text-danger">*</span></label>
        {!! Form::text('no',null,['required','id'=>'no','class'=>'form-control','placeholder'=>'No']) !!}
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Image <span class="text-danger">*</span></label>
        {!! Form::file('image',null,['required','id'=>'image','class'=>'form-control','placeholder'=>'Image']) !!}
    </div>

     

    <div class="mb-3">
        <label for="product-category" class="form-label">Status <span class="text-danger">*</span></label>
        
        {!! Form::select('status', [''=>'Status  ...','1'=>'Aktif','0'=>'draft'], null,['class'=>'form-control select2','id'=>'status','required']) !!}

    </div>


  
</div>
</div> <!-- end card -->
</div> <!-- end col -->

 
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
        <!-- <link href="{{ asset('assets/admin/assets/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
       
        <link href="{{ asset('assets/admin/assets/libs/dropify/css/dropify.min.css')}}" rel="stylesheet" type="text/css" /> -->
        <link href="{{ asset('assets/admin/assets/libs/quill/quill.core.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/admin/assets/libs/quill/quill.snow.css')}}" rel="stylesheet" type="text/css" />
@endpush


  @push('script-footer')
   <!-- Select2 js-->
   <script src="{{ asset('assets/admin/assets/js/vendor.min.js')}}"></script>
   <script src="{{ asset('assets/admin/assets/libs/select2/js/select2.min.js')}}"></script>
        <!-- Quill js -->
        <script src="{{ asset('assets/admin/assets/libs/quill/quill.min.js')}}"></script>  
   <!-- Init js -->

     <script src="{{ asset('assets/admin/assets/js/pages/add-product.init.js')}}"></script>
        <!-- Dropzone file uploads-->
        <!-- <script src="{{ asset('assets/admin/assets/libs/dropzone/min/dropzone.min.js')}}"></script>
        <script src="{{ asset('assets/admin/assets/libs/dropify/js/dropify.min.js')}}"></script>
    -->

        <!-- Init js-->
        <script src="{{ asset('assets/admin/assets/js/pages/form-fileuploads.init.js')}}"></script>

      
  <script src="{{ asset('assets/admin/ckeditor/ckeditor.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });


  @endpush