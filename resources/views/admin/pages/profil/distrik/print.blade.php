<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $page_title . " - " . today()->toDateString() }}</title>

    <!-- Bootstrap css -->
    <link href="{{ asset('assets/admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    
    <!-- App css -->
    <link href="{{ asset('assets/admin/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style"/>
    
    <!-- STYLE -->
    <style>
        @media print{
            @page {
                size: landscape;
                font: 11px;
            }

            body {
                zoom: 60%;
            }
        }
    </style>

</head>
<body onload="window.print()">
    
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="fw-bold">Profil Distrik</h1>

                    <div class="d-block mb-3">
                        Tanggal : <span class="fw-bold">{{ today()->toDateString() }}</span>
                    </div>

                    <div class="row">

                        <!-- .col start -->
                        <div class="col">

                            <table class="table table-bordered fs-4">
                                <thead class="text-dark fw-bold">
                                    <tr>
                                        <th>Nama Distrik</th>
                                        <th>Ibu Kota</th>
                                        <th>Nama Kepala Distrik</th>
                                        <th>Foto Kepala Distrik</th>
                                        <th>Alamat</th>
                                        <th>Telp</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datas as $data )
                                        <tr>
                                            <td>{{$data->nama_distrik}}</td>
                                            <td>{{$data->ibu_kota_distrik}}</td>
                                            <td>{{$data->nama_kepala_distrik}}</td>
                                            <td>
                                                @if ($data->foto == null)
                                                    <img src="{{asset('assets/admin/assets/images/users/user-man.png')}}" alt="Logo" width="100%" class="img-thumbnail">
                                                @else
                                                 <img src="{{ url($data->foto)}}" alt="{{$data->foto}}" class="img-fluid img-thumbnail" width="100"></td>
                                                @endif
                                            </td>
                                            <td>{{$data->alamat}}</td>
                                            <td>{{$data->telp}}</td>
                                            <td>{{$data->email}}</td>
                                        </tr>


                                    @endforeach
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
                    

    
</body>
</html>