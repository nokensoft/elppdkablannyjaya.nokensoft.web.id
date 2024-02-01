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
            <h2 class="mb-0 fw-bold">DATA DISTRIK</h2>
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
                        <th>Nama Distrik</th>
                        <th>Ibu Kota</th>
                        <th>Nama Kepala Distrik</th>
                        <th>Foto Kepala Distrik</th>
                        <th>Alamat</th>
                        <th>Telp</th>
                        <th>Email</th>
                    </tr>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($datas as $data)
                        <tr>
                            <td class="text-center">{{ $i++ }}.</td>
                            <td>{{ $data->nama_distrik }}</td>
                            <td>{{ $data->ibu_kota_distrik }}</td>
                            <td>{{ $data->nama_kepala_distrik }}</td>
                            <td>
                                @if ($data->foto == null)
                                    <img src="{{ asset('assets/admin/assets/images/users/user-man.png') }}"
                                        alt="Logo" width="100" class="img-thumbnail">
                                @else
                                    <img src="{{ url($data->foto) }}" alt="{{ $data->foto }}"
                                        class="img-fluid img-thumbnail" width="100">
                            </td>
                    @endif
                    </td>
                    <td>{{ $data->alamat }}</td>
                    <td>{{ $data->telp }}</td>
                    <td>{{ $data->email }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>

        </div>
    </div>



</body>

</html>
