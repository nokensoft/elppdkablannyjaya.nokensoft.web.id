@extends('admin.layouts.app')
@section('content')
    <!-- start page content wrapper-->
        <div class="row mb-3">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Beranda</a></li>
                            <li class="breadcrumb-item active">Starter</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h1 class="fw-bold">Beranda</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil adipisci quam sit fuga incidunt! Iusto autem ipsum magni quod recusandae repudiandae facere saepe sunt cumque, molestiae tempore voluptas hic voluptatum dicta incidunt pariatur ipsam sequi omnis quibusdam unde delectus. Officiis impedit aspernatur, repellendus eveniet voluptas perspiciatis? Laboriosam repellendus vero ex voluptatibus dolorum necessitatibus ipsam sint! Consequuntur, sit? Possimus, quas, velit quisquam a, in quae quis natus eum tempore suscipit reprehenderit consequuntur eius! Incidunt in a vero impedit ab adipisci quibusdam ullam quasi deserunt, expedita obcaecati sed nesciunt nulla velit ducimus fuga laborum, placeat libero! Minima distinctio rerum obcaecati. Nihil, quos?</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card" id="tooltip-container">
                    <div class="card-body">
                        <i class="fa fa-info-circle text-muted float-end" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="bottom" title="More Info"></i>
                        <h4 class="mt-0 font-16">Income Status</h4>
                        <h2 class="text-primary my-3 text-center">$<span data-plugin="counterup">31,570</span></h2>
                        <p class="text-muted mb-0">Total income: $22506 <span class="float-end"><i class="fa fa-caret-up text-success me-1"></i>10.25%</span></p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card" id="tooltip-container1">
                    <div class="card-body">
                        <i class="fa fa-info-circle text-muted float-end" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="More Info"></i>
                        <h4 class="mt-0 font-16">Sales Status</h4>
                        <h2 class="text-primary my-3 text-center"><span data-plugin="counterup">683</span></h2>
                        <p class="text-muted mb-0">Total sales: 2398 <span class="float-end"><i class="fa fa-caret-down text-danger me-1"></i>7.85%</span></p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card" id="tooltip-container2">
                    <div class="card-body">
                        <i class="fa fa-info-circle text-muted float-end" data-bs-container="#tooltip-container2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="More Info"></i>
                        <h4 class="mt-0 font-16">Recent Users</h4>
                        <h2 class="text-primary my-3 text-center"><span data-plugin="counterup">3.2</span>M</h2>
                        <p class="text-muted mb-0">Total users: 121 M <span class="float-end"><i class="fa fa-caret-up text-success me-1"></i>3.64%</span></p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="card" id="tooltip-container3">
                    <div class="card-body">
                        <i class="fa fa-info-circle text-muted float-end" data-bs-container="#tooltip-container3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="More Info"></i>
                        <h4 class="mt-0 font-16">Total Revenue</h4>
                        <h2 class="text-primary my-3 text-center">$<span data-plugin="counterup">68,541</span></h2>
                        <p class="text-muted mb-0">Total revenue: $1.2 M <span class="float-end"><i class="fa fa-caret-up text-success me-1"></i>17.48%</span></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="float-end d-none d-md-inline-block">
                            <div class="btn-group mb-2">
                                <button type="button" class="btn btn-xs btn-light">Today</button>
                                <button type="button" class="btn btn-xs btn-secondary">Weekly</button>
                                <button type="button" class="btn btn-xs btn-light">Monthly</button>
                            </div>
                        </div>
                        <h4 class="header-title">Revenue</h4>
                        <div class="row mt-4 text-center">
                            <div class="col-4">
                                <p class="text-muted font-15 mb-1 text-truncate">Target</p>
                                <h4><i class="fe-arrow-down text-danger me-1"></i>$7.8k</h4>
                            </div>
                            <div class="col-4">
                                <p class="text-muted font-15 mb-1 text-truncate">Last week</p>
                                <h4><i class="fe-arrow-up text-success me-1"></i>$1.4k</h4>
                            </div>
                            <div class="col-4">
                                <p class="text-muted font-15 mb-1 text-truncate">Last Month</p>
                                <h4><i class="fe-arrow-down text-danger me-1"></i>$15k</h4>
                            </div>
                        </div>
                        <div class="mt-3 chartjs-chart">
                            <canvas id="revenue-chart" data-colors="#5671f0,#f1556c" height="300"></canvas>
                        </div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="float-end d-none d-md-inline-block">
                            <div class="btn-group mb-2">
                                <button type="button" class="btn btn-xs btn-secondary">Today</button>
                                <button type="button" class="btn btn-xs btn-light">Weekly</button>
                                <button type="button" class="btn btn-xs btn-light">Monthly</button>
                            </div>
                        </div>
                        <h4 class="header-title">Projections Vs Actuals</h4>
                        <div class="row mt-4 text-center">
                            <div class="col-4">
                                <p class="text-muted font-15 mb-1 text-truncate">Target</p>
                                <h4><i class="fe-arrow-down text-danger me-1"></i>$3.8k</h4>
                            </div>
                            <div class="col-4">
                                <p class="text-muted font-15 mb-1 text-truncate">Last week</p>
                                <h4><i class="fe-arrow-up text-success me-1"></i>$1.1k</h4>
                            </div>
                            <div class="col-4">
                                <p class="text-muted font-15 mb-1 text-truncate">Last Month</p>
                                <h4><i class="fe-arrow-down text-danger me-1"></i>$25k</h4>
                            </div>
                        </div>
                        <div class="mt-3 chartjs-chart">
                            <canvas id="projections-actuals-chart" data-colors="#11ca6d,#e3eaef" height="300"></canvas>
                        </div>
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col -->
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
