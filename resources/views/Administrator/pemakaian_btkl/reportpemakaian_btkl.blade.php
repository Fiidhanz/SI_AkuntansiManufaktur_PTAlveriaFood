<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data asset</title>

    <style>
        body {
            box-sizing: border-box;
            font-size: 16px;
        }
        h1 {
            text-align: center;
        }
        table {
            box-sizing: border-box;
            border: 2px solid black;
            border-collapse: collapse;
            width: 100%;
        }
        thead {
            background-color: #0d47a1;
            color: white;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            text-align: left;
            padding: 10px;
        }
        .center {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Data asset</h1>
    <table align="center">
        <thead>
            <tr>
                <th class="center">No</th>
                <th>Nama Barang</th>
                <th>No</th>
                                <th>id Produksi</th>
                                <th>id Pegawai</th>
                                <th>Nama Pegawai</th>
                                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item=>$row)
                <tr>
                    <td class="center">{{ $item+1 }}</td>
                    <td>{{ $row->Nama_Barang}}</td>
                                    <td>{{ $row->id_Produksi}}</td>
                                    <td>{{ $row->id_Pegawai }}</td>
                                    <td>{{ $row->Nama_Pegawai }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>