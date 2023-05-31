<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="card">
        <h2>Data Mobil</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Mobil</th>
                    <th>Merk Mobil</th>
                    <th>CC</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataMobil as $mobil)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $mobil->['namaMobil'] }}</td>
                        <td>{{ $mobil->['merkMobil'] }}</td>
                        <td>{{ $mobil->['CC'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>