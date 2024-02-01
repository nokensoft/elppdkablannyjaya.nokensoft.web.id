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
            <h2 class="mb-0 fw-bold">PROFIL DPRD</h2>
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
                        <th>Foto</th>
                        <th>Nama Lengkap</th>
                        <th>Jabatan</th>
                        <th>NIK</th>
                        <th>Alamat</th>
                        <th>TTL</th>
                        <th>Partai</th>
                        <th>Pendidikan</th>
                    </tr>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($datas as $data)
                        <tr>
                            <td class="text-center">{{ $i++ }}.</td>
                            <td>
                                @if (empty($data->foto))
                                    <img src="{{ asset('gambar/default.png') }}" alt="gambar"
                                        class="img-fluid img-thumbnail" width="100">
                                @else
                                    <img src="{{ asset('gambar/' . $data->foto) }}" alt="gambar"
                                        class="img-fluid img-thumbnail" width="150">
                                @endif
                            </td>
                            <td>{{ $data->nama_lengkap }} </td>
                            <td>{{ $data->jabatan }}</td>
                            <td>{{ $data->nik }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>{{ $data->ttl }}</td>
                            <td>{{ $data->nama_partai }}</td>
                            <td>{{ $data->pendidikan }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>

        </div>
    </div>



</body>

</html>
