<!DOCTYPE html>
<html>

<head>
    <title>{{ $title }}</title>
    <!-- Bootstrap css -->
    <link href="{{ asset('assets/admin/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <style>
        * {
            font-family: 'Times New Roman', 'arial';

        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 4px;
        }
    </style>
</head>

<body>
    <div class="row mb-0">
        <div class="col text-center ">
            <h2 class="mb-0 fw-bold">PERANGKAT DAERAH</h2>
            <h2 class="fw-bold">KABUPATEN LANNY JAYA</h2>
            <hr>

        </div>
    </div>

    <div class="row mb-1 mt-0">
        <div class="col">
            <div class="mb-0">
                <p> Tanggal : <span class="fw-bolder">{{ $tanggal }}</span> </p>
            </div>

            <div class="mt-0">
                <table class="table table-bordered">
                    <tr class="text-center">
                        <th>No</th>
                        <th>Foto Kantor</th>
                        <th>Nama Organisasi</th>
                        <th>Nama Pimpinan</th>
                        <th>Email</th>
                    </tr>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($datas as $data)
                        <tr>
                            <td class="text-center">{{ $i++ }}.</td>
                            <td>
                                @if (empty($data->perangkatdaerah->foto_gedung))
                                    <img src="{{ asset('assets/images/image1.png') }}" alt="Foto Kantor" width="150px"
                                        class="img-thumbnail">
                                @else
                                    <img src="{{ asset('file/foto/perangkatdaerah') }}/{{ $data->perangkatdaerah->foto_gedung ?? '' }}"
                                        class="img-fluid img-thumbnail" width="100px">
                                @endif
                            </td>
                            </td>
                            <td>{{ $data->perangkatdaerah->nama_organisasi ?? '' }} </td>
                            <td>{{ $data->perangkatdaerah->nama_pimpinan ?? 'Data belum ada' }}</td>
                            <td>{{ $data->email ?? '' }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>

        </div>
    </div>



</body>

</html>
