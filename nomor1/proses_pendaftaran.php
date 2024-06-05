<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Pendaftar</title>
</head>
<body>
    <h1>Tampilan Pendaftar</h1><br><br>
    Selamat Datang <?= $_POST['nama'] ?><br>
    NIM: <?= $_POST['nim'] ?><br>
    Nama: <?= $_POST['nama'] ?><br>
    Email: <?= $_POST['email'] ?><br>
    Tempat Tanggal Lahir: <?= $_POST['kota'] . " " . $_POST['tanggal'] ?><br>
    Alamat: <?= $_POST['alamat'] ?><br>
    Jenis Kelamin: <?= $_POST['jenis_kelamin'] ?><br>
</body>
</html>