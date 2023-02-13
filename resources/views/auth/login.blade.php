<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Log In | E-LPPD KABUPATEN LANNY JAYA</title>
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
        <!-- font awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                                        <img src="{{ asset('./assets/admin/assets/images/logo-dark.png') }}" alt="" height="22">
                                    </span>
                                </a>

                                <a href="index.html" class="logo logo-light text-center">
                                    <span class="logo-lg">

                                        <img src="{{ asset('./assets/admin/assets/images/logo-light.png') }}" alt="" height="22">
                                    </span>
                                </a>
                            </div>
                        </div>

                        <!-- title-->
                        <h4 class="mt-0 display-1 fw-bold">Sign In</h4>
                        <p class="text-muted mb-4">Masukan alamat email dan kata sandi Anda untuk mengakses.</p>

                        <!-- form -->
                        <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                                <label for="emailaddress" class="form-label">Alamat Email</label>
                                <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Alamat Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <a href="auth-recoverpw-2.html" class="text-muted float-end"><small>Lupa kata sandi Anda?</small></a>
                                <label for="password" class="form-label">Kata Sandi</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Kata Sandi">
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
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                            <div class="text-center d-grid">
                                <button class="btn btn-lg btn-primary text-uppercase" type="submit"> <i class="fa-solid fa-sign-in me-1"></i> Log In </button>
                            </div>

                        </form>
                        <!-- end form-->

                        <!-- Footer-->
                        <footer class="footer footer-alt">
                            <p class="text-muted">Belum punya akun? <a href="#hubungi-admin" class="text-muted ms-1"><b><i class="fa-brands fa-whatsapp"></i> Hubungi Admin</b></a></p>
                        </footer>

                    </div> <!-- end .card-body -->
                </div> <!-- end .align-items-center.d-flex.h-100-->
            </div>
            <!-- end auth-fluid-form-box-->

            <!-- Auth fluid right content -->
            <div class="auth-fluid-right text-center">
                <div class="auth-user-testimonial">
                    <img src="{{ asset('./assets/admin/assets/images/lanny-jaya/logo-kab-lanny-jaya.png') }}" alt="Logo Kabupaten Lanny Jaya" class="img img-fluid py-lg-3" style="width: 300px;">
                    <h1 class="display-1 fw-bold text-white">E-LPPD</h1>
                    <p class="fw-bold h2 text-white text-uppercase">Sistem Informasi laporan Penyelengaraan Pemerintah Daerah</p>
                    <p class="fw-bold h2 text-white text-uppercase">Kabupaten Lanny Jaya</p>
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
