<?php
// Tanda . dibawah ini, adalah operasi concat / penggabungan string
$nama = $_POST["namaDepan"] . " " . $_POST["namaBelakang"];
$ttl = $_POST["ttl"];
$jenisKelamin = $_POST["jenisKelamin"];
$agama = $_POST["agama"];
$alamat = $_POST["alamat"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Ariq Hikari Hidayat - XI RPL 2 - Registrasi</title>
</head>

<body>
    <p>
        Selamat datang <?= $nama ?>, anda telah berhasil daftar. Data diri anda :
    </p>
    <p>
        Tempat, Tanggal lahir : <?= $ttl ?>
    </p>
    <p>
        Jenis Kelamin : <?= $jenisKelamin ?>
    </p>
    <p>
        Agama : <?= $agama ?>
    </p>
    <p>
        Alamat : <?= $alamat ?>
    </p>
</body>

</html>