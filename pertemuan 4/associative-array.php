<?php 
    // array associative = array dengan ke string yang di buat sendiri
    $markets = [
        "data1"=>[
            "foto"=>"img/akungenshin1.jpg",
            "jenis"=>"genshin impack",
            "harga"=>"1000000",
            "toko"=>"chandra store",
            "deskripsi"=>"jual akun genshin b5 lengkap sisanya lihat foto",
        ],
        "data2"=>[
            "foto"=>"img/akungenshin2.jpg",
            "jenis"=>"genshin impack",
            "harga"=>"200000",
            "toko"=>"amelia store",
            "deskripsi"=>"jual akun genshin xiao c6 minus infoker",
        ],
        "data3"=>[
            "foto"=>"img/akunmlbb.jpg",
            "jenis"=>"mobile legend",
            "harga"=>"500000",
            "toko"=>"amelia store",
            "deskripsi"=>"jual akun mlbb skin legend gs epik limit banyak",
        ],
        "data4"=>[
            "foto"=>"img/akunpubg.jpg",
            "jenis"=>"pubg mobile",
            "harga"=>"1500000",
            "toko"=>"ferdy sambo",
            "deskripsi"=>"akun pubg full skin no minus siap reff",
        ],
        "data5"=>[
            "foto"=>"img/akunff.jpg",
            "jenis"=>"free fire",
            "harga"=>"100000",
            "toko"=>"danang tpg",
            "deskripsi"=>"jual akun ff full pet dan inventori rank gm",
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
    <h1>data toko online</h1>
    <?php foreach($markets as $market) :?>
        <ul>
            <li><img src="<?= $market["foto"]?>"></li>
            <li><?= $market["jenis"]?></li>
            <li><?= $market["harga"]?></li>
            <li><?= $market["toko"]?></li>
            <li><?= $market["deskripsi"]?></li>
        </ul>
    <?php endforeach ?>
</body>
</html>