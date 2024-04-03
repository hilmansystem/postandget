<?php
$nama = $_POST["nama"];
$umur = $_POST["umur"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BELAJAR POST</title>
</head>

<body>
    <p>Nama anda <?= $nama ?></p>
    <p>Umur anda <?= $umur ?> tahun</p>
    <p>Password anda aman!</p>
</body>

</html>