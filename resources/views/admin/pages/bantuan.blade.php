@extends('admin.layouts.app')
@section('content')
    <!-- start page content wrapper-->
        <div class="row mb-3">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{asset('admin/beranda')}}">Beranda</a></li>
                            <li class="breadcrumb-item active">Bantuan</li>
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
                        <h1 class="fw-bold">Bantuan</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, accusantium est odio placeat possimus nostrum repudiandae animi illo modi similique.</p>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus tempore voluptate pariatur possimus quibusdam similique cumque suscipit blanditiis, odit cupiditate corporis, magni eius accusantium veniam nemo at quaerat modi nam!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae repellendus odio saepe voluptate doloremque illo suscipit tempora rerum numquam animi non laboriosam culpa, itaque veniam fugiat laudantium. Cumque error voluptatibus provident, laboriosam quam ea. Repellendus molestiae illo alias fuga porro!</p>
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
