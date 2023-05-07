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
    <link href="{{ asset('assets/admin/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- STYLE -->
    <style>
        @media print {
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
                    <h1 class="fw-bold">Profil Desa</h1>

                    <div class="d-block mb-3">
                        Tanggal : <span class="fw-bold">{{ today()->toDateString() }}</span>
                    </div>

                    <div class="row">

                        <!-- .col start -->
                        <div class="col">

                            <table class="table table-bordered fs-4">
                                <thead class="text-dark dw-bold">
                                    <tr>
                                        <th>Nama Desa</th>
                                        <th>Nama Kepala Desa</th>
                                        <th>Foto Kepala Desa</th>
                                        <th>Alamat</th>
                                        <th>Telp</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datas as $data )
                                    <tr>
                                        <td>{{$data->nama_desa}}</td>
                                        <td>{{$data->nama_kepala_desa}}</td>
                                        <td>
                                            @if ($data->foto == null)
                                            <img src="{{asset('assets/images/user.png')}}" alt="Logo"
                                                class="img-fluid img-thumbnail" width="100">
                                            @else
                                            <img src="{{ url($data->foto)}}" alt="{{$data->foto}}" alt="Logo"
                                                class="img-fluid img-thumbnail" width="100">
                                        </td>
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
