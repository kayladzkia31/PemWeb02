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
    <h2>Form Tambah Mobil</h2>
    <form action="/mobil/simpanData" method="POST">
        @csrf
        <div class= "form-group">
            <label for="">Nama Mobil</label><br>
            <input type="text" name="nama_mobil" required><br>
        </div>
        <div>
            <label for="">Merk Mobil</label><br>
            <input type="text" name="merk_mobil" required><br>
        </div>
        <div>
            <label for="">CC</label><br>
            <input type="text" name="cc" required><br>
        </div>
        <div class="from-group"><br>
            <button type="submit">Tambah Data</button>
        </div>
    </form>
</body>
</html>