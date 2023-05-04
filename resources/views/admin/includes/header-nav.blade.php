            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <ul class="list-unstyled topnav-menu float-end mb-0">

                        <li class="dropdown d-none d-lg-inline-block">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen" href="#">
                                <i class="fe-maximize noti-icon"></i>
                            </a>
                        </li>

                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="{{ asset( Auth::user()->avatar )}}" alt="{{Auth::user()->avatar}}" class="rounded-circle">
                                <span class="pro-user-name ms-1">
                                {{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">{{ Auth::user()->job_desc }} </h6>
                                </div>

                                <!-- item-->
                                <a href="{{ route('app.profilIndex') }}" class="dropdown-item notify-item">
                                    <i class="fe-user"></i>
                                    <span>Profil</span>
                                </a>
                                <!-- item-->
                                
                                @if(Auth::user()->hasRole('administrator'))
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-settings"></i>
                                    <span>Pengaturan</span>
                                </a>
                                @endif

                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fe-log-out"></i>
                                    <span>  {{ __('Logout') }}</span>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                            </div>
                        </li>
                    </ul>

                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="{{url('admin/beranda')}}" class="logo logo-dark text-center">
                            <span class="logo-sm">
                                <img src="{{ asset('assets/admin/assets/images/logo-sm.png')}}" alt="" height="40">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('assets/admin/assets/images/logo-light.png')}}" alt="" height="40">
                            </span>
                        </a>

                        <a href="{{url('admin/beranda')}}" class="logo logo-light text-center">
                            <span class="logo-sm">
                                <img src="{{ asset('assets/admin/assets/images/logo-sm.png')}}" alt="" height="40">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('assets/admin/assets/images/logo-light.png')}}" alt="" height="40">
                            </span>
                        </a>
                    </div>

                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                        <li>
                            <button class="button-menu-mobile waves-effect waves-light">
                                <i class="fe-menu"></i>
                            </button>
                        </li>

                        <li>
                            <!-- Mobile menu toggle (Horizontal Layout)-->
                            <a class="navbar-toggle nav-link" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>
                        @if(Auth::user()->hasRole('administrator'))

                        <!-- Jalan Pintas-->
                        <li class="dropdown d-none d-xl-block">
                            <a class="nav-link dropdown-toggle waves-effect waves-light fs-4" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fas fa-book me-1"></i>
                                LPPD
                                <i class="mdi mdi-chevron-down"></i>
                            </a>
                            <div class="dropdown-menu">
                                <!-- item-->
                                <a href="{{asset('admin/lppd/monitoring')}}" class="dropdown-item fs-4">
                                    <i class="fas fa-bookmark me-1"></i>
                                    <span>Monitoring</span>
                                </a>
                                <!-- item-->
                                <a href="{{asset('admin/lppd/pelaporan')}}" class="dropdown-item fs-4">
                                    <i class="fas fa-bookmark me-1"></i>
                                    <span>Pelaporan</span>
                                </a>
                                <!-- item-->
                            </div>
                        </li>

                        <li class="dropdown d-none d-xl-block">
                            <a class="nav-link dropdown-toggle waves-effect waves-light fs-4" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fas fa-book me-1"></i>
                                IKK
                                <i class="mdi mdi-chevron-down"></i>
                            </a>
                            <div class="dropdown-menu">

                                <a href="{{asset('admin/ikk/pendidikan')}}" class="dropdown-item fs-4">
                                    <i class="fas fa-bookmark me-1"></i>
                                    <span>IKK Pedidikan</span>
                                </a>
                                <!-- item-->

                                <a href="{{asset('admin/ikk/kesehatan')}}" class="dropdown-item fs-4">
                                    <i class="fas fa-bookmark me-1"></i>
                                    <span>IKK Kesehatan</span>
                                </a>
                                <!-- item-->

                                <a href="{{asset('admin/ikk/pekerjaanumum')}}" class="dropdown-item fs-4">
                                    <i class="fas fa-bookmark me-1"></i>
                                    <span>IKK Pekerjaan Umum</span>
                                </a>
                                <div class="border-top border-1 pt-3 mt-4"></div>
                                <!-- item-->

                                <a href="{{asset('admin/ikk')}}" class="dropdown-item fs-4">
                                    <i class="fas fa-bookmark me-1"></i>
                                    <span>Liat Semua Data</span>
                                </a>
                                <!-- item-->

                            </div>
                        </li>
                        
                        @endif

                    </ul>
                    <div class="clearfix"></div>

                </div>
            </div>
            <!-- end Topbar -->
