<?php 
    $markets = [
        "data1"=>[
            "foto"=>"img/akungenshin1.jpg",
            "jenis"=>"genshin impack",
            "harga"=>"1000000",
            "toko"=>"chandra store",
            "deskripsi"=>"jual akun genshin b5 lengkap sisanya lihat foto",
            "buy"=>"beli"
        ],
        "data2"=>[
            "foto"=>"img/akungenshin2.jpg",
            "jenis"=>"genshin impack",
            "harga"=>"200000",
            "toko"=>"amelia store",
            "deskripsi"=>"jual akun genshin xiao c6 minus infoker",
            "buy"=>"beli"
        ],
        "data3"=>[
            "foto"=>"img/akunmlbb.jpg",
            "jenis"=>"mobile legend",
            "harga"=>"500000",
            "toko"=>"amelia store",
            "deskripsi"=>"jual akun mlbb skin legend gs epik limit banyak",
            "buy"=>"beli"
        ],
        "data4"=>[
            "foto"=>"img/akunpubg.jpg",
            "jenis"=>"pubg mobile",
            "harga"=>"1500000",
            "toko"=>"ferdy sambo",
            "deskripsi"=>"akun pubg full skin no minus siap reff",
            "buy"=>"beli"
        ],
        "data5"=>[
            "foto"=>"img/akunff.jpg",
            "jenis"=>"free fire",
            "harga"=>"100000",
            "toko"=>"danang tpg",
            "deskripsi"=>"jual akun ff full pet dan inventori rank gm",
            "buy"=>"beli"
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
</head>
<body>
    <h1>HALLO SELAMAT DATANG</h1>
    <h1>daftar akun</h1>
    <?php foreach($markets as $market) :?>
        <ul>
            <li><img src="<?= $market["foto"]?>"></li>
            <li><?= $market["jenis"]?></li>
            <li><?= $market["harga"]?></li>
            <li><?= $market["toko"]?></li>
            <li><?= $market["deskripsi"]?></li>
            <li>
                <a href="pembelian.php?foto=<?= $market["foto"]?>&jenis=<?= $market["jenis"]?>&harga=<?= $market["harga"]?>&toko=<?= $market["toko"]?>&deskripsi=<?= $market["deskripsi"]?>"><?= $market["buy"]?></a>
            </li>
        </ul>
    <?php endforeach ?>
    <br>
    <a href="post.php">logout</a>
</body>
</html>