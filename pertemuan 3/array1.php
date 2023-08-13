<?php
    $datas = [["widi","09090909","widi@gmail.com","ds.kendalrejo"],
    ["muscovy alex","080808","alexander-mucovy@gmail.com","ds.kendalrejo"]];
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
    <?php foreach ($datas as $data) : ?>
    <ul>
        <li><?= $data[0] ?></li>
        <li><?= $data[1] ?></li>
        <li><?= $data[2] ?></li>
        <li><?= $data[3] ?></li>
    </ul>
    <?php endforeach?>
</body>
</html>