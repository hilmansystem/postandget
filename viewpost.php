<?php
$penulis = $_POST["penulis"];
$tanggal = $_POST["tanggal"];
$judul = $_POST["judul"];
$isiBerita = $_POST["isiBerita"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Ariq Hikari Hidayat - XI RPL 2 - View Post</title>
</head>

<body>
    <h2><?= $judul ?></h2>
    <h4><?= $penulis ?> • <?= $tanggal ?></h4>
    <p><?= $isiBerita ?></p>
</body>

</html>