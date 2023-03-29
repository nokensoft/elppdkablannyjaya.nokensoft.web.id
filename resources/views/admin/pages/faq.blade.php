@extends('admin.layouts.app')
@section('content')
    <!-- start page content wrapper-->

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h1 class="fw-bold">FAQ</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, accusantium est odio placeat possimus nostrum repudiandae animi illo modi similique.</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus tempore voluptate pariatur possimus quibusdam similique cumque suscipit blanditiis, odit cupiditate corporis, magni eius accusantium veniam nemo at quaerat modi nam!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae repellendus odio saepe voluptate doloremque illo suscipit tempora rerum numquam animi non laboriosam culpa, itaque veniam fugiat laudantium. Cumque error voluptatibus provident, laboriosam quam ea. Repellendus molestiae illo alias fuga porro!</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        
                        <div id="accordion" class="mb-3">
                            <div class="card mb-1">
                                <div class="card-header" id="headingOne">
                                    <h5 class="m-0">
                                        <a class="text-dark" data-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                            <i class="mdi mdi-help-circle mr-1 text-primary"></i> 
                                            What is Vakal text here?
                                        </a>
                                    </h5>
                                </div>
                    
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                        tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                                        anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                        excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                        you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="m-0">
                                        <a class="text-dark" data-toggle="collapse" href="#collapseTwo" aria-expanded="false">
                                            <i class="mdi mdi-help-circle mr-1 text-primary"></i> 
                                            Why use Vakal text here?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                        tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                                        anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                        excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                        you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-1">
                                <div class="card-header" id="headingThree">
                                    <h5 class="m-0">
                                        <a class="text-dark" data-toggle="collapse" href="#collapseThree" aria-expanded="false">
                                            <i class="mdi mdi-help-circle mr-1 text-primary"></i> 
                                            How many variations exist?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                        tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                                        anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                        excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                        you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-1">
                                <div class="card-header" id="headingFour">
                                    <h5 class="m-0">
                                        <a class="text-dark" data-toggle="collapse" href="#collapseFour" aria-expanded="false">
                                            <i class="mdi mdi-help-circle mr-1 text-primary"></i> 
                                            What is Vakal text here?
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="collapseFour" data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                        non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                        tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil
                                        anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                        excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                                        you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end #accordions-->
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
                        
                        

  <!--end wrapper-->

  @stop

  @push('script-footer')

  @endpush
