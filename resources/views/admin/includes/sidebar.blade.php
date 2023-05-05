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
        </div>

        @if(Auth::user()->hasRole('administrator'))
        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Menu Utama</li>

                <li>
                    <a href="{{ url('/admin/beranda')}}">
                        <i data-feather="home"></i>
                        <span> Beranda </span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/admin/tentang-aplikasi')}}">
                        <i class="fa fa-laptop"></i>
                        <span> Tentang Aplikasi </span>
                    </a>
                </li>

                <li class="menu-title mt-2">Profil</li>
                </li>

                <li>
                    <a href="#profil_daerah" data-bs-toggle="collapse" aria-expanded="true">
                        <i class="fa fa-building"></i>
                        <span> Profil Daerah </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse show" id="profil_daerah">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{asset('admin/profildaerah/pemerintahdaerah')}}">Pemerintah Dearah</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/profildaerah/kepaladaerah')}}">Kepala Daerah</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/profildaerah/wakilkepaladaerah')}}">Wakil Kepala Daerah</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/profildaerah/sekretarisdaerah')}}">Sekretaris Daerah</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#data-master" data-bs-toggle="collapse" aria-expanded="true">
                        <i class="fa fa-bookmark"></i>
                        <span> Data Master </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse show" id="data-master">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{route('admin.dprd')}}">DPRD</a>
                            </li>
                            <li>
                                <a href="{{route('admin.perangkatdaerah')}}">Perangkat Daerah</a>
                            </li>
                            <li>
                                <a href="{{route('admin.distrik')}}">Distrik</a>
                            </li>
                            <li>
                                <a href="{{route('admin.desa')}}">Desa</a>
                            </li>
                            <li>
                                <a href="{{ route('pengguna.index') }}">Pengguna</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.gambar') }}">Kelolah Gambar</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="{{ url('/admin/pengaturan')}}">
                        <i class="fe-settings"></i>
                        <span> Pengaturan </span>
                    </a>
                </li>

                <li>
                    <a href="/filemanager">
                        <i class="fa fa-laptop"></i>
                        <span> File Manager </span>
                    </a>
                </li>

                {{-- <li>
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
                </li> --}}

            </ul>

        </div>
        <!-- End Sidebar -->

        @elseif (Auth::user()->hasRole('opd'))
        <!--- Sidemenu -->

        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Menu Utama</li>

                <li>
                    <a href="{{ url('/admin/beranda')}}">
                        <i data-feather="home"></i>
                        <span> Beranda </span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/admin/tentang-aplikasi')}}">
                        <i class="fa fa-laptop"></i>
                        <span> Tentang Aplikasi </span>
                    </a>
                </li>

                <li>
                    <a href="{{asset('admin/ikk')}}">
                        <i class="fa fa-laptop"></i>
                        <span> IKK </span>
                    </a>
                </li>


                <li class="menu-title mt-2">Profil</li>
                </li>

                <li>
                    <a href="#profil_daerah" data-bs-toggle="collapse" aria-expanded="true">
                        <i class="fa fa-building"></i>
                        <span> Profil Daerah </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse show" id="profil_daerah">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{asset('admin/profildaerah/pemerintahdaerah')}}">Pemerintah Dearah</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/profildaerah/kepaladaerah')}}">Kepala Daerah</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/profildaerah/wakilkepaladaerah')}}">Wakil Kepala Daerah</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/profildaerah/sekretarisdaerah')}}">Sekretaris Daerah</a>
                            </li>
                        </ul>
                    </div>
                </li>




            </ul>

        </div>
        <!-- End Sidebar -->

        @elseif (Auth::user()->hasRole('supervisor'))
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Menu Utama</li>

                <li>
                    <a href="{{ url('/admin/beranda')}}">
                        <i data-feather="home"></i>
                        <span> Beranda </span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/admin/tentang-aplikasi')}}">
                        <i class="fa fa-laptop"></i>
                        <span> Tentang Aplikasi </span>
                    </a>
                </li>
                <li>
                    <a href="{{asset('admin/ikk')}}">
                        <i class="fa fa-laptop"></i>
                        <span> IKK </span>
                    </a>
                </li>

                <li class="menu-title mt-2">Profil</li>
                </li>

                <li>
                    <a href="#profil_daerah" data-bs-toggle="collapse" aria-expanded="true">
                        <i class="fa fa-building"></i>
                        <span> Profil Daerah </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse show" id="profil_daerah">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{asset('admin/profildaerah/pemerintahdaerah')}}">Pemerintah Dearah</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/profildaerah/kepaladaerah')}}">Kepala Daerah</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/profildaerah/wakilkepaladaerah')}}">Wakil Kepala Daerah</a>
                            </li>
                            <li>
                                <a href="{{asset('admin/profildaerah/sekretarisdaerah')}}">Sekretaris Daerah</a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>

        </div>
        @endif

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
