<?php

require 'functions.php';

$result = query("SELECT * FROM tabungan");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output Tabungan</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    * {
        font-family: Helvetica;
    }

    thead {
        background-color: darkgrey;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
</style>

<body>

    <div class="container">
        <table cellspacing="0" cellpadding="15" border="1">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Siswa</th>
                    <th>NIS</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th>Nominal</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($result as $row) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $row["nama_siswa"]; ?></td>
                        <td><?= $row["nis"]; ?></td>
                        <td><?= $row["kelas"]; ?></td>
                        <td><?= $row["jurusan"]; ?></td>
                        <td><?= $row["nominal"]; ?></td>
                        <td><?= $row["tanggal"]; ?></td>
                    </tr>
                <?php
                    $i++;
                endforeach;
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>