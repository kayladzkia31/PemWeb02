<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Form Hendling</title>
    <style>
        .btn-reset{
            background-color: red;
            color:white;
            padding: 5px;
            border:0;
            border: radius 10px;;
        }
    </style>
</head>
<body>
    <h1>Form Pendaftaran Mahasiswa</h1>
    <form action="Belajar_POST.php" method="POST">
        <!-- tipe text -->
        <label for="">Nama Mahasiswa</label><br>
        <input type="text" name="Nama"><br><br>
        <!-- type radio -->
        <label for="">Jenis Kelamin</label><br>
        <input type="radio" name="Jenis Kelamin" value="Laki-Laki"><label for="">Laki-Laki</label>
        <input type="radio" name="Jenis Kelamin" value="Perempuan"><label for="">Perempuan</label><br><br>
        <!-- type checkbox -->
        <label for="">Mata Kuliah</label><br>
        <input type="checkbox" name="Matkul" value="Matematika Komputer">
            <label for="">Matematika Komputer</label><br>
        <input type="checkbox" name="Matkul" value="Pemograman Web 2">
            <label for="">Pemograman Web 2</label><br><br>
        <!-- type number -->
        <label for="">Nomor Telepon</label><br>
        <input type="number" name="Nomor_Telepon"><br><br>
        <!-- button -->
        <button type="submit" class="btn-kirim">Kirim!</button>
        <button type="reset" class="btn-reset">Reset Data</button>
    </form>
</body>
</html>