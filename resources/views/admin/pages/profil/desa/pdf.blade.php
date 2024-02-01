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
            <h2 class="mb-0 fw-bold">DATA DESA</h2>
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
                        <th>Nama Desa</th>
                        <th>Nama Kepala Desa</th>
                        <th>Foto Kepala Desa</th>
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
                            <td>{{ $data->nama_desa }}</td>
                            <td>{{ $data->nama_kepala_desa }}</td>
                            <td>
                                @if ($data->foto == null)
                                    <img src="{{ asset('assets/images/user.png') }}" alt="Logo"
                                        class="img-fluid img-thumbnail" width="100">
                                @else
                                    <img src="{{ url($data->foto) }}" alt="{{ $data->foto }}" alt="Logo"
                                        class="img-fluid img-thumbnail" width="100">
                                @endif
                            </td>
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
