<?php 
    // array associative = array dengan ke string yang di buat sendiri
    $datas = [
        "data1"=>[
            "foto"=>"img/hutao.png",
            "nama"=>"widi",
            "id"=>"09090909",
            "email"=>"widi@gmail.com",
            "alamat"=>"ds.kendalrejo",
            "poin"=>[100,100,100]
        ]
        ,"data2"=>[
            "foto"=>"img/entok.png",
            "nama"=>"entok",
            "id"=>"08080808",
            "email"=>"entok@gamail.com",
            "alamat"=>"ds.kendalrejo",
            "poin"=>[90,80,40]
        ]
    ];
  
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
            <li><img src="<?= $data["foto"]?>"></li>
            <li><?= $data["nama"]?></li>
            <li><?= $data["id"]?></li>
            <li><?= $data["email"]?></li>
            <li><?= $data["alamat"]?></li>
            <?php foreach($data["poin"] as $nilai) :?>
                <li><?= $nilai?></li>
            <?php endforeach ?>
        </ul>
    <?php endforeach ?>
</body>
</html>