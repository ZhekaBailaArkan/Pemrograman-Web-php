<?php
require 'functions.php';

if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Berhasil');
                document.location.href = 'output.php';
            </script>";
    } else {
        echo "
            <script>
                alert('Gagal');
            </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengisi Form</title>
</head>

<body>

    <form action="" method="post">
        <label for="nama_siswa">Nama Siswa</label>
        <input type="text" name="nama_siswa" id="nama_siswa">
        <br>

        <label for="nis">NIS</label>
        <input type="text" name="nis" id="nis">
        <br>

        <label for="kelas">Kelas</label>
        <input type="text" name="kelas" id="kelas">
        <br>

        <label for="jurusan">Jurusan</label>
        <input type="text" name="jurusan" id="jurusan">
        <br>

        <label for="nominal">Nominal</label>
        <input type="text" name="nominal" id="nominal">
        <br>

        <label for="tanggal">Tanggal</label>
        <input type="date" name="tanggal" id="tanggal">
        <br>

        <button type="submit" name="submit">
            Submit
        </button>
    </form>

</body>

</html>