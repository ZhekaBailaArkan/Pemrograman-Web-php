<?php

$conn = mysqli_connect("localhost", "root", "", "koperasi_siswa");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    $nama_siswa = $data["nama_siswa"];
    $nis = $data["nis"];
    $kelas = $data["kelas"];
    $jurusan = $data["jurusan"];
    $nominal = $data["nominal"];
    $tanggal = $data["tanggal"];

    $query = "INSERT INTO tabungan VALUES
                ('', '$nama_siswa', '$nis', '$kelas', '$jurusan', $nominal, '$tanggal')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
