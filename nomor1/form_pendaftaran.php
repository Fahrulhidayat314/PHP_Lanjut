<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
</head>

<body>
    <h1>Form Pendaftaran</h1>

    <form action="proses_pendaftaran.php" method="post">
        <ul>
            <li>
                <label for="nim">NIM: </label>
                <input type="text" name="nim" id="nim">
            </li>
            <li>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="email">Email: </label>
                <input type="email" name="email" id="email">
            </li>
            <li>
                <label for="tanggal">Tanggal Lahir: </label>
                <input type="text" name="kota" id="tanggal">
                <input type="date" name="tanggal" id="tanggal">
            </li>
            <li>
                <label for="alamat">Alamat: </label>
                <textarea name="alamat" id="alamat"></textarea>
            </li>
            <li>
                <input type="radio" id="laki-laki" name="jenis_kelamin" value="laki-laki" class="gender-checkbox" />
                <label for="laki-laki">Laki-laki</label>
                <input type="radio" id="perempuan" name="jenis_kelamin" value="perempuan" class="gender-checkbox" />
                <label for="perempuan">Perempuan</label>
            </li>
            <button type="submit">Kirim</button>
        </ul>
    </form>

</body>

</html>