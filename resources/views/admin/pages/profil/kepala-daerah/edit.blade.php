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
                            <li class="breadcrumb-item"><a href="{{asset('admin/kepala-daerah')}}">Profil</a></li>
                            <li class="breadcrumb-item active">Ubah Profil Kepala Daerah</li>
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

                                <h1 class="fw-bold">Ubah Profil Kepala Daerah</h1>
                                <p class="text-secondary">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed repudiandae recusandae suscipit eligendi ipsa, amet expedita dicta fugiat. Nihil accusantium beatae harum natus amet repudiandae quae! Consequuntur odio et quae ipsum distinctio, vero magnam necessitatibus, accusamus delectus provident autem minus impedit! Quidem similique dicta ipsam facilis impedit voluptates libero sunt.</p>

                                <form action="{{asset('admin/profil/pemerintah-daerah')}}" method="">

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Nama Lengkap</label>
                                        <input type="text" class="form-control form-control-lg" value="Nama Lengkap">
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Foto Kepala Daerah</label>
                                        <div class="my-3">
                                            <img src="{{asset('assets/admin/assets/images/users/user-man.png')}}" class="img-thumbnail p-3" alt="Logo" width="350px">
                                        </div>
                                        <input type="file" class="form-control form-control-lg">
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">NIK</label>
                                        <input type="text" class="form-control form-control-lg" value="19701234509876">
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Tanggal Lahir</label>
                                        <input type="text" class="form-control form-control-lg" value="11/22/1970">
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Tanggal Pelantikan</label>
                                        <input type="text" class="form-control form-control-lg" value="11/22/2023">
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Nomor SK</label>
                                        <input type="text" class="form-control form-control-lg" value="123456789">
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">File SK</label>
                                        <input type="text" class="form-control form-control-lg" value="https://namawebsite.com/folder/files123456">
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Asal Partai</label>
                                        <input type="text" class="form-control form-control-lg" value="Nama Partai">
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Visi & Misi</label>
                                        <textarea name="" id="" rows="15" class="form-control form-control-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, nulla voluptates molestiae blanditiis nemo odio ad? Magnam iste in iure!</textarea>
                                    </div>

                                    <div class="mb-3 fs-4">
                                        <label for="" class="fw-bold">Riwayat Pekerjaan</label>
                                        <textarea name="" id="" rows="5" class="form-control form-control-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste natus odio aspernatur aut deserunt earum?</textarea>
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


        
                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Summernote</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Summernote</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Default Editor</h4>
                                        <p class="sub-header">Super simple wysiwyg editor on Bootstrap</p>

                                        <!-- basic summernote-->
                                        <div id="summernote-basic"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->  

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title m-t-0">Inline Editor</h4>
                                        <p class="sub-header">Air-mode give an interface without the Toolbar. To reveal popover Toolbar, select a text where you want to modify. Simply turn on <code>airMode</code> and just focus on text.</p>
                                        <div id="summernote-airmode">
                                            <p>This is an Air-mode editable area.</p>
                                            <ul>
                                                <li>Select a text to reveal the toolbar.</li>
                                                <li>Edit rich document on-the-fly, so elastic!</li>
                                            </ul>
                                            <p>End of air-mode area</p>
                                        </div> 
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->  

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title m-t-0">Click to edit</h4>
                                        <p class="sub-header">You can edit content on the fly.</p>
                                        <div id="summernote-editmode">
                                            <h5>Hello User, </h5>
                                            <p>We create simple, flat & responsive admin dashboard template.</p>
                                            <p>Please, write text here!</p>
                                            <p class="lead">Super simple WYSIWYG editor on bootstrap.</p>
                                        </div>
                                        <button id="summernote-edit" class="btn btn-primary btn-sm"><i class="mdi mdi-pencil mr-1"></i> Edit</button>
                                        <button id="summernote-save" class="btn btn-success btn-sm mt-2" style="display: none;"><i class="mdi mdi-content-save-outline mr-1"></i> Save Changes</button> 
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->  

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0">Hint for words</h4>
                                        <p class="sub-header">Summernote supports autocomplete features, hint to help typing. You can define custom hints with options. Hint options can be an object or array for multiple hints.</p>
                                        <div id="summernote-hint"></div>
                                        
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div><!-- end col -->
                        </div>
                        <!-- end row --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0">Hint for emoji</h4>
                                        <p class="sub-header">For Emoji’s you can use <code>https://api.github.com/emojis</code></p>
                                        <div id="summernote-emoji"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div><!-- end col -->
                        </div>
                        <!-- end row --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mt-0">Hint for mentions</h4>
                                        <p class="sub-header">For Mentions: [jayden, sam, alvin, david]</p>
                                        <div id="summernote-hint-mentions"></div> 
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div><!-- end col -->
                        </div>
                        <!-- end row --> 
                        
                    </div> <!-- container -->
                        

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
