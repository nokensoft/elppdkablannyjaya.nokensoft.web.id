<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title> SILANNY</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/admin/assets/images/favicon.png')}}">

		<!-- Bootstrap css -->
		<link href="{{ asset('assets/admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
		<!-- App css -->
		<link href="{{ asset('assets/admin/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style"/>
		<!-- icons -->
		<link href="{{ asset('assets/admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
		<!-- Head js -->
		<script src="{{ asset('assets/admin/assets/js/head.js')}}"></script>

    </head>

    <body class="auth-fluid-pages pb-0">

        <div class="auth-fluid">
            <!--Auth fluid left content -->
            <div class="auth-fluid-form-box">
                <div class="align-items-center d-flex h-100">
                    <div class="p-3">

                        <!-- Logo -->
                        <div class="auth-brand text-center text-lg-start">
                            <div class="auth-logo">
                                <a href="index.html" class="logo logo-dark text-center">
                                    <span class="logo-lg">
                                        <img src="assets/admin/assets/images/logo-dark.png" class="w-100" alt="Logo SILPPD" height="">
                                    </span>
                                </a>

                                <a href="index.html" class="logo logo-light text-center">
                                    <span class="logo-lg">
                                        <img src="assets/admin/assets/images/logo-light.png" class="w-100" alt="Logo SILPPD" height="">
                                    </span>
                                </a>
                            </div>
                        </div>

                        <!-- title-->
                        <h4 class="mt-0 display-3 fw-bold">Login</h4>
                        <p class="text-muted mb-4">Masukan alamat email dan kata sandi Anda untuk mengakses sistem informasi. </p>

                        <!-- form -->
                        <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                                <label for="emailaddress" class="form-label">Alamat Email</label>
                                <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                {{-- <a href="auth-recoverpw-2.html" class="text-muted float-end"><small>Lupa kata sandi?</small></a> --}}
                                <label for="password" class="form-label">Kata Sandi</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    <div class="input-group-text" data-password="false">
                                        <span class="password-eye"></span>
                                    </div>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                        </div>
                            <div class="text-center d-grid">
                                <button class="btn btn-primary btn-lg fw-bold" type="submit"><i class="fas fa-sign-in-alt mr-1"></i> Log In </button>
                            </div>

                        </form>
                        <!-- end form-->

                        <!-- Footer-->
                        <footer class="footer footer-alt">
                            @include('info')
                            <p class="text-muted">Terkendala saat login? <a href="#" class="text-muted ms-1"><b>Hubungi Admin</b></a></p>
                        </footer>

                    </div> <!-- end .card-body -->
                </div> <!-- end .align-items-center.d-flex.h-100-->
            </div>
            <!-- end auth-fluid-form-box-->

            <!-- Auth fluid right content -->
            <div class="auth-fluid-right text-center">
                <div class="auth-user-testimonial">
                    <img src="assets/admin/assets/images/logo-kab-lanny-jaya.png" alt="Logo Kabupaten Lanny Jaya" class="col-lg-2 mx-auto">
                    <h2 class="my-3 text-white display-1 fw-bold">SILANNY</h2>
                    <p class="text-uppercase display-6 fw-bold">Sistem Informasi Laporan Penyelenggaraan Pemerintahan <br> Kabupaten Lanny Jaya</p>
                </div> <!-- end auth-user-testimonial-->
            </div>
            <!-- end Auth fluid right content -->
        </div>
        <!-- end auth-fluid-->

        <!-- Vendor js -->
        <script src="{{ asset('assets/admin/assets/js/vendor.min.js')}}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/admin/assets/js/app.min.js')}}"></script>

    </body>
</html>
