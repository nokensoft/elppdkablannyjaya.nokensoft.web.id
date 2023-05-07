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
                    <h1 class="fw-bold">IKK @if(!empty($bidang_ikk)) {{$bidang_ikk}} @endif</h1>

                    <div class="row">

                        <!-- .col start -->
                        <div class="col">

                            <table class="table table-bordered fs-4">
                                <thead class="bg-dark text-light">
                                    <tr>
                                        <th class="text-dark">No IKK</th>
                                        <th class="text-dark">Urusan</th>
                                        <th class="text-dark">IKK</th>
                                        <th class="text-dark">Rumus</th>
                                        <th class="text-dark">Capaian Kinerja</th>
                                        <th class="text-dark">Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($all as $data )
                                    <tr>
                                        <td>{{$data->no_ikk}}</td>
                                        <td>{{$data->urusan}}</td>
                                        <td>{{$data->ikk}}</td>
                                        <td>{{$data->rumus}}</td>
                                        <td>{{$data->capaian_kinerja}} %</td>
                                        <td>{{$data->keterangan}}</td>
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
