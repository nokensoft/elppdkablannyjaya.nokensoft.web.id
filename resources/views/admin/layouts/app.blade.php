<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>SILPPD Kabupaten Lanny Jaya</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->

        <meta name="csrf-token" content="{{ csrf_token() }}">
        @include('admin.includes.header')
    </head>

    <!-- body start -->
    <body data-layout-mode="detached" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": true}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>


        <!-- Begin page -->
        <div id="wrapper">


        @include('admin.includes.header-nav')

            @include('admin.includes.sidebar')


            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        @yield('content')
                        <!-- end page title -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row text-uppercase">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> &copy; <a href="#" class="link-secondary">Sistem Informasi Laporan Penyelenggaraan Pemerintah Daerah, Kabupaten Lanny Jaya. </a>
                            </div>
                            <div class="col-md-6 text-end">
                                <span class="bg-outline-light">Versi 1.0</span>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        @include('sweetalert::alert')
        @include('admin.includes.footer')


    </body>
</html>
