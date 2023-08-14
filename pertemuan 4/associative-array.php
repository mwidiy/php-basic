<?php 
    // array associative = array dengan ke string yang di buat sendiri
    $datas = [["nama"=>"widi","id"=>"09090909","email"=>"widi@gmail.com","alamat"=>"ds.kendalrejo"],["nama"=>"entok","id"=>"08080808","email"=>"entok@gamail.com","alamat"=>"ds.kendalrejo"]];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>array associative</title>
</head>
<body>
    <h1>data orang penting</h1>
    <?php foreach($datas as $data) :?>
        <ul>
            <li><?= $data["nama"]?></li>
            <li><?= $data["id"]?></li>
            <li><?= $data["email"]?></li>
            <li><?= $data["alamat"]?></li>
        </ul>
    <?php endforeach ?>
</body>
</html>