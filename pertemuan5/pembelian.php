<?php
    // pengecekan untuk variable $_get ada datanya
    // isset = mengecek variable udah pernah di buat belum
    // header berfungsi untuk memindahkan user
    if (!isset($_GET["jenis"])){
        header("location: get.php");
        exit;
    }
    $_GET;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pembelian</title>
    <style>
        p {
            display: inline;
            margin: 0 2px;
        }
    </style>
</head>
<body>
    <h1>Selamat datang di kasir area</h1>
    <p>produck yang anda pilih</p>
    <ul>
        <img src="<?= $_GET["foto"]?>">
        <li><?= $_GET["jenis"]?></li>
        <li><?= $_GET["harga"]?></li>
        <li><?= $_GET["toko"]?></li>
        <li><?= $_GET["deskripsi"]?></li>
    </ul>
    <p><a href="#">lanjut beli</a></p>
    <p><a href="get.php">batalkan</a></p>
</body>
</html>