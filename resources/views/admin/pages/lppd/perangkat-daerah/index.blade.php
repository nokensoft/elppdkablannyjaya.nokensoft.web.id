@extends('admin.layouts.app')
@section('content')
    <!-- start page content wrapper-->
        <div class="row mb-3">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{asset('admin/beranda')}}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="{{asset('admin/ppid')}}">PPID</a></li>
                            <li class="breadcrumb-item active">Pelaporan</li>
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
                        <h1 class="fw-bold">Perangkat Daerah</h1>
                        <div class="mb-3">
                            <a href="{{asset('admin/profil/dprd/tambah')}}" class="btn btn-info waves-effect waves-light fs-4">
                                <i class="fas fa-plus me-1"></i> Tambah Data
                            </a>
                        </div>

                        <div class="row">

                            <!-- .col start -->
                            <div class="col">

                                <table class="table table-bordered fs-4">
                                    <thead class="bg-dark text-light">
                                        <tr>
                                            <th>Nama Organisasi</th>
                                            <th>Urusan</th>
                                            <th>Rumpun</th>
                                            <th>Tipe Kantor</th>
                                            <th>Alamat</th>
                                            <th>Kepala Organiasi</th>
                                            <th>Jumlah Pegawai</th>
                                            <th>Status</th>
                                            <th>Foto Gedung Kantor</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>SATPOL PP </td>
                                            <td>Urusan</td>
                                            <td>Rumpun</td>
                                            <td>Tipe Kantor</td>
                                            <td>Alamat Lengkap</td>
                                            <td>Nama Pimpinan</td>
                                            <td>Jumlah Pegawai</td>
                                            <td>Status</td>
                                            <td>Foto Gedung</td>
                                            <td scope="row">
                                                <a href="#" class="btn btn-sm btn-dark waves-effect waves-light">
                                                    <span class="badge fs-4">
                                                        <i class="fas fa-upload mr-1"></i> Unggah Dokumen
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sekretariat Daerah </td>
                                            <td>Urusan</td>
                                            <td>Rumpun</td>
                                            <td>Tipe Kantor</td>
                                            <td>Alamat Lengkap</td>
                                            <td>Nama Pimpinan</td>
                                            <td>Jumlah Pegawai</td>
                                            <td>Status</td>
                                            <td>Foto Gedung</td>
                                            <td scope="row">
                                                <a href="#" class="btn btn-sm btn-dark waves-effect waves-light">
                                                    <span class="badge fs-4">
                                                        <i class="fas fa-upload mr-1"></i> Unggah Dokumen
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sekretariat DPRD </td>
                                            <td>Urusan</td>
                                            <td>Rumpun</td>
                                            <td>Tipe Kantor</td>
                                            <td>Alamat Lengkap</td>
                                            <td>Nama Pimpinan</td>
                                            <td>Jumlah Pegawai</td>
                                            <td>Status</td>
                                            <td>Foto Gedung</td>
                                            <td scope="row">
                                                <a href="#" class="btn btn-sm btn-dark waves-effect waves-light">
                                                    <span class="badge fs-4">
                                                        <i class="fas fa-upload mr-1"></i> Unggah Dokumen
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>INSPEKTORAT </td>
                                            <td>Urusan</td>
                                            <td>Rumpun</td>
                                            <td>Tipe Kantor</td>
                                            <td>Alamat Lengkap</td>
                                            <td>Nama Pimpinan</td>
                                            <td>Jumlah Pegawai</td>
                                            <td>Status</td>
                                            <td>Foto Gedung</td>
                                            <td scope="row">
                                                <a href="#" class="btn btn-sm btn-dark waves-effect waves-light">
                                                    <span class="badge fs-4">
                                                        <i class="fas fa-upload mr-1"></i> Unggah Dokumen
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Badan Perencanaan Pembangunan Daerah </td>
                                            <td>Urusan</td>
                                            <td>Rumpun</td>
                                            <td>Tipe Kantor</td>
                                            <td>Alamat Lengkap</td>
                                            <td>Nama Pimpinan</td>
                                            <td>Jumlah Pegawai</td>
                                            <td>Status</td>
                                            <td>Foto Gedung</td>
                                            <td scope="row">
                                                <a href="#" class="btn btn-sm btn-dark waves-effect waves-light">
                                                    <span class="badge fs-4">
                                                        <i class="fas fa-upload mr-1"></i> Unggah Dokumen
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Badan Pendapatan, Pengelolaan Keuangan dan Aset Daerah </td>
                                            <td>Urusan</td>
                                            <td>Rumpun</td>
                                            <td>Tipe Kantor</td>
                                            <td>Alamat Lengkap</td>
                                            <td>Nama Pimpinan</td>
                                            <td>Jumlah Pegawai</td>
                                            <td>Status</td>
                                            <td>Foto Gedung</td>
                                            <td scope="row">
                                                <a href="#" class="btn btn-sm btn-dark waves-effect waves-light">
                                                    <span class="badge fs-4">
                                                        <i class="fas fa-upload mr-1"></i> Unggah Dokumen
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Badan Kepegawaian, Pendidikan dan Pelatihan Aparatur</td>
                                            <td>Urusan</td>
                                            <td>Rumpun</td>
                                            <td>Tipe Kantor</td>
                                            <td>Alamat Lengkap</td>
                                            <td>Nama Pimpinan</td>
                                            <td>Jumlah Pegawai</td>
                                            <td>Status</td>
                                            <td>Foto Gedung</td>
                                            <td scope="row">
                                                <a href="#" class="btn btn-sm btn-dark waves-effect waves-light">
                                                    <span class="badge fs-4">
                                                        <i class="fas fa-upload mr-1"></i> Unggah Dokumen
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Badan Penanggulangan Bencana Daerah</td>
                                            <td>Urusan</td>
                                            <td>Rumpun</td>
                                            <td>Tipe Kantor</td>
                                            <td>Alamat Lengkap</td>
                                            <td>Nama Pimpinan</td>
                                            <td>Jumlah Pegawai</td>
                                            <td>Status</td>
                                            <td>Foto Gedung</td>
                                            <td scope="row">
                                                <a href="#" class="btn btn-sm btn-dark waves-effect waves-light">
                                                    <span class="badge fs-4">
                                                        <i class="fas fa-upload mr-1"></i> Unggah Dokumen
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>... </td>
                                            <td>...</td>
                                            <td>...</td>
                                            <td>...</td>
                                            <td>...</td>
                                            <td>...</td>
                                            <td>...</td>
                                            <td>...</td>
                                            <td>...</td>
                                            <td scope="row">
                                                <a href="#" class="btn btn-sm btn-dark waves-effect waves-light">
                                                    <span class="badge fs-4">
                                                        <i class="fas fa-upload mr-1"></i> Unggah Dokumen
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                            </div>
                            <!-- .col end -->

                        </div>

                    </div>
                </div>
            </div>
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
