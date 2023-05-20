<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Kartu Hasil Studi | </title>
    <style>
        body{
            background-color: rgb(208, 235, 172)
        }
        .container {
            max-width: 800px;
        }
        .mb-5 {
            margin-bottom: 3rem;
        }
        .table {
            font-size: 14px;
        }
        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-success:hover,
        .btn-danger:hover {
            background-color: #8ace0d;
            border-color: #8ace0d;
        }
    </style>
</head>
<body>
    <div class="container mt-3">
        <h1 class="text-center mb-5">Kartu Hasil Studi (KHS)</h1>
        <h6><b>Nama: </b>{{ $mahasiswa->nama }}</h6>
        <h6><b>NIM: </b>{{ $mahasiswa->nim }}</h6>
        <h6><b>Kelas: </b>{{ $mahasiswa->kelas->nama_kelas }}</h6>
        <table class="table mt-5">
            <thead>
                <tr>
                    <th>Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Semester</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
                @foreach($khs as $s)
                <tr>
                    <td>{{ $s->nama_matkul }}</td>
                    <td>{{ $s->sks }}</td>
                    <td>{{ $s->semester }}</td>
                    <td>{{ $s->pivot->nilai }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-center">
            <a href="/mahasiswa" class="btn btn-success">Kembali</a>
            <a class="btn btn-danger" href="{{ route('mahasiswa.eksporKhs', $mahasiswa->id) }}" target="_blank">Cetak KHS</a>
        </div>
    </div>
</body>
</html>
