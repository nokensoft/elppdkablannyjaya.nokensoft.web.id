  <!-- ========== Left Sidebar Start ========== -->
  <div class="left-side-menu">

<div class="h-100" data-simplebar>

    <!-- User box -->
    <div class="user-box text-center">
        <img src="{{ asset( Auth::user()->avatar )}}" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
        <div class="dropdown">
            <a href="javascript: void(0);" class="text-black dropdown-toggle h5 mt-2 mb-1 d-block"
                data-bs-toggle="dropdown"> {{ Auth::user()->name }}</a>                   
            <div class="dropdown-menu user-pro-dropdown">

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-user me-1"></i>
                    <span>My Account</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-settings me-1"></i>
                    <span>Settings</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-lock me-1"></i>
                    <span>Lock Screen</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-log-out me-1"></i>
                    <span>Logout</span>
                </a>

            </div>
        </div>
        <p class="text-muted">{{ Auth::user()->job_desc }}</p>
    </div>

    <!--- Sidemenu -->
    <div id="sidebar-menu">

        <ul id="side-menu">

            <li class="menu-title">Menu Utama {{asset('')}} {{url('')}}</li>

            <li>
                <a href="{{ url('/admin/beranda')}}">
                    <i data-feather="home"></i>
                    <span> Beranda </span>
                </a>
            </li>

            <li>
                <a href="{{ url('/admin/tentang-aplikasi')}}">
                    <i class="fa fa-bookmark"></i>
                    <span> Tentang Aplikasi </span>
                </a>
            </li>

            <li class="menu-title mt-2">Aplikasi</li>
            </li>

            <li>
                <a href="#sippid" data-bs-toggle="collapse">
                    <i class="fa fa-bookmark"></i>
                    <span> LPPD </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sippid">
                    <ul class="nav-second-level">
                        <li>
                            <a href="#">Sub Menu Item</a>
                        </li>
                        <li>
                            <a href="#">Sub Menu Item</a>
                        </li>                       
                    </ul>
                </div>
            </li>

            <li>
                <a href="#sidebarCrm" data-bs-toggle="collapse">
                    <i class="fa fa-bookmark"></i>
                    <span> IKK </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarCrm">
                    <ul class="nav-second-level">
                        <li>
                            <a href="#">Sub Menu Item</a>
                        </li>
                        <li>
                            <a href="#">Sub Menu Item</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li>
                <a href="#sidebarEcommerce" data-bs-toggle="collapse">
                    <i class="fa fa-bookmark"></i>
                    <span> Noken CMS </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEcommerce">
                    <ul class="nav-second-level">
                    <li>
                            <a href="{{ url('/app/kategori')}}">Kategori</a>
                        </li>
                        <li>
                            <a href="{{ url('/app/artikel')}}">Artikel</a>
                        </li>
                        <li>
                            <a href="{{ url('/app/halaman')}}">Halaman</a>
                        </li>
                        <li>
                            <a href="{{ url('/app/slider')}}">Slider</a>
                        </li>
                        <li>
                            <a href="{{ url('/app/video')}}">Video</a>
                        </li>
                        <li>
                            <a href="{{ url('/app/album')}}">Galery</a>
                        </li>
                        <li>
                            <a href="{{ url('/app/banner')}}">Banner</a>
                        </li>
                        <li>
                            <a href="{{ url('/app/person')}}">SDM</a>
                        </li>
                        
                    </ul>
                </div>
            </li>
            
        </ul>

    </div>
    <!-- End Sidebar -->

    <div class="clearfix"></div>

</div>
<!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->