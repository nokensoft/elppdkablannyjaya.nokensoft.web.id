<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print</title>

    <!-- Bootstrap css -->
    <link href="{{ asset('assets/admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="{{ asset('assets/admin/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />
    <!-- icons -->
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
                    <h1 class="fw-bold">Perangkat Daerah</h1>

                    <div class="d-block mb-3">
                        Tanggal : <span class="fw-bold">{{ today()->toDateString() }}</span>
                    </div>

                    <div class="row">

                        <!-- .col start -->
                        <div class="col">

                            <table class="table table-bordered fs-4">
                                <thead class="bg-dark text-light">
                                    <tr>
                                        <th>Foto Kantor</th>
                                        <th>Nama Organisasi</th>
                                        <th>Nama Pimpinan</th>
                                        <th>Rumpun</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datas as $data )
                                    <tr>
                                        <td>
                                            @if (empty($data->perangkatdaerah->foto_gedung))
                                            <img src="{{ asset('assets/images/image1.png') }}" alt="Foto Kantor"
                                                width="150px" class="img-thumbnail">
                                            @else
                                            <img src="{{asset('file/foto/perangkatdaerah')}}/{{ $data->perangkatdaerah->foto_gedung ?? '' }}"
                                                class="img-fluid img-thumbnail" width="100px">
                                        </td>
                                        @endif
                                        </td>
                                        <td>{{$data->perangkatdaerah->nama_organisasi ?? ''}} </td>
                                        <td>{{$data->perangkatdaerah->nama_pimpinan ?? 'Data belum ada' }}</td>
                                        <td>{{$data->email ?? ''}}</td>
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
