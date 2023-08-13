<?php
    $datas = ["widi","09090909","widi@gmail.com","ds.kendalrejo"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array1</title>
</head>
<body>
    <h1>Daftar data orang penting</h1>
    <ul>
        <?php foreach ($datas as $data) : ?>
        <li><?= $data ?></li>
        <?php endforeach?>
    </ul>
</body>
</html>